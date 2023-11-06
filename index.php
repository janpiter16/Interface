<?php

include_once "Samsung.php";
$samsung = new Samsung();
$samsung->tipe();
$samsung->nyala();
$samsung->bunyi();

include_once "Vivo.php";
$vivo = new Vivo();
$vivo->tipe();
$vivo->nyala();
$vivo->bunyi();
