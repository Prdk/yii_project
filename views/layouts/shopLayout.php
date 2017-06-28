<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;
use app\assets\ShopAsset;

//AppAsset::register($this);
ShopAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>



        <div class="wrap">
            <div class="container">
                <div class="pull-left">
                    <p><h3>MMM</h3></p>
                </div>

                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><?= Html::a('Главная', '/site/') ?></li>
                        <li role="presentation"><?= Html::a('Магазин', ['shop/index']) ?></li>
                        <li role="presentation"><?= Html::a('Товар', ['shop/product']) ?></li>
                    </ul>
                </div>

            </div>
            <div class="block1">
            <?php
            if (isset($this->blocks['block1'])) {
                echo $this->blocks['block1'];
            }
            ?>
            </div>

            <?= $content ?>
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


