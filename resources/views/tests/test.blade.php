@extends('layouts.frame')

@section('title', '犬種診断')

@section('content')
<main class ="testmain">
    <!-- これは動かない。CSSではこのサイズを大きく設定しておく -->
    <div class="test-container">
        <img class="dogback" src="{{ asset('pics/footstamp.jpg') }}">
        <!-- これは最初のタイトル表示のページのラップ。containerよりは幅も高さも小さくする -->
        <!-- さらにインデントを全部一つ下げる -->
        <div class="title-page-wrap page-wrap">
            <div class="title-wrap">
                <h1>犬種診断</h1><br>
                <h2>ワンちゃんとの最高の生活のために診断してみよう！</h2>
            </div>
            <!-- <div class="select-wrap">
                <h2>ワンちゃんとの最高の生活のために診断してみよう！</h2>
            </div>-->
            <div class="btn-wrap start">
                <button type="button" class="tool-btn btn-start">診断スタート</button>
            </div>
        </div>
    </div>

<!-- Q1質問 -->
        <div class="q1 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="title">Q1. お住まいはマンション（賃貸）ですか？<br><span class="small">(1つだけ選択)</span></h1>
            </div>
            <div class="select-wrap">
                <button type="button" class="select yes" id="q1yes">Yes</button>
                <button type="button" class="select no" id="q1no">No</button>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-next" disabled>次の質問へ</button>
                <span class="close-btn"><a class="close-btn-close" id="close-btn" href="{{ route('test') }}">診断をやめる</a></span>
            </div>
        </div>

<!-- Q2質問 -->
        <div class="q2 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="title">Q2. 帰りの時間が遅い、もしくは主張がたくさんあるお仕事ですか？<br><span class="small">(1つだけ選択)</span></h1>
            </div>
            <div class="select-wrap">
                <button type="button" class="select yes" id="q2yes">Yes</button>
                <button type="button" class="select no" id="q2no">No</button>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-next" disabled>次の質問へ</button>
                <span class="close-btn"><a class="close-btn-close" id="close-btn" href="{{ route('test') }}">診断をやめる</a></span>
            </div>
        </div>

<!-- Q3質問 -->
        <div class="q3 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="title">Q3. どちらかというと インドア派ですか？<br><span class="small">(1つだけ選択)</span></h1>
            </div>
            <div class="select-wrap">
                <button type="button" class="select yes" id="q3yes">Yes</button>
                <button type="button" class="select no" id="q3no">No</button>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-result" disabled>診断結果へ</button>
                <span class="close-btn"><a class="close-btn-close" id="close-btn" href="{{ route('test') }}">診断をやめる</a></span>
            </div>
        </div>

<!-- A1回答 -->
        <div class="a1 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/yokusha.jpg') }}">
                <img class="img2" src="{{ asset('storage/papiyon.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >ウィペット、バセンジー、パグ、チワワ、ボストンテリア、日本スピッツ、バセット・ハウンド、パピヨン、ペキニーズ、ヨークシャー・テリア</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/pagu.jpg') }}">
                <img class="img4" src="{{ asset('storage/basenji.jpg') }}">
            </div>
        </div>

<!-- A2回答 -->
        <div class="a2 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/itagure.jpg') }}">
                <img class="img2" src="{{ asset('storage/pudoru.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >トイプードル、チワワ、ビション フリーゼ、イタリアン・グレイハウンド、マルチーズ、フレンチブルドック、ポメラニアン</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/fureburu.jpg') }}">
                <img class="img4" src="{{ asset('storage/maru.jpg') }}">
            </div>
        </div>

<!-- A3回答 -->
        <div class="a3 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/pinsha.jpg') }}">
                <img class="img2" src="{{ asset('storage/daru.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >ミニチュアピンシャー、ダルメシアン、シーズー、柴犬、ボストンテリア、アメリカンコッパースパニエル、ウェルシュコーギー
                    、シェットランド・シープドッグ、ジャック・ラッセル・テリア、スタンダードシュナウザー、ミニチュアシュナウザー、ビーグル</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/ko-gi.jpg') }}">
                <img class="img4" src="{{ asset('storage/beagul.jpg') }}">
            </div>
        </div>

<!-- A4回答 -->
        <div class="a4 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/柴写真.jpg') }}">
                <img class="img2" src="{{ asset('storage/kai.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >シーズー、柴犬、ボストンテリア、トイプードル、フォックステリア、アイリッシュ・テリア、甲斐犬、シベリアン・ハスキー</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/si-zu.jpg') }}">
                <img class="img4" src="{{ asset('storage/huskey.jpg') }}">
            </div>
        </div>

<!-- A5回答 -->
        <div class="a5 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/loveretriver.jpg') }}">
                <img class="img2" src="{{ asset('storage/goldenretriver.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >基本的にライフスタイル面においてはどんな犬種でも飼育可能ですが、特に：<br>フォックステリア、ボーダーコリー、ゴールデンレトリバー、アイリッシュ・セター<br>
                アメリカンコッパースパニエル、甲斐犬、グレート・デーン、シベリアン・ハスキー、ラブラドール・レトリーバー、ロットワイラー、ワイマラナー</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/spa.jpg') }}">
                <img class="img4" src="{{ asset('storage/wirefox.jpg') }}">
            </div>
        </div>

<!-- A6回答 -->
        <div class="a6 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/sheep.jpg') }}">
                <img class="img2" src="{{ asset('storage/minishuna.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >アイリッシュ・ウルフハウンド、秋田犬、ウェルシュコーギー、グレート・ピレニーズ、シェットランド・シープドッグ、ジャーマン・シェパード・ドッグ<br>
                ジャック・ラッセル・テリア、スタンダードシュナウザー、ミニチュアシュナウザー、セント・バーナード、ドーベルマン、土佐犬、バーニーズ・マウンテン・ドッグ、ビーグル</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/tosa.jpg') }}">
                <img class="img4" src="{{ asset('storage/rassel.jpg') }}">
            </div>
        </div>

<!-- A7回答 -->
        <div class="a7 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/pome.jpg') }}">
                <img class="img2" src="{{ asset('storage/tiwawa.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >チワワ、ビション フリーゼ、イタリアン・グレイハウンド、マルチーズ、フレンチブルドック、ポメラニアン</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/bf.jpg') }}">
                <img class="img4" src="{{ asset('storage/fureburu.jpg') }}">
            </div>
        </div>

<!-- A8回答 -->
        <div class="a8 page-wrap" style="display: none">
            <div class="title-wrap">
                <h1 class="answer-title">あなたにピッタリな犬種は…</h1>
            </div>
            <div class="img-wrap1">
                <img class="img1" src="{{ asset('storage/spits.jpg') }}">
                <img class="img2" src="{{ asset('storage/pegi.jpg') }}">
            </div>
            <div class="answer-wrap">
                <h2 class="answer" >ウィペット、バセンジー、パグ、ボストンテリア、日本スピッツ、バセット・ハウンド、パピヨン、ペキニーズ、ヨークシャー・テリア</h2><span class="answer">です！</span>
            </div>
            <div class="btn-wrap">
                <button type="button" class="tool-btn btn-finish">診断終了</button>
            </div>
            <div class="img-wrap2">
                <img class="img3" src="{{ asset('storage/boston.jpg') }}">
                <img class="img4" src="{{ asset('storage/wipet.jpg') }}">
            </div>
        </div>
</main>
@endsection