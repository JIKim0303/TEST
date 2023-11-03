@extends('layouts.frame')

@section('title', 'お問い合わせ')

@section('content')
    <div class="parent">
        <img class="dogback" src="{{ asset('pics/footstamp.jpg') }}">
            <div class="child">
            <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSecHqkTupvGHeyLyBqlQmaEUm7dkGfP9kdeFs8QKtS51TG3sw/viewform?embedded=true" width="700" height="1000" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                <!-- <h1 class="inquiry_title">フォームは<a class="inpuiry_link" href="https://docs.google.com/forms/d/e/1FAIpQLSecHqkTupvGHeyLyBqlQmaEUm7dkGfP9kdeFs8QKtS51TG3sw/viewform">こちら</a></h1> -->
            </div>

                <!-- <h1 class="inquiry_title">お問い合わせ</h1>
                <form>
                    @csrf
                    <div class="form-row">
                        <div class="form-label">
                            <label for="name">お名前</label>
                            <span>必須</span>
                        </div>
                        <input type="text" id="name" name="name" class="item" required>
                    </div>

                    <div class="form-row">
                        <div class="form-label">
                            <label for="email">Eメールアドレス</label>
                            <span>必須</span>
                        </div>
                        <input type="text" id="email" name="email" class="item" required>
                    </div>

                    <div class="form-row">
                        <div class="form-label">
                            <label for="content">問い合わせ内容</label>
                            <span>必須</span>
                        </div>
                        <textarea id="content" name="content" class="item" rows="5" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-label">
                            <button class="submit" type="submit" value="送信">送信</button>
                        </div>
                    </div>
                </form> -->
    </div>
@endsection