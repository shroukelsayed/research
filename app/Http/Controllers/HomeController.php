<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Governorate;
use App\City;
use App\District;
use App\Following;

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
        return view('partials.add-governorate',compact('govs'));
    
    }

    public function storeGovernorate(Request $request)
    {

        // var_dump($request->all());
        // die();

        $governorate = new Governorate();
        $governorate->name = $request->input('name');
        $governorate->code = $request->input('code');
        $governorate->save();

        $govs = Governorate::pluck('name','code');
        return view('partials.add-governorate',compact('govs'));
    
    }

    public function addCity()
    {
        $govs = Governorate::pluck('name','code');
        return view('partials.add-city',compact('govs'));
    
    }

    public function storeCity(Request $request)
    {

        // var_dump($request->all());
        // die();

        $city = new City();
        $city->name = $request->input('name');
        $city->code = $request->input('code');
        $city->governorate_id = $request->input('governorate_id');
        $city->save();

        $govs = Governorate::pluck('name','code');
        return view('partials.add-city',compact('govs'));
    
    }

    public function addDistrict()
    {
        $govs = City::pluck('name','code');
        return view('partials.add-district',compact('govs'));
    
    }

    public function storeDistrict(Request $request)
    {

        $district = new District();
        $district->name = $request->input('name');
        $district->code = $request->input('code');
        $district->city_id = $request->input('city_id');
        $district->save();

        $govs = City::pluck('name','code');
        return view('partials.add-district',compact('govs'));
    
    }

    public function addFollowing()
    {
        $govs = District::pluck('name','code');
        return view('partials.add-following',compact('govs'));
    
    }

    public function storeFollowing(Request $request)
    {

        $following = new Following();
        $following->name = $request->input('name');
        $following->code = $request->input('code');
        $following->district_id = $request->input('district_id');
        $following->save();

        $govs = District::pluck('name','code');
        return view('partials.add-following',compact('govs'));
    
    }
}
