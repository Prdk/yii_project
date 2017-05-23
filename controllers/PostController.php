<?php



namespace app\controllers;

/**
 * Description of PostController
 *
 * @author лёха
 */
class PostController extends AppController{
    
    public function actionIndex($name = 'гость'){
        $hello = 'Привет мир';
        $hi = 'привет';
        return $this->render('index', compact('hello','hi','name'));
    }
    
    public function actionTest($name = 'гость'){
        return $this->render('test',compact('name'));
    }
}
