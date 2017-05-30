<?php

namespace app\controllers;

use yii;

/**
 * Description of PostController
 *
 * @author лёха
 */
class PostController extends AppController {

    public $layout = 'myLayout';

    public function actionIndex() {

        return $this->render('index');
    }

    public function actionShow() {
        //$this->layout = myLayout;
        return $this->render('show');
    }

}
