@extends('layouts.frame')

@section('title', 'FIND YOUR BEST PARTNER')

@section('content')
    <div class="wrapper">
        <ul class="slider">
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('pics/pair.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('pics/doghuman.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('pics/tiwawas.jpg') }}"></li>
        </ul>
    </div>
    <div class="container">
        <div class="loopbox">
            <div class="loop__wrap">
                <ul class="loop__list loop__list--left">
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                </ul>
                <ul class="loop__list loop__list--left">
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                </ul>
            </div>
        </div>
        <div class="dogarticle">
            <h1 class="dogtitle randomdog-title">犬種紹介</h1>
                <section class="randomdog">
                    <h1 class="dogtitle dog_name">犬種名：<?php echo($randomdogs->dog_name); ?></h1>
                    <section class="dogtitle dog_img">
                        <img class="dog_img" src="{{ asset('storage/' . $randomdogs->file_name) }}" alt="">
                    </section>
                    <h3 class="dogtitle country_name">原産国：<?php echo ($randomdogs->country_name); ?></h1>
                    <h3 class="dogtitle purpose">用途：<?php echo ($randomdogs->purpose); ?></h3>
                    <h3 class="dogtitle color text-ellipsis">毛色：<?php echo ($randomdogs->color); ?></h3>
                    <h4 class="moredetails"><a href="{{ route('dogprofile') }}">他の犬種をもっと知る♪</a></p>
                </section>
        </div>
        <div class="loopbox">
            <div class="loop__wrap">
                <ul class="loop__list loop__list--left">
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                </ul>
                <ul class="loop__list loop__list--left">
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline1.jpg') }}"></li>
                    <li class="loop__item"><img src="{{ asset('pics/dogline2.jpg') }}"></li>
                </ul>
            </div>
        </div>
    </div>
@endsection