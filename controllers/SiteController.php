<?php

namespace app\controllers;

use Yii;
use yii\bootstrap\BootstrapAsset;
use yii\helpers\Url;
use yii\web\Controller;
use app\forms\ApplicantForm;

define('DOMPDF_ENABLE_AUTOLOAD', false);
define('DOMPDF_ENABLE_CSS_FLOAT', true);

require_once Yii::getAlias('@vendor/dompdf/dompdf/dompdf_config.inc.php');

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'page' => [
                'class' => 'yii\web\ViewAction',
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $model = new ApplicantForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $fileName = time() . '.pdf';
            $filePath = Yii::getAlias('@webroot/files/' . time() . '.pdf');
            $this->layout = 'pdf';
            $this->view->params['css'] = [
                file_get_contents(Yii::getAlias('@webroot/css/pdf.css')),
            ];
            $html = $this->render('pdf', [
                'model' => $model,
            ]);
            $pdf = new \DOMPDF();
            $pdf->set_base_path(Yii::$app->assetManager->getBundle(BootstrapAsset::className())->basePath . '/css');
            $pdf->load_html($html);
            $pdf->render();
            $output = $pdf->output();
            file_put_contents($filePath, $output);
            Yii::$app->session->setFlash('reportGenerated');
            Yii::$app->session->setFlash('reportURL', Url::to(['files/' . $fileName]));
            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
