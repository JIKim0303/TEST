<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬種登録画面</title>
</head>
<body>
    <div class="wrap">
        <form action="{{ route('store') }}" enctype="multipart/form-data" method="post">
        @csrf
            <div>
                <label for="name">名前</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="image">画像</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="purpose">用途</label>
                <input type="text" name="purpose">
            </div>
            <div>
                <label for="color">毛色</label>
                <input type="text" name="color">
            </div>
            <div>
                <label for="character">習性/性格</label>
                <input type="text" name="character">
            </div>
            <div>
                <label for="history">沿革</label>
                <!-- <input type="textarea" name="history"> -->
                <textarea name="history"></textarea>
            </div>
            <input type="submit" value="登録する">
        </form>
    </div>
</body>
</html>