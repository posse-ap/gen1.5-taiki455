<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/editor.css")}}>
    <title>タイトルのリンク（編集）</title>
</head>
<body>
    <div class="put_vertically">  

        <p>追加するタイトルを入力</p>
        <form action="{{route('admin_menu')}}" method="POST">
        @csrf
        <input type="text" name="create_title_name" class="input"> 
        <input type="submit" name="create_title" id="" class="submit_button" value="完了">
        </form>
        
        @foreach ($title as $item)
        {{$item->title}}
        <a href="{{route('title_edit',['title_id'=>$item->id])}}">タイトル編集画面</a>
        <a href="{{route('question_list',['title_id'=>$item->id])}}">問題リスト</a>

        <form action="{{route('admin_menu')}}" method="POST">
        @csrf
        <input type="hidden" class="delete_button" name="delete_id" value="{{$item->id}}">
        <input type="submit" class="delete_button" name="delete_title" value="削除">
       </form>
        @endforeach



    </div>

</body>
</html>