<?php

namespace app\controllers\admin;

use yii\web\Controller;

/**
 * Description of UserController
 *
 * @author лёха
 */
class UserController extends Controller {

    public function actionIndex(){
        $admin  = 'ADMIN';
        return $this -> render('index',compact('admin'));
        //return 'ADMIN';
    }

}
