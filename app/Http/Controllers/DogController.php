<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Area;
use App\Country;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function test() {
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
        return view('tests.dogregister');
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

        //画像を保存する専用で、新しく作成したフォルダの名前を$dirに格納する。
        //imagesフォルダのパス⇒C:\xampp\htdocs\TEST\storage\app\public\images
        // $file_name = $request->file('img')->getClientOriginalName();
        $file_name = $request->img->getClientOriginalName();
        $dir = 'images';
        //bladeファイルでfile要素のimgネームにアップされた動画を、そのファイル名を維持したまま
        //public/images/の中に保存する。
        $request->img->storeAs('public/' . $dir, $file_name);
        $dog->file_name = $file_name;

        if(isset($_POST["area"])) {
            $area = $_POST["area"];
        }
        $dog->area_id = $area;
        
        if(isset($_POST["country"])) {
            $country = $_POST["country"];
        }
        $dog->country_id = $country;


        $dog->purpose = $request->input('purpose');
        $dog->color = $request->input('color');
        $dog->character = $request->input('character');
        $dog->history = $request->input('history');
        $dog->save();
        // $randomdog = DB::inRandomOrder()->first();
        return view('tests.index', compact('dog'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        // $areas = Area::all();
        // $countries = Country::all();

        $asiadogs = DB::select("select * from dogs where area_id = 1 and country_id = 1 and country_id = 2 and country_id = 3")->simplePaginate(1);
        $europedogs = DB::select("select * from dogs where area_id = 2 and country_id = 4 and country_id = 5 and country_id = 6 and country_id = 7 and country_id = 8 and country_id = 9 and country_id = 10
        country_id = 11 and country_id = 12")->simplePaginate(1);
        $africadogs = DB::select("select * from dogs where area_id = 3 and country_id = 15")->simplePaginate(1);
        $namericadogs = DB::select("select * from dogs where area_id = 5 and country_id = 13")->simplePaginate(1);
        $samericadogs = DB::select("select * from dogs where area_id = 6 and country_id = 14")->simplePaginate(1);
        // return $asiadogs, $europedogs, $africadogs, $namericadogs, $samericadogs;

    }

    public function dogdetails(Dog $dog)
    {
        return view('tests.dogdetails')->with('dog', 'asiadogs', 'europedogs', 'africadogs', 'namericadogs', 'samericadogs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */

}
