<?php
include "Classes/AbstactWinkelwagen.php";
include "Classes/Winkelwagen.php";
include "Classes/Drink.php";
include "Classes/Food.php";

$winkelwagen = new winkelwagen("Blue");

$winkelwagen->addDrinks(new Drink("Cola", "Fris", "29-09-22", "2"));
$winkelwagen->addDrinks(new Drink("Fanta", "Fris", "29-09-22", "2"));
$winkelwagen->addDrinks(new Drink("Sprite", "Fris", "29-09-22", "2"));

$winkelwagen->addFood(new Food("Appel", "Fruit", "1"));
$winkelwagen->addFood(new Food("Peer", "Fruit", "1"));
$winkelwagen->addFood(new Food("Mango", "Fruit", "1"));

$winkelwagen->printProducts();
$winkelwagen->getNumberOfProducts();