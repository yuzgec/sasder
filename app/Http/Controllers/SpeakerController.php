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
        $All = Speaker::with('getProject')->orderBy('rank')->where('project_id', 10)->get();
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
        $New->project_id = 10;

        if ($request->hasFile('image')) {
            $New->addMedia($request->image)->toMediaCollection('page');
        }

        $New->save();

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('speaker.index');

    }


    public function show($id)
    {
        $Show = Speaker::findOrFail($id);
        return view('frontend.speaker.index', compact('Show'));
    }

    public function edit($id)
    {
        $Edit = Speaker::findOrFail($id);
        return view('backend.speaker.edit', compact('Edit'));
    }

    public function update(SpeakerRequest $request, $id)
    {
        $Update = Speaker::findOrFail($id);

        $Update->speaker_name = $request->speaker_name;
        $Update->speaker_title = 'test';
        $Update->speaker_subject = $request->speaker_subject;
        $Update->speaker_education = 'test';
        $Update->speaker_day = 'test';
        $Update->project_id = $request->project_id;

        if($request->removeImage == "1"){
            $Update->media()->where('collection_name', 'page')->delete();
        }

        if ($request->hasFile('image')) {
            $Update->media()->where('collection_name', 'page')->delete();
            $Update->addMedia($request->image)->toMediaCollection('page');
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
