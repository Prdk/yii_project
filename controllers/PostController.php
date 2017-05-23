<?php

namespace app\controllers;

/**
 * Description of PostController
 *
 * @author лёха
 */
class PostController extends AppController {

    public function actionIndex($name = 'гость') {
        $hello = 'Привет мир';
        $hi = 'Привет';
        return $this->render('index', compact('hello', 'hi', 'name'));
    }
    
    public function actionTest(){
        return $this->render('test');
    }

}
