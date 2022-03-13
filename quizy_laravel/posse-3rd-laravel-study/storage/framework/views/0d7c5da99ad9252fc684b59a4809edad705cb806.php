<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo e(asset("css/editor.css")); ?>>
    <title>タイトルのリンク（編集）</title>
</head>
<body>
    <div class="put_vertically">  

        <p>追加するタイトルを入力</p>
        <form action="<?php echo e(route('admin_menu')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="create_title_name" class="input"> 
        <input type="submit" name="create_title" id="" class="submit_button" value="完了">
        </form>
        

        <?php $__currentLoopData = $title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($item->title); ?>

        <a href="<?php echo e(route('title_edit',['title_id'=>$item->id])); ?>">タイトル編集画面</a>
        <a href="<?php echo e(route('question_list',['title_id'=>$item->id])); ?>">問題リスト</a>

        <form action="<?php echo e(route('admin_menu')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" class="delete_button" name="delete_id" value="<?php echo e($item->id); ?>">
        <input type="submit" class="delete_button" name="delete_title" value="削除">
       </form>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>

</body>
</html><?php /**PATH /work/backend/resources/views/edit/title/list.blade.php ENDPATH**/ ?>