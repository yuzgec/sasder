<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\PageRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $All = Project::with('getCategory')->orderBy('rank')->get();
        $Kategori = ProjectCategory::all();
        return view('backend.project.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = ProjectCategory::pluck('title', 'id');
        return view('backend.project.create',  compact('Kategori'));
    }


    public function store(ProjectRequest $request)
    {
        $New = new Project;
        $New->title = $request->title;
        $New->slug = seo($request->title);
        $New->category = $request->category;
        $New->short = $request->short;
        $New->desc = $request->desc;

        $New->tab1 = $request->tab1;
        $New->tab2 = $request->tab2;
        $New->tab3 = $request->tab3;
        $New->tab4 = $request->tab4;

        $New->seo_desc = $request->seo_desc;
        $New->seo_key = $request->seo_key;
        $New->seo_title = $request->seo_title;

        if($request->image){
            $New->addMedia($request->image)->toMediaCollection('page');
        }

        $New->save();
        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('project.index');

    }


    public function show($id)
    {
        $Show = Project::findOrFail($id);
        return view('frontend.project.index', compact('Show'));

    }

    public function edit($id)
    {
        $Edit = Project::findOrFail($id);
        $Kategori = ProjectCategory::pluck('title', 'id');
        return view('backend.project.edit', compact('Edit', 'Kategori'));
    }

    public function update(PageRequest $request, $id)
    {

        $Update = Project::findOrFail($id);

        $Update->title = $request->title;
        $Update->slug = seo($request->title);
        $Update->category = $request->category;
        $Update->short = $request->short;
        $Update->desc = $request->desc;

        $Update->tab1 = $request->tab1;
        $Update->tab2 = $request->tab2;
        $Update->tab3 = $request->tab3;
        $Update->tab4 = $request->tab4;

        $Update->seo_title = $request->seo_title;
        $Update->seo_desc = $request->seo_desc;
        $Update->seo_key = $request->seo_key;

        $Update->save();

        if($request->removeImage == "1"){
            $Update->media()->where('collection_name', 'page')->delete();
        }

        if ($request->hasFile('image')) {
            $Update->media()->where('collection_name', 'page')->delete();
            $Update->addMedia($request->image)->toMediaCollection('page');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $Update->addMedia($item)->toMediaCollection($request->seo_key);
            }
        }

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('project.index');

    }

    public function destroy($id)
    {
        $Delete = Project::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('project.index');
    }

    public function getTrash(){
        $Trash = Project::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.project.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('page') as  $key => $rank ){
            Project::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Project::findOrFail($request->id);
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

        $Delete = Project::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('project.edit', $id);

    }
}
