<?php

namespace app\controllers\admin;

use app\controllers\AppController;

/**
 * Description of UserController
 *
 * @author лёха
 */
class UserController extends AppController {

    public function actionIndex(){
        $admin  = 'ADMIN';
        return $this -> render('index',compact('admin'));
        //return 'ADMIN';
    }

}
