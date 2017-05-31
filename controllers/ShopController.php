<?php

namespace app\controllers;

use app\controllers\MyAppController;


/**
 * Description of myShopController
 *
 * @author лёха
 */
class ShopController extends MyAppController {

    public $layout = 'shopLayout';

    public function actionIndex() {        
        
        $mySite = 'мой магазин';
        return $this->render('index',compact('mySite'));
    }

    public function actionProduct() {
        
        return $this->render ('product',  compact(''));
    } 
    
    

}
