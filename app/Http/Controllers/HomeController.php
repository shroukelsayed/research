<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Governorate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partials.home');
    }

    public function addGovernorate()
    {
        $govs = Governorate::pluck('name','code');
        return view('partials.add-Governorate',compact('govs'));
    
    }

    public function storeGovernorate(Request $request)
    {

        var_dump($request->all());
        die();
        $govs = Governorate::pluck('name','code');
        return view('partials.add-Governorate',compact('govs'));
    
    }
}
