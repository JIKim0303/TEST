@extends('layouts.frame')

@section('title', 'お問い合わせ')

@section('content')
<main>
    <div class="example">
        <p class="inquiry_title">お問い合わせ</p>
        <form>
            @csrf
            <div>
                <label for="name" class="item">名前</label>
                <input type="text" name="name" class="item">
            </div>
            <div>
                <label for="email" class="item">Eメールアドレス</label>
                <input type="text" name="email" class="item">
            </div>
            <div>
                <label for="content" class="item">問い合わせ内容</label>
                <textarea name="content" class="item"></textarea>
            </div>
            <input type="submit" value="送信">
        </form>
    </div>
</main>
@endsection