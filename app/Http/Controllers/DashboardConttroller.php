<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardConttroller extends Controller
{

    public  function deposit(){
        return view('dashboard.deposit');
    }


    public  function withdraw(){
        return view('dashboard.withdraw');
    }

    public  function investment(){
        return view('dashboard.investment');
    }


    public  function transfer(){
        return view('dashboard.transfer');
    }

    public  function transaction(){
        return view('dashboard.transaction');
    }

    public  function refferal(){
        return view('dashboard.refferal');
    }

    public  function ticket(){
        return view('dashboard.ticket');
    }

    public  function fa(){
        return view('dashboard.fa');
    }


    public  function profile(){
        return view('dashboard.profile');
    }

    public  function password(){
        return view('dashboard.password');
    }
}
