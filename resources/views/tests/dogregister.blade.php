@extends('layouts.frame')

@section('title', '犬種登録画面')

@section('content')
<main class ="register_main">
    <div class="registerwrap" style="position: absolute; top: 150px;">
        <div class="registercontainer">
            <form enctype="multipart/form-data" action="{{ route('store') }}" method="post">
            @csrf
                    <label for="name">名前</label>
                    <input type="text" name="name">

                    <label  for="country">原産国</label>
                    <select name="country">
                        @foreach($countryoption as $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach
                    </select>

                    <label  for="img">画像</label>
                    <input  type="file" name="img" accept="image/*" />

                    <label  for="purpose">用途</label>
                    <input type="text" name="purpose">

                    <label  for="color">毛色</label>
                    <input type="text" name="color">

                    <label  for="feature">習性/性格</label>
                    <input type="text" name="feature">

                    <label  for="history">沿革</label>
                    <textarea name="history"></textarea>
                </div>
                <input type="submit" class="btn-submit" value="登録する">
            </form>
        </div>
    </div>
</main>
@endsection