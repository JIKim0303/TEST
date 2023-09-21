@extends('layouts.frame')

@section('title', '犬種詳細')

@section('content')
<main>
    <div class="p_title">
    
        @foreach($results as $result)
            <h1 class="dog_name">{{ $result->dog_name }}</h1>
            @if($result->file_name !== "")
                <section class="dog_img">
                    <img src="{{ asset($result->file_name) }}">
                </section>
            @endif

            <h3 class="dog_country">{{ $result->country_name }}</h3>
            <h3 class="purpose">{{ $result->purpose }}</h3>
            <h3 class="color">{{ $result->color }}</h3>
            <h3 class="character">{{ $result->character }}</h3>
            <h3 class="history">{{ $result->history }}</h3>
        @endforeach
    </div>
@endsection
</main>