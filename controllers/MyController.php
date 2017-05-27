<?php

namespace app\controllers;

//use yii\web\Controller;

/**
 * Description of MyController
 *
 * @author лёха
 */
class MyController extends AppController {

    public function actionIndex($id = 'Гость') {
        
        $name = ['Иванов','Петров','Сидоров'];
        $hello = 'Привет мир!!!';
        //return $this->render('index', ['hello'=>$hello, 'name'=>$name]);
        return $this->render('index', compact('hello','name','id'));
    }
    
    public function actionBlogPost(){
        return 'Blog Post';
    }

  //,,,,,,,  
}
