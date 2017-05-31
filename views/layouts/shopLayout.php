<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;
use app\assets\ShopAsset;

ShopAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Магазин</title>
        
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <div class="container">
                
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><?= Html::a('Главная', '/site/')?></li>
                    <li role="presentation"><?= Html::a('Магазин', ['shop/index']) ?></li>
                    <li role="presentation"><?= Html::a('Товар', ['shop/product'])?></li>
                </ul>

                <?= $content ?>
            </div>
        </div>







        <footer class="footer" >
            <div class="container" >
                <p class="pull-left">&copy; My Shop ( Магазин не настаящий )  <?= date('Y') ?></p>

                
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>


