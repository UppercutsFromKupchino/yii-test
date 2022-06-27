<?php
use yii\widgets\ActiveForm;
?>

<?php if(Yii::$app->session->hasFlash('ImageUploaded')): ?>
    <div class="info">
        <?php echo $session->getFlash('ImageUploaded'); ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>
<button>Загрузить изображение</button>

<?php ActiveForm::end() ?>