<?php

include_once 'Smartphone.php';

class Samsung implements Smartphone{
    public function tipe(): void{
        echo "Samsung A12<br>";
    }
    public function nyala(): void{
        echo "Samsung A12 sedang menyala<br>";
    }
    public function bunyi(): void{
        echo "Samsung A12 berbunyi dengan keras<br>";
    }
}