<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('question_edit',['title_id'=>$title_id,'question_id'=>$question_id])}}" method="POST">
        @csrf

        @foreach ($edit_question ->choices as $item)
        <p>選択肢{{$loop->iteration}}</p>
        <input type="hidden" name="choice_{{$loop->iteration}}_id" value="{{$item->id}}">
        <input type="text" name="choice_{{$loop->iteration}}" value="{{$item->name}}">
        
        @endforeach
    <img src="" alt="">
    
    <input type="hidden" value="">

    <p>画像</p>
    <input type="file" name="new_image_input">
    <input type="submit" value="上書き">上書き
</form>
</body>
</html>