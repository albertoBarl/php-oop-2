<?php
include __DIR__ . "/Models/Products.php";
include __DIR__ . "/Models/Animals.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Accessories.php";
include __DIR__ . "/Models/Toys.php";

// food
$foodProduct_1 = new Food("Royal Canin Mini Adult", "43,99", "image", "Dog", "545gr", "prosciuto, riso");
$foodProduct_2 = new Food("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "44,99", "image", "Dog", "600gr", "manzo, cereali");
$foodProduct_3 = new Food("Almo Nature Cat Daily Lattina", "34,99", "image", "Cat", "400gr", "tonno, pollo, prosciutto");
$foodProduct_4 = new Food("Mangime per pesci Guppy in Fiocchi", "2,95", "image", "Fish", "30gr", "pesci e sottoprodotti dei pesci, cereali, lieviti, alghe");

// accessories
$accessoriesProduct_1 = new Accessories("Voliera Wilma in legno", "184,99", "image", "Bird", "Legno", "M: L83xP67xH153cm");
$accessoriesProduct_2 = new Accessories("Cartucce filtranti per filtro EasyCrystal", "2,29", "image", "Fish", "Material espanso", "ND");

// toys
$toysProduct_1 = new Toys("Kong Classic", "13,49", "image", "Dog", "Galleggia e rimbalza", "8,5cm x 10cm");
$toysProduct_2 = new Toys("Topini di peluche Trixie", "4,99", "image", "Cat", "Material espanso", "8,5cm x 10cm");

$productsList = [$foodProduct_1, $foodProduct_2, $foodProduct_3, $foodProduct_4, $accessoriesProduct_1, $accessoriesProduct_2, $toysProduct_1, $toysProduct_2];
