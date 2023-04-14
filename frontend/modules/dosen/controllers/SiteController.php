<?php

namespace frontend\modules\dosen\controllers;

use yii\web\Controller;

/**
 * Default controller for the `dosen` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
