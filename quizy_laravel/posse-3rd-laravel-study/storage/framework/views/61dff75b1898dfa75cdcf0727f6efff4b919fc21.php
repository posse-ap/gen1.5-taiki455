<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo e(asset("css/editor.css")); ?>>
    <title>問題リスト（編集）</title>
</head>
<body>
    <div class="put_vertically">
        <p>追加する問題番号を入力</p>
        <form action="<?php echo e(route('question_list_update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <input type="hidden" value="<?php echo e($title_id); ?>" name="title_id">
        <input type="text" class="add_question" name="create_question_number">
        <input type="submit" class="submit_button" value="完了" name="create_question">
    </form>

        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <a href="<?php echo e(route('question_edit',['title_id'=>$item->title_id,'question_id'=>$item->question_number])); ?>"><?php echo e($item->question_number); ?></a>
        
        <form action="<?php echo e(route('question_list_delete')); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <input type="hidden" class="delete_button" name="delete_id" value="<?php echo e($item->id); ?>">
        <input type="submit" value="削除する" class="delete_button" name="delete_number_id">
        </form>

        <input type="img" value="<?php echo e($item->img_name); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

    </div>
</body> 
</html><?php /**PATH /work/backend/resources/views/edit/question/list.blade.php ENDPATH**/ ?>