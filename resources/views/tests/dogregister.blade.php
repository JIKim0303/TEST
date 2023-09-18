<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬種登録画面</title>
</head>

<style>
body {
    padding: 30px;
    margin: 0 auto;
    width: 70%;
}
textarea {
    width: 98%;
    height: 60px;
}
.file_up {
    margin-bottom: 10px;
}
.submit {
    text-align: right;
}
.btn {
    display: inline-block;
    border-radius: 3px;
    font-size: 18px;
    background: #67c5ff;
    border: 2px solid #67c5ff;
    padding: 5px 10px;
    color: #fff;
    cursor: pointer;
}
</style>

<body>
    <div class="wrap">
        <form enctype="multipart/form-data" action="{{ route('store') }}" method="post">
        @csrf
            <div class="file-up">
                <label for="name">名前</label>
                <input type="text" name="name">
            </div>
            <div class="file-up">
                <label for="area">地域</label>
                <select name="area">
                    <option value="1">アジア</option>
                    <option value="2">ヨーロッパ</option>
                    <option value="3">アフリカ</option>
                    <option value="4">オセアニア</option>
                    <option value="5">北米</option>
                    <option value="6">南米</option>
                </select>
            </div>
            <div class="file-up">
                <label for="country">原産国</label>
                <select name="country">
                    <option value="1">中国</option>
                    <option value="2">日本</option>
                    <option value="3">チベット（中国）</option>
                    <option value="4">イギリス</option>
                    <option value="5">フランス・ベルギー</option>
                    <option value="6">フランス</option>
                    <option value="7">イタリア</option>
                    <option value="8">中央地中海沿岸地域</option>
                    <option value="9">ドイツ</option>
                    <option value="10">クロアチア・ダルメシア地方</option>
                    <option value="11">アイルランド</option>
                    <option value="12">スイス</option>
                    <option value="13">アメリカ</option>
                    <option value="14">メキシコ</option>
                    <option value="15">中央アフリカ</option>
                </select>
            </div>
            <div class="file-up">
                <label for="img">画像</label>
                <input type="file" name="img" accept="image/*" />
            </div>
            <div class="file-up">
                <label for="purpose">用途</label>
                <input type="text" name="purpose">
            </div>
            <div class="file-up">
                <label for="color">毛色</label>
                <input type="text" name="color">
            </div>
            <div class="file-up">
                <label for="character">習性/性格</label>
                <input type="text" name="character">
            </div>
            <div class="file-up">
                <label for="history">沿革</label>
                <textarea name="history"></textarea>
            </div>
            <input type="submit" class="btn submit" value="登録する">
        </form>
    </div>
</body>

</html>