<?php
require '../src/Wcs/hello.php';
require '../Public/vendor/ehime/hello-world/src/HelloWorld/SayHello.php';
$talking = new Hello;

echo $talking->talk();
use HelloWorld\SayHello ;
$talking1 = new SayHello;

echo $talking1->world();

?>