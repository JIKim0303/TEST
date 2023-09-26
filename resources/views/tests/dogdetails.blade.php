@extends('layouts.frame')

@section('title', '犬種詳細')

@section('content')
<div class="dogcontainer">
    <div class="dogbox">
        @foreach($results as $result)
                <section class="dog_img">
                    <img src="{{ asset('storage/'.$result->file_name) }}">
                </section>
            <h1 class="dog_name">{{ $result->name }}</h1>
            <h3 class="dog_country">{{ $result->country->country_name }}</h3>
            <h3 class="purpose">{{ $result->purpose }}</h3>
            <h3 class="color">{{ $result->color }}</h3>
            <h3 class="character">{{ $result->character }}</h3>
            <h3 class="history">{{ $result->history }}</h3>
        @endforeach
        <div class="paginatestyle" style="text-align: center;">{{ $results->links() }}</div>
    </div>
</div>
@endsection