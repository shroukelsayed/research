<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $govs = Governorate::all();
        // var_dump($govs);
        return view('partials.add-governorate',compact('govs'));
    }

    public function storeGovernorate(Request $request)
    {
        $governorate = new Governorate();

        $last_gov = Governorate::orderby('id', 'desc')->first();

        $new_gov_code = 0 ;

        if( !is_null($last_gov)){
            $new_gov_code = $last_gov->code + 1;
        }else{
            $new_gov_code = 1;
        }

        $governorate->name = $request->input('name');
        $governorate->code = $new_gov_code;
        $governorate->save();

        return $this->addGovernorate();
    }

    public function addCity()
    {
        $govs = Governorate::pluck('name','code');
        $cities = City::all();
        return view('partials.add-city',compact('govs','cities'));
    }

    public function storeCity(Request $request)
    {
        $city = new City();

        $cities = City::all();
        $last_city = City::whereRaw('code = (SELECT max(CAST(code AS UNSIGNED)) from cities)')->get()->toArray();

        $new_city_code = 0 ;

        if( !is_null($last_city)){
            $new_city_code = $last_city[0]['code'] + 1;
        }else{
            $new_city_code = 1;
        }

        $city->name = $request->input('name');
        $city->code = $new_city_code;
        $city->governorate_id = $request->input('governorate_id');
        $city->save();

        return $this->addCity();
    }

    public function addDistrict()
    {
        $cities = City::pluck('name','code');
        $districts = District::all();

        return view('partials.add-district',compact('cities','districts'));
    }

    public function storeDistrict(Request $request)
    {
        $district = new District();

        $districts = District::all();
        $last_district = District::whereRaw('code = (SELECT max(CAST(code AS UNSIGNED)) from districts)')->get()->toArray();

        $new_district_code = 0 ;

        if( !is_null($last_district)){
            $new_district_code = $last_district[0]['code'] + 1;
        }else{
            $new_district_code = 1;
        }


        $district->name = $request->input('name');
        $district->code = $new_district_code;
        $district->city_id = $request->input('city_id');
        $district->save();

        return $this->addDistrict();
    }

    public function addFollowing()
    {
        $districts = District::pluck('name','code');
        $followings = Following::all();

        return view('partials.add-following',compact('districts','followings'));
    }

    public function storeFollowing(Request $request)
    {
        $following = new Following();
        
        $followings = Following::all();
        // $last_following = Following::orderby('id', 'desc')->first();
        $last_following = Following::whereRaw('code = (SELECT max(CAST(code AS UNSIGNED)) from followings)')->get()->toArray();
        $new_following_code = 0 ;

        if( !is_null($last_following)){
            $new_following_code = $last_following[0]['code'] + 1;
        }else{
            $new_following_code = 1;
        }


        $following->name = $request->input('name');
        $following->code = $new_following_code;
        $following->district_id = $request->input('district_id');
        $following->save();

        return $this->addFollowing();
    }


    public function getGovernorate( Request $request)
    {
        $governorate = DB::table('governorates')->where('code' , '=', $request->input('id'))->first();
        return $governorate->name;
    }


    public function getCity( Request $request)
    {
        $city = DB::table('cities')->where('code' , '=', $request->input('id'))->first();
        return $city->name;
    }


    
    public function getDistrict( Request $request)
    {
        $district = DB::table('districts')->where('code' , '=', $request->input('id'))->first();
        return $district->name;
    }

    public function getFollowing(Request $request)
    {
        $following = DB::table('followings')->where('code' , '=', $request->input('id'))->first();      
        return $following->name;
    }



    public function getCities( Request $request)
    {
        $cities =  DB::select("SELECT code,name FROM cities  where governorate_id = ".$request->input('governorate_id'));
        return $cities;
    }

    public function getDistricts( Request $request)
    {
        $districts =  DB::select("SELECT code,name FROM districts  where city_id = ".$request->input('city_id'));
        return $districts;
    }

    public function getFollowings( Request $request)
    {
        $followings =  DB::select("SELECT code,name FROM followings  where district_id = ".$request->input('district_id'));
        return $followings;
    }
    
    public function editGovernorate( Request $request)
    {
        // var_dump($request->all());die;
        $gov = Governorate::find($request->input('id'));
        $gov->name = $request->input('name');
        $gov->save();
        return $this->addGovernorate();
    }

    public function editCity( Request $request)
    {
        // var_dump($request->all());die;
        $gov = City::find($request->input('id'));
        $gov->name = $request->input('name');
        $gov->save();
        return $this->addCity();
    }

    public function editDistrict( Request $request)
    {
        // var_dump($request->all());die;
        $gov = District::find($request->input('id'));
        $gov->name = $request->input('name');
        $gov->save();
        return $this->addDistrict();
    }

    public function editFollowig( Request $request)
    {
        // var_dump($request->all());die;
        $gov = Following::find($request->input('id'));
        $gov->name = $request->input('name');
        $gov->save();
        return $this->addFollowing();
    }

   
}
