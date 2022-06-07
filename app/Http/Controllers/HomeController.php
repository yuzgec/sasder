<?php

namespace App\Http\Controllers;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\UserRequest;
use App\Models\MailSubcribes;
use App\Models\Page;
use App\Models\Project;
use App\Models\Speaker;
use App\Models\Team;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\Video;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function uyelik(){
        $Cookies = Page::where('id',7)->first();
        return view('frontend.uyelik.register', compact('Cookies'));
    }

    public function uyeol(UserRequest $request)
    {
        DB::transaction(function () use ($request) {
            $New = new User;
            $New->name = $request->name;
            $New->email = $request->email;
            $New->password = Hash::make(time());
            $New->phone = $request->phone;

            $New->save();

            $Details = new UserDetails;
            $Details->user_id = $New->id;
            $Details->tckn = $request->tckn;
            $Details->surname = $request->surname;
            $Details->birthday = $request->birthday;
            $Details->education = $request->education;
            $Details->workplace = $request->workplace;
            $Details->mission = $request->mission;
            $Details->webpage = $request->webpage;
            $Details->save();
        });

        $User = User::with('user')->where('email', $request->email)->first();
        Mail::send("frontend.mail.siparis",compact('User'),function ($message) use($User) {
            $message->to($User->email)->subject('Syn. '.$User->name.' '. $User->user->surname.' üyelik başvurunuz işleme alınmıştır.');
        });
        Mail::send("frontend.mail.siparis",compact('User'),function ($message) use($User) {
            $message->to(MAIL_SEND)->subject('Syn. '.$User->name.' '. $User->user->surname.' ait yeni üyelik başvurusu.');
        });
        return view('frontend.uyelik.success');
    }

    public function yonetimkurulu(){

        $All =  Team::where('status', 1)->get();
        //dd($All);
        return view('frontend.yonetim.index',compact('All'));
    }

    public function yonetimdetay($url){
        $Detail = Team::where('slug', $url)->first();
        return view('frontend.yonetim.details', compact('Detail'));
    }


    public function kongre(){
        $Project =  Project::where('status', 1)->get();
        return view('frontend.kongreler.index',compact('Project'));
    }

    public function kongredetay($url){
        $Detay = Project::where('slug',$url)->firstOrFail();
        $Konusmacilar = Speaker::where('project_id',$Detay->id)->get();
        $Days = Speaker::where('project_id',$Detay->id)->groupBy('speaker_day')->get();
        return view('frontend.kongreler.details', compact('Detay', 'Konusmacilar', 'Days'));
    }

    public function video()
    {
        $All =  Video::where('status', 1)->get();
        return view('frontend.video.index', compact('All'));
    }

    public function kurumsal($url){
        $Detay = Page::where('slug', $url)->firstOrFail();

        SEOTools::setTitle($Detay->title);
        SEOTools::setDescription($Detay->seo_desc);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(route('kurumsal', $Detay->slug));
        SEOTools::opengraph()->addProperty('type', 'page');
        SEOTools::twitter()->setSite('@kiblegahaile');
        SEOTools::jsonLd()->addImage($Detay->getFirstMediaUrl('page','thumb'));

        return view('frontend.kurumsal.index', compact('Detay'));
    }

    public function iletisim(){
        return view('frontend.sayfa.iletisim');
    }

    public function mailsubcribes(Request $request){
        MailSubcribes::create(['email_address' => $request->email, 'ip_address' => $request->ip()]);
        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('home');
    }

    public function search(SearchRequest $request){

    }

    public function etkinlikler(){
        return view('frontend.etkinlikler.index');
    }


}
