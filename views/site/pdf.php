<?php

use yii\helpers\Html;

/* @var $model \app\forms\ApplicantForm */

?>
<div class="group">
    <div class="group-title">
        Applicant
    </div>
    <table>
        <tr>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('applicantFirstName') ?></div>
                <div class="value"><?= Html::encode($model->applicantFirstName) ?></div>
            </td>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('applicantLastName') ?></div>
                <div class="value"><?= Html::encode($model->applicantLastName) ?></div>
            </td>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('applicantAddress') ?></div>
                <div class="value"><?= Html::encode($model->applicantAddress) ?></div>
            </td>
        </tr>
    </table>
</div>
<div class="group">
    <div class="group-title">
        Boat Owner
    </div>
    <table>
        <tr>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('ownerFirstName') ?></div>
                <div class="value"><?= Html::encode($model->ownerFirstName) ?></div>
            </td>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('ownerLastName') ?></div>
                <div class="value"><?= Html::encode($model->ownerLastName) ?></div>
            </td>
            <td class="col-3">
                <div class="label"><?= $model->getAttributeLabel('ownerAddress') ?></div>
                <div class="value"><?= Html::encode($model->ownerAddress) ?></div>
            </td>
        </tr>
    </table>
</div>
<div class="group">
    <div class="group-title">
        Boat
    </div>
    <table>
        <tr>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatName') ?></div>
                <div class="value"><?= Html::encode($model->boatName) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatNationality') ?></div>
                <div class="value"><?= Html::encode($model->boatNationality) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatRegisteredTonnage') ?></div>
                <div class="value"><?= Html::encode($model->boatRegisteredTonnage) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatColor') ?></div>
                <div class="value"><?= Html::encode($model->boatColor) ?></div>
            </td>
        </tr>
        <tr>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatPortOfRegistry') ?></div>
                <div class="value"><?= Html::encode($model->boatPortOfRegistry) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatRegistrationNumber') ?></div>
                <div class="value"><?= Html::encode($model->boatRegistrationNumber) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatRegistrationDate') ?></div>
                <div class="value"><?= Html::encode($model->boatRegistrationDate) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatLength') ?></div>
                <div class="value"><?= Html::encode($model->boatLength) ?></div>
            </td>
        </tr>
        <tr>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatLastPortCall') ?></div>
                <div class="value"><?= Html::encode($model->boatLastPortCall) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatNextPortCall') ?></div>
                <div class="value"><?= Html::encode($model->boatNextPortCall) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatType') ?></div>
                <div class="value"><?= Html::encode($model->boatType) ?></div>
            </td>
            <td class="col-4">
                <div class="label"><?= $model->getAttributeLabel('boatHull') ?></div>
                <div class="value"><?= Html::encode($model->boatHull) ?></div>
            </td>
        </tr>
    </table>
</div>
