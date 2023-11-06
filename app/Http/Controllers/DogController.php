<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Area;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DogController extends Controller
{
    public function index()
    {
        $randomdogs = DB::table('dogs')
                        ->select('dogs.name as dog_name', 'file_name', 'country_id', 'countries.name as country_name', 'purpose', 'color', 'feature')
                        ->leftJoin('countries', 'dogs.country_id', 'countries.id')
                        ->inRandomOrder()->first();
        return view('tests.index', compact('randomdogs'));
    }

    public function test()
    {
        return view('tests.test');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dogprofile()
    {
        return view('tests.dogprofile');
    }

    public function inquiry()
    {
        return view('tests.inquiry');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $countryoption = Country::select('id', 'name')->get();
        return view('tests.dogregister', compact('countryoption'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dog = new Dog;
        $dog->name = $request->input('name');

        $file_name = $request->img->getClientOriginalName();
        $request->img->storeAs('public/', $file_name);
        $dog->file_name = $file_name;
        
        if(isset($_POST["country"])) {
            $country = $_POST["country"];
        }
        $dog->country_id = $country;
        $dog->purpose = $request->input('purpose');
        $dog->color = $request->input('color');
        $dog->feature = $request->input('feature');
        $dog->history = $request->input('history');
        $dog->save();
        return view('tests.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */

    public function dogdetails(int $area_id)
    {
        $results = Dog::with('country:id,name as country_name,area_id', 'area:id')
        ->wherehas('country', function($q) use($area_id)
        {
            $q->where('area_id', $area_id);
        })->simplePaginate(1);
        return view('tests.dogdetails', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
}
