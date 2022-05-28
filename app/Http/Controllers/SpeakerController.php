<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpeakerRequest;
use App\Models\Speaker;
use App\Models\SpeakerCategory;
use App\Models\SpeakerGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SpeakerController extends Controller
{
    public function index()
    {
        $All = Speaker::with('getProject')->orderBy('rank')->get();
        return view('backend.speaker.index', compact('All'));
    }

    public function create()
    {
        $Kategori = DB::table('days')->pluck('id', 'title');
        return view('backend.speaker.create',  compact('Kategori'));
    }


    public function store(SpeakerRequest $request)
    {
        $New = new Speaker;

        $New->speaker_name = $request->speaker_name;
        $New->speaker_title = $request->speaker_title;
        $New->speaker_subject = $request->speaker_subject;
        $New->speaker_education = $request->speaker_education;
        $New->speaker_day = $request->speaker_day;
        $New->project_id = $request->project_id;

        $New->seo_desc = $request->seo_desc;
        $New->seo_key = $request->seo_key;
        $New->seo_title = $request->seo_title;

        if($request->hasfile('image')){
            $New->addMedia($request->image)->withResponsiveImages()->toMediaCollection('Speaker');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $New->addMedia($item)->withResponsiveImages()->toMediaCollection('gallery');
            }
        }

        $New->save();

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('speaker.index');

    }


    public function show($id)
    {
        $Show = Speaker::findOrFail($id);
        return view('frontend.Speaker.index', compact('Show'));
    }

    public function edit($id)
    {
        $Edit = Speaker::findOrFail($id);
        $Kategori = ['1. Gün', '2. Gün', '3. Gün', '4.Gün', '5. Gün', 'Konuşmacılar'];
        return view('backend.Speaker.edit', compact('Edit', 'Kategori'));
    }

    public function update(SpeakerRequest $request, $id)
    {
        $Update = Speaker::findOrFail($id);
        $Update->title = $request->title;
        $Update->slug = seo($request->title);
        $Update->category = $request->category;
        $Update->short = $request->short;
        $Update->desc = $request->desc;

        $Update->seo_title = $request->seo_title;
        $Update->seo_desc = $request->seo_desc;
        $Update->seo_key = $request->seo_key;

        if($request->removeImage == "1"){
            $Update->media()->where('collection_name', 'page')->delete();
        }

        if ($request->hasFile('image')) {
            $Update->media()->where('collection_name', 'page')->delete();
            $Update->addMedia($request->image)->withResponsiveImages()->toMediaCollection('page');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $Update->addMedia($item)->withResponsiveImages()->toMediaCollection('gallery');
            }
        }

        $Update->save();

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('speaker.index');

    }

    public function destroy($id)
    {
        $Delete = Speaker::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('speaker.index');
    }

    public function getTrash(){
        $Trash = Speaker::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.speaker.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('speaker') as  $key => $rank ){
            Speaker::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Speaker::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function postUpload(Request $request)
    {

        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = seo($filename).'_'.time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Resim Yüklendi';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function deleteGaleriDelete($id){

        $Delete = Speaker::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('speaker.edit', $id);

    }
}
