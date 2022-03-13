<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/menu.css")}}>
    <title>メニュー画面</title>
</head>
<body>

    <div class="put_vertically">
    @foreach ($menu as $item)
    <a href="{{route('display_quiz',['id'=>$item->id])}}">{{$item->title}}</a>
    @endforeach
    </div> 

</body>
</html>