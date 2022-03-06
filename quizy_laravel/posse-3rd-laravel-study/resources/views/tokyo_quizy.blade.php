<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{optional($title)->title}}</title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  
   
   <div class="main">
       @foreach ($title->questions as $question)
       <!-- ここから1問目 -->
       <div class="quiz">
           
           <h1>{{$loop->iteration}}.{{$question->question_form}}</h1>
           
           
           <img src="{{asset('img/'.$question->img_name)}}" alt="がぞう">
           
           <ul>    
               @foreach ($question->choices as $choice)
               <li id="answerlist_1_1" name="answerlist_1" class="answerlist" onclick="">{{$choice->name}}</li>
               @endforeach
               
               <li id="answerbox_1" class="answerbox">
                   <span id="answertext_1"></span><br>
                   <span>正解は「たかなわ」です！</span>
                </li>
            </ul>
        @endforeach
    </div>
    
        

        <script src="{{asset('js/index.js')}}"></script>
    </div>
</body>

</html> 



    