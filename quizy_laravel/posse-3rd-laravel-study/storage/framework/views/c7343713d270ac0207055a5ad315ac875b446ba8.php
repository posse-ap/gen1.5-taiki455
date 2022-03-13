<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>選択肢の編集</title>
</head>
<body>
    <form action="<?php echo e(route('question_edit',['title_id'=>$title_id ,'question_id'=>$question_id])); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php $__currentLoopData = $edit_question ->choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>選択肢<?php echo e($loop->iteration); ?></p>
        <input type="hidden" name="choice_<?php echo e($loop->iteration); ?>_id" value="<?php echo e($item->id); ?>">
        <input type="text" name="choice_<?php echo e($loop->iteration); ?>" value="<?php echo e($item->name); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input type="submit" value="上書き">選択肢上書き
    </form>
    
</body>
</html><?php /**PATH /work/backend/resources/views/edit/question/edit.blade.php ENDPATH**/ ?>