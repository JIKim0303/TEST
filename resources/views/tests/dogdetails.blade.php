@extends('layouts.frame')

@section('title', '犬種詳細')

@section('content')
    <img class="dogback" src="{{ asset('pics/footstamp.jpg') }}">
    <div class="page-wrap dog">
        <div class="dogbox">
            @foreach($results as $result)
                    <section class="dogtitle">
                        <img src="{{ asset('storage/'.$result->file_name) }}">
                    </section>
                <h1 class="dogtitle">犬種名：{{ $result->name }}</h1>
                <h3 class="dogtitle">原産国：{{ $result->country->country_name }}</h3>
                <h3 class="dogtitle">用途：{{ $result->purpose }}</h3>
                <h3 class="dogtitle">毛色：{{ $result->color }}</h3>
                <h3 class="dogtitle">性格：{{ $result->feature }}</h3>
                <h3 class="dogtitle">沿革：{{ $result->history }}</h3>
            @endforeach
            <div class="paginatestyle" style="text-align: center;">{{ $results->links() }}</div>
        </div>
    </div>
@endsection