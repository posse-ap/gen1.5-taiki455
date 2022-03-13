<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo e(asset("css/editor.css")); ?>>
    <title>Document</title>
</head>
<body>
<div class="put_vertically">

<form action="<?php echo e(route('title_edit',['title_id'=>$title_id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e($edit_title->title); ?><?php echo e('の編集画面'); ?>

    
    <p>タイトルを入力</p>
    <input type="hidden" name="title_name_id" value="<?php echo e($edit_title->id); ?>">
    <input type="text" name="title_name" class="input" value="<?php echo e($edit_title->title); ?>">
    <input type="submit" class="submit_button" value="上書き">
</form>
</div>


</body>
</html><?php /**PATH /work/backend/resources/views/edit/title/edit.blade.php ENDPATH**/ ?>