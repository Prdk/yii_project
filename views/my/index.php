<code><?= __FILE__ ?></code>
<h1 align="center">Action Index</h1>
<br>
<br>
<h3><?= $hello ?></h3>
<br>
<br>
<?php
foreach ($name as $k => $v) {
    echo $name[$k];
    echo "<br>";
}
//print_r($name)
echo "<br>";
echo $name[1];
echo "<br>";
echo "<br>";
echo "<br>";
echo "Имя пользователя: ".$id;
?>

