<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

    <h1>Others validator</h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'age') ?>

    <div class="form-group">
        <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>
<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'event_date')->textInput(); ?>

<div class="form-group">
    <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>
<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'default')->textInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>

<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'salary') ?>

<div class="form-group">
    <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>

<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'integerCount') ?>

<div class="form-group">
    <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>

<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'email') ?>

<div class="form-group">
    <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>

<br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'primaryImage')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>

