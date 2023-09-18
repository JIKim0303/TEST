@extends('layouts.frame')

@section('title', 'FIND YOUR BEST PARTNER')

@section('content')
<main class="main">
    <div class="wrapper">
        <h1>Slide Show</h1>
        <ul class="slider">
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/pair.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/golden.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/ko-gi.jpg') }}"></li>
        </ul>
    </div>

    <div class="container">
        <p>使用したライブラリ：<a href="https://kenwheeler.github.io/slick/">https://kenwheeler.github.io/slick/</a></p>

        <img class="mainimg" src="{{ asset('storage/cake.png') }}">
        <img class="mainimg" src="{{ asset('storage/dogline.jpg') }}">
        <section>
            <!-- <p>名前：</p><p>{{ }}</p> -->
        </section>
        <img class="maining" src="{{ asset('storage/app/public/images'.$dog->img) }}">
    </div>
    <a id="back-btn" class="back-btn" href="#">TOP</a>
</main>
@endsection