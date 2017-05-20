<?php



namespace app\controllers;

/**
 * Description of PostController1
 *
 * @author лёха
 */
class PostController extends AppController{
    
    public function actionIndex($name = null){
        
        $hello = 'Привет мир!';
        $hi = 'Драсте!';
        return $this->render('index', ['hello' => $hello, 'hi' => $hi, 'name' => $name]);
    }
    
    public function actionTest(){
        return $this->render('test');
    }
        
}
