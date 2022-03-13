<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo e(asset("css/menu.css")); ?>>
    <title>メニュー画面</title>
</head>
<body>

    <div class="menu_choice">
    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('display_quiz',['id'=>$item->id])); ?>"><?php echo e($item->title); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div> 

</body>
</html><?php /**PATH /work/backend/resources/views/menu_quizy.blade.php ENDPATH**/ ?>