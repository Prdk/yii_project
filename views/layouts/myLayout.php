<?php

use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Мой шаблон</title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
              
        
        <h1>Привет template</h1>
        <?= $content ?>
        
        <?php $this->endBody() ?>
    </body>


</html>
<?php $this->endPage() ?>


