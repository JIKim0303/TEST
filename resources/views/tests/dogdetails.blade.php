@extends('layouts.frame')

@section('title', 'FIND YOUR BEST PARTNER')

@section('content')
<main>
    <div class="p_title">
        @foreach($dogs as $dog)
            <h1 class="dog_name">{{ $dog->name }}</h1>
            @if($dogs->file_name !== "")
                <section class="dog_img">
                    <img src="{{ asset($dogs->file_name) }}">
                </section>
            @endif

            <h3 class="dog_country">{{ $dog->country }}</h3>
            <h3 class="purpose">{{ $dog->purpose }}</h3>
            <h3 class="color">{{ $dog->color }}</h3>
            <h3 class="character">{{ $dog->character }}</h3>
            <h3 class="history">{{ $dog->history }}</h3>
        @endforeach
    </div>





</main>