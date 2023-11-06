<?php

include_once 'Smartphone.php';

class Vivo implements Smartphone{
    public function tipe(): void{
        echo "Vivo Y30<br>";
    }
    public function nyala(): void{
        echo "Vivo Y30 sedang menyala<br>";
    }
    public function bunyi(): void{
        echo "Vivo Y30 berbunyi dengan keras<br>";
    }
}