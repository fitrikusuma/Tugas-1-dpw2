<?php

include "Animal.php";

class Kucing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Meong meong meong" .$this->suara;
    }
}

$cat = new Kucing;
$cat->jumlah_kaki = 4;
$cat->bisa_terbang = "Tidak bisa Terbang";
echo "Cat Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$cat->jumlah_kaki."<br>";
echo $cat->bisa_terbang."<br>";
echo "Suaranya : ".$cat->bersuara();

echo "<hr>";

class Anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Guk guk guk" .$this->suara;
    }
}

$dog = new Anjing;
$dog->jumlah_kaki = 4;
$dog->bisa_terbang = "Tidak bisa Terbang";
echo "Dog Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$dog->jumlah_kaki."<br>";
echo $dog->bisa_terbang."<br>";
echo "Suaranya : ".$dog->bersuara();

echo "<hr>";

class Elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Miiiip miiiip" .$this->suara;
    }
}

$eagle = new Elang;
$eagle->jumlah_kaki = 2;
$eagle->bisa_terbang = "Bisa Terbang";
echo "Eagle Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$eagle->jumlah_kaki."<br>";
echo $eagle->bisa_terbang."<br>";
echo "Suaranya : ".$eagle->bersuara();

echo "<hr>";

class Angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "kwaak kwaak" .$this->suara;
    }
}

$swan = new Angsa;
$swan->jumlah_kaki = 2;
$swan->bisa_terbang = "Bisa Terbang";
echo "Swan Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$swan->jumlah_kaki."<br>";
echo $swan->bisa_terbang."<br>";
echo "Suaranya : ".$swan->bersuara();
