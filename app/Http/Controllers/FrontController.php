<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class FrontController extends Controller
{

    public function changeLang(){
        return view('user.profile.changelang');
    }

    public function changeLanguage($lang = null)
    {
        $language = Language::where('code', $lang)->first();
        if (!$language) {
            $lang = 'en';
        }
        session()->put('lang', $lang);
        
        // Retrieve all languages
        $languages = Language::all();
        
        // Pass the selected language and all languages to the view
        return view('user.profile.changelang', compact('lang', $languages));
    }
    


    public function index()
    {
        return view('main.home');
    }

    public function about()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.services');
    }

    public function contact()
    {
        return view('main.contact');
    }
    public function faq()
    {
        return view('main.faq');
    }
   
    public function tutorial()
    {
        return view('main.tutorial');
    }

    public function team()
    {
        return view('main.team');
    }
    public function termcandition()
    {
        return view('main.term-candition');
    }

    public function news()
    {
        return view('main.news');
    }



}
