<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('public.index');
    }

    public function commande(){
        return view('public.commande');
    }

    public function contact(){
        return view('public.contact');
    }
}
