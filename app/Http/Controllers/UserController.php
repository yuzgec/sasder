<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $All = UserDetails::with('getUser')->get();
        return view('backend.user.index', compact('All'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(UserRequest $request)
    {
        $New = new User;
        $New->title = $request->title;
        $New->category = $request->category;
        $New->short = $request->short;
        $New->desc = $request->desc;

        $New->save();
        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('faq.index');

    }

    public function edit($id)
    {
        $Edit = UserDetails::with('getUser')->findOrFail($id);
        return view('backend.user.edit', compact('Edit'));
    }

    public function update(UserRequest $request, $id)
    {
        $Update = User::findOrFail($id);
        $Update->title = $request->title;
        $Update->category = $request->category;
        $Update->short = $request->short;
        $Update->desc = $request->desc;

        $Update->save();

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('faq.index');

    }

    public function destroy($id)
    {
        $Delete = User::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('faq.index');
    }

    public function getTrash(){
        $Trash = User::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.faq.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('faq') as  $key => $rank ){
            User::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update= User::findOrFail($request->id);
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
}
