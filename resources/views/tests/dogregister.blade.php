@extends('layouts.frame')

@section('title', '犬種登録画面')

@section('content')
    <div class="registerwrap">
        <div class="registercontainer">
            <form enctype="multipart/form-data" action="{{ route('store') }}" method="post">
            @csrf
                    <label for="name">名前</label>
                    <input type="text" name="name" size="70">

                    <label for="country">原産国</label>
                    <select name="country">
                        @foreach($countryoption as $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach
                    </select>

                    <label for="img">画像</label>
                    <input type="file" name="img" accept="image/*" />

                    <label for="purpose">用途</label>
                    <input type="text" name="purpose" size="70">

                    <label for="color">毛色</label>
                    <input type="text" name="color" size="7">

                    <label for="feature">習性/性格</label>
                    <input type="text" name="feature" size="70">

                    <label for="history">沿革</label>
                    <textarea name="history" rows="2" cols="70"></textarea>
                </div>
                <input type="submit" class="btn submit" value="登録する">
            </form>
        </div>
    </div>
@endsection