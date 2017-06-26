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
        
        $mySite = 'мой магазин';
        $mySite1 = 'МОЙ';
        return $this->render('index',compact('mySite','mySite1'));
        
    }

    public function actionProduct() {
        
        return $this->render ('product',  compact(''));
    } 
    
    

}
