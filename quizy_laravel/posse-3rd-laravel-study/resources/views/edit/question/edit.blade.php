<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>選択肢の編集</title>
</head>
<body>
    <form action="{{route('question_edit',['title_id'=>$title_id ,'question_id'=>$question_id])}}" method="POST">
        @csrf

        @foreach ($edit_question ->choices as $item)
        <p>選択肢{{$loop->iteration}}</p>
        <input type="hidden" name="choice_{{$loop->iteration}}_id" value="{{$item->id}}">
        <input type="text" name="choice_{{$loop->iteration}}" value="{{$item->name}}">
        @endforeach
        <input type="submit" value="上書き">選択肢上書き
    </form>
    
</body>
</html>