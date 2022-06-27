<?php if(Yii::$app->session->hasFlash('ImageUploaded')): ?>
    <div class="info">
        <?php echo Yii::$app->session->getFlash('ImageUploaded'); ?>
    </div>
<?php endif; ?>

<a href="upload">Загрузите изображение</a><br>
<a href="all">Список изображений</a>