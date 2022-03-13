<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo e(optional($title)->title); ?></title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
  
   
   <div class="main">
       <?php $__currentLoopData = $title->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <!-- ここから1問目 -->
       <div class="quiz">
           
           <h1><?php echo e($loop->iteration); ?>.<?php echo e($question->question_form); ?></h1>
           
           
           <img src="<?php echo e(asset('img/'.$question->img_name)); ?>" alt="がぞう">
           
           <ul>    
               <?php $__currentLoopData = $question->choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li id="answerlist_1_1" name="answerlist_1" class="answerlist" onclick=""><?php echo e($choice->name); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
               <li id="answerbox_1" class="answerbox">
                   <span id="answertext_1"></span><br>
                   <span>正解は「たかなわ」です！</span>
                </li>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
        

        <script src="<?php echo e(asset('js/index.js')); ?>"></script>
    </div>
</body>

</html> 



    <?php /**PATH /work/backend/resources/views/tokyo_quizy.blade.php ENDPATH**/ ?>