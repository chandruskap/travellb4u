<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        return view('front.index', ['title']);
    }
    public function hotel(Request $request)
    {
        return view('front.hotel', ['title']);
    }
    public function fights(Request $request)
    {
        return view('front.fights', ['title']);
    }
    public function holidays(Request $request)
    {
        return view('front.holidays', ['title']);
    }
    public function contact(Request $request)
    {
        return view('front.contact', ['title']);
    }
}
