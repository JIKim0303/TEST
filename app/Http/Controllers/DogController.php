<?php

namespace App\Http\Controllers;

use App\Dog;
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
        $dog = new Dog();
        $filename = $request->image->getClientOriginName();
        $img = $request->image->storeAs('', $filename, 'public');
        $data = $dog->create(['image' => $img]);
        // $dog->image = $request->input('image');
        $dog->name = $request->input('name');
        $dog->purpose = $request->input('purpose');
        $dog->color = $request->input('color');
        $dog->character = $request->input('character');
        $dog->history = $request->textarea('history');
        $dog->save();
        $data->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        //
    }
}
