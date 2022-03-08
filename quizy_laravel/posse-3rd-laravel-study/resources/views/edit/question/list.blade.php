<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/editor.css")}}>
    <title>問題リスト（編集）</title>
</head>
<body>
    <div class="put_vertically">
        <p>追加する問題番号を入力</p>
        <form action="{{route('question_list_update')}}" method="POST">
            @csrf
        <input type="hidden" value="{{$title_id}}" name="title_id">
        <input type="text" class="add_question" name="create_question_number">
        <input type="submit" class="submit_button" value="完了" name="create_question">
    </form>

        @foreach ($questions as $item)
        
        <a href="{{route('question_edit',['title_id'=>$item->title_id,'question_id'=>$item->question_number])}}">{{$item->question_number}}</a>
        
        <form action="{{route('question_list_delete')}}" method="POST">
            @csrf
        <input type="hidden" class="delete_button" name="delete_id" value="{{$item->id}}">
        <input type="submit" value="削除する" class="delete_button" name="delete_number_id">
        </form>
        @endforeach    

    </div>
</body> 
</html>