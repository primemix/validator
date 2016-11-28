<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Text validator</h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'text')->textInput(['autofocus' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Go', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>