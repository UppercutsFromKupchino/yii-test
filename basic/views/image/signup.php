<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcumbs'][] = $this->title;
?>

<div class="image-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Зарегистрируйтесь', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    <?php ActiveForm::end() ?>
</div>