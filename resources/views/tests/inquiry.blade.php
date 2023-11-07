@extends('layouts.frame')

@section('title', 'お問い合わせ')

@section('content')
    <div class="parent">
        <img class="dogback" src="{{ asset('pics/footstamp.jpg') }}">
            <!-- <div class="child">
            <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSecHqkTupvGHeyLyBqlQmaEUm7dkGfP9kdeFs8QKtS51TG3sw/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
            </div> -->

        <div class="child" id="formWrapper">
            <form class="gform" name="gForm" action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSecHqkTupvGHeyLyBqlQmaEUm7dkGfP9kdeFs8QKtS51TG3sw/formResponse" method="post" target="dummyIframe">
                <label for ="name" class="form-label">お名前</label><br>
                <input id ="name" class="form-label" type="text" name="entry.1502908570" placeholder="山田 太郎" required/><br>

                <label for="email" class="form-label">メールアドレス</label><br>
                <input id="email" class="form-label" type="text" name="entry.1033179079" placeholder="example@mail.co.jp" required/><br>

                <label for="msg" class="form-label">お問い合わせ内容</label><br>
                <textarea id ="msg" class="form-label" name="entry.1123612867" required></textarea><br>

                <input class="form btn-success" type="button" name="button" value="送信" onclick="submitForm()"/><br>
            </form>

            <iframe name="dummyIframe" style="display: none;"></iframe>
            </div>

            <div id="thxMessage" class="thxmsg-box" style="display: none;">
                <p class="thxmsg">回答ありがとうございました。<br>
                <a class="thxmsg" href="{{ url('/') }}">TOPへ戻る</a></p>
            </div>
            
            <script>
                function submitForm() {
                document.gForm.submit();
                document.getElementById('formWrapper').style.display='none';
                document.getElementById('thxMessage').style.display='block';
                }
            </script>
        </div>
    </div>
@endsection