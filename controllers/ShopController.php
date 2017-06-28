<?php

namespace app\controllers;

use app\controllers\MainShopController;

/**
 * Description of myShopController
 *
 * @author лёха
 */
class ShopController extends MainShopController {

    public $layout = 'shopLayout';

    public function actionIndex() {
        $this->view->title = 'Магазин главная';
        $mySite = 'мой магазин';
        $mySite1 = 'МОЙ';
        return $this->render('index', compact('mySite', 'mySite1'));
    }

    public function actionProduct() {
        $this->view->title = 'Продукт';
        return $this->render('product', compact(''));
    }

}
