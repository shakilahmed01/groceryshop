<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
      return view('dashboard.index');
    }

    function about(){
      return view('dashboard.about');
    }

    function bestdeal(){
      return view('dashboard.bestdeal');
    }

    function service(){
      return view('dashboard.service');
    }

    function special(){
      return view('dashboard.special');
    }

    function events(){
      return view('dashboard.events');
    }
}
