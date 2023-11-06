@extends('layouts.frame')

@section('title', 'お問い合わせ')

@section('content')
    <div class="parent">
        <img class="dogback" src="{{ asset('pics/footstamp.jpg') }}">
            <div class="child">
            <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSecHqkTupvGHeyLyBqlQmaEUm7dkGfP9kdeFs8QKtS51TG3sw/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
            </div>
    </div>
@endsection