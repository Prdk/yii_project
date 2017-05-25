<?php


namespace app\controllers;
use yii;

/**
 * Description of PostController
 *
 * @author лёха
 */
class PostController extends AppController{
    
    public function actionTest(){
        
        //$name = ['Иванов','Петров','Сидоров'];
        
        //var_dump(yii::$app);
        //$this->debug(yii::$app);
        
        return $this->render('test');
    }
}
