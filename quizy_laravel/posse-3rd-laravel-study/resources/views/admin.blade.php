<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者画面</title>
</head>
<body>
    <h1>リスト</h1>
    @foreach ($questions as $question)
    <img src="{{asset('img/'.$question->img_name)}}" alt="画像">
    @endforeach
</body>
</html>