@extends('layouts.frame')

@section('title', 'FIND YOUR BEST PARTNER')

@section('content')
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
        <section class="randomdog">
            <h1 class="article">犬種紹介</h1>
            <h3 class="dogtitle">犬種名：</div>
            <h3 class="dogtitle"></div>
            <h3 class="dogtitle">原産国：</div>
            <h3 class="dogtitle">用途：</div>
            <h3 class="dogtitle">毛色：</div>
            <h3 class="dogtitle">性格：</div>
            <h3 class="dogtitle">沿革：</div>
                <p class="moredetails"><a href="{{ route('dogprofile') }}">もっと詳しく見る</a></p>
        </section>
    </div>
    <a id="back-btn" class="back-btn" href="#">TOP</a>
@endsection