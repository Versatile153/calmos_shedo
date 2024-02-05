<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesConttroller extends Controller
{



    public  function about(){
        return view('pages.about');
    }

    public  function insight(){
        return view('pages.insight');
    }

    public  function contact(){
        return view('pages.contact');
    }


    public  function services(){
        return view('pages.services');
    }


    public  function medic(){
        return view('pages.medic-canabis');
    }


    public  function crypto(){
        return view('pages.crypto');
    }


    public  function agric(){
        return view('pages.agriculture');
    }

    public  function gold(){
        return view('pages.gold');
    }
    public  function estate(){
        return view('pages.estate');
    }

    public  function advise(){
        return view('pages.advise');
    }


    public  function privacy(){
        return view('pages.privacy');
    }



    public  function summary(){
        return view('pages.summary');
    }



    public  function terms(){
        return view('pages.terms');
    }
}
