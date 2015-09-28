<?php

use yii\helpers\Html;
use app\forms\ApplicantForm;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;

/* @var $this yii\web\View */
/* @var $model app\forms\ApplicantForm */
$this->title = 'Form to PDF tool';
$reportGenerated = Yii::$app->session->getFlash('reportGenerated', false);
?>
<div class="form-wrapper">
    <?php if (!$reportGenerated): ?>
        <div class="site-index">
            <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]); ?>
            <?= FormGrid::widget([
                'model' => $model,
                'form' => $form,
                'autoGenerateColumns' => true,
                'rows' => [
                    [
                        'contentBefore' => '<legend class="text-info"><small>Applicant</small></legend>',
                        'columns' => 3,
                        'attributes' => [
                            'applicantFirstName' => ['type' => Form::INPUT_TEXT],
                            'applicantLastName' => ['type' => Form::INPUT_TEXT],
                            'applicantAddress' => ['type' => Form::INPUT_TEXT],
                        ]
                    ],
                    [
                        'contentBefore' => '<legend class="text-info"><small>Boat Owner</small></legend>',
                        'columns' => 3,
                        'attributes' => [
                            'ownerFirstName' => ['type' => Form::INPUT_TEXT],
                            'ownerLastName' => ['type' => Form::INPUT_TEXT],
                            'ownerAddress' => ['type' => Form::INPUT_TEXT],
                        ]
                    ],
                    [
                        'contentBefore' => '<legend class="text-info"><small>Boat</small></legend>',
                        'columns' => 4,
                        'attributes' => [
                            'boatName' => ['type' => Form::INPUT_TEXT],
                            'boatNationality' => ['type' => Form::INPUT_TEXT],
                            'boatRegisteredTonnage' => ['type' => Form::INPUT_TEXT],
                            'boatColor' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\ColorInput'],
                        ]
                    ],
                    [
                        'columns' => 4,
                        'attributes' => [
                            'boatPortOfRegistry' => ['type' => Form::INPUT_TEXT],
                            'boatRegistrationNumber' => ['type' => Form::INPUT_TEXT],
                            'boatRegistrationDate' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => '\kartik\widgets\DatePicker'],
                            'boatLength' => ['type' => Form::INPUT_TEXT],
                        ]
                    ],
                    [
                        'columns' => 4,
                        'attributes' => [
                            'boatLastPortCall' => ['type' => Form::INPUT_TEXT],
                            'boatNextPortCall' => ['type' => Form::INPUT_TEXT],
                            'boatType' => ['type' => Form::INPUT_RADIO_LIST, 'items' => [
                                ApplicantForm::TYPE_SAIL => ApplicantForm::TYPE_SAIL,
                                ApplicantForm::TYPE_POWER => ApplicantForm::TYPE_POWER,
                            ]],
                            'boatHull' => ['type' => Form::INPUT_RADIO_LIST, 'items' => [
                                ApplicantForm::HULL_MONOHULL => ApplicantForm::HULL_MONOHULL,
                                ApplicantForm::HULL_MULTIHULL => ApplicantForm::HULL_MULTIHULL,
                            ]],
                        ]
                    ],
                ]
            ]); ?>
            <?= Html::submitButton('Generate Report', ['class'=>'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    <?php else: ?>
        <div class="site-success">
            <h3>Report generated</h3>
            <p><?= Html::a('Download PDF', Yii::$app->session->getFlash('reportURL')) ?></p>
            <p><?= Html::a('Create another', ['/']) ?></p>
        </div>
    <?php endif; ?>
</div>
