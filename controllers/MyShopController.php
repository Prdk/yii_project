<?php

namespace app\controllers;

//use app\controllers\MyAppController;

/**
 * Description of myShopController
 *
 * @author лёха
 */
class MyShopController extends MyAppController {

    //public $layout = 'shopLayout';

    public function actionIndex() {
        $mySite = 'мой магазин';
        //return $mySite = "мой магазин";
        return $this->render('index');
    }

    public function actionProduct() {
        //return 'product';
        //return $this->render ('product');
    }

}
