<?php  
include "kereta.class.php";

$kereta = new Kereta("perodua", "myvi", "oren"); // give default value to class properti using constructor

echo "<h3>Kereta pertama</h3>";
echo "Jenama : ".$kereta->jenama."<br>";
echo "Model : ".$kereta->model."<br>";
echo "Warna : ".$kereta->warna."<br>";
echo "Mendapat diskaun : ".$kereta->diskaun();

$kereta2 = new Kereta("proton", "saga", "putih");

echo "<h3>Kereta pertama</h3>";
echo "Jenama : ".$kereta2->jenama."<br>"; // call properti
echo "Model : ".$kereta2->model."<br>"; // call properti
echo "Warna : ".$kereta2->warna."<br>";
echo "Mendapat diskaun : ".$kereta2->diskaun(); // call method
?>