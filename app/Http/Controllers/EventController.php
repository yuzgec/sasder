<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    $All = Event::with('getCategory')->orderBy('rank')->get();
    $Kategori = EventCategory::all();
    return view('backend.event.index', compact('All', 'Kategori'));
}

    public function create()
{
    $Kategori = EventCategory::pluck('title', 'id');
    return view('backend.event.create',  compact('Kategori'));
}


    public function store(EventRequest $request)
{
    $New = new Event;
    $New->title = $request->title;
    $New->slug = seo($request->title);
    $New->category = $request->category;
    $New->short = $request->short;
    $New->desc = $request->desc;

    $New->seo_desc = $request->seo_desc;
    $New->seo_key = $request->seo_key;
    $New->seo_title = $request->seo_title;

    if($request->hasfile('image')){
        $New->addMedia($request->image)->withResponsiveImages()->toMediaCollection('Event');
    }

    if($request->hasfile('gallery')) {
        foreach ($request->gallery as $item){
            $New->addMedia($item)->withResponsiveImages()->toMediaCollection('gallery');
        }
    }

    $New->save();

    toast(SWEETALERT_MESSAGE_CREATE,'success');
    return redirect()->route('Event.index');

}


    public function show($id)
{
    $Show = Event::findOrFail($id);
    return view('frontend.Event.index', compact('Show'));
}

    public function edit($id)
{


    $Edit = Event::findOrFail($id);

    //dd($Edit->getMedia('Event'));
    $Kategori = EventCategory::pluck('title', 'id');
    return view('backend.event.edit', compact('Edit', 'Kategori'));
}

    public function update(EventRequest $request, $id)
{
    $Update = Event::findOrFail($id);
    $Update->title = $request->title;
    $Update->slug = seo($request->title);
    $Update->category = $request->category;
    $Update->short = $request->short;
    $Update->desc = $request->desc;

    $Update->seo_title = $request->seo_title;
    $Update->seo_desc = $request->seo_desc;
    $Update->seo_key = $request->seo_key;

    if($request->removeImage == "1"){
        $Update->media()->where('collection_name', 'Event')->delete();
    }

    if ($request->hasFile('image')) {
        $Update->media()->where('collection_name', 'Event')->delete();
        $Update->addMedia($request->image)->withResponsiveImages()->toMediaCollection('Event');
    }

    if($request->hasfile('gallery')) {
        foreach ($request->gallery as $item){
            $Update->addMedia($item)->withResponsiveImages()->toMediaCollection('gallery');
        }
    }

    $Update->save();

    toast(SWEETALERT_MESSAGE_UPDATE,'success');
    return redirect()->route('Event.index');

}

    public function destroy($id)
{
    $Delete = Event::findOrFail($id);
    $Delete->delete();

    toast(SWEETALERT_MESSAGE_DELETE,'success');
    return redirect()->route('Event.index');
}

    public function getTrash(){
    $Trash = Event::onlyTrashed()->orderBy('deleted_at','desc')->get();
    return view('backend.event.trash', compact('Trash'));
}

    public function getOrder(Request $request){
    foreach($request->get('Event') as  $key => $rank ){
        Event::where('id',$rank)->update(['rank'=>$key]);
    }
}

    public function getSwitch(Request $request){
    $update=Event::findOrFail($request->id);
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

    $Delete = Event::find($id);
    $Delete->media()->where('id', \request('image_id'))->delete();

    toast(SWEETALERT_MESSAGE_DELETE,'success');
    return redirect()->route('Event.edit', $id);

}
}
