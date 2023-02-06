<?php
include __DIR__ . "/Models/Products.php";
include __DIR__ . "/Models/Animals.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Accessories.php";
include __DIR__ . "/Models/Toys.php";

// food
$foodProduct_1 = new Food("Royal Canin Mini Adult", "43,99", "https://images.unsplash.com/photo-1658418171785-6effc7240676?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80", "Dog", "545gr", "prosciuto, riso");
$foodProduct_2 = new Food("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "44,99", "https://images.unsplash.com/photo-1601758228006-964e41e5e8eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80", "Dog", "600gr", "manzo, cereali");
$foodProduct_3 = new Food("Almo Nature Cat Daily Lattina", "34,99", "https://images.unsplash.com/photo-1616668983570-a971956d8928?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2F0JTIwZm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60", "Cat", "400gr", "tonno, pollo, prosciutto");
$foodProduct_4 = new Food("Mangime per pesci Guppy in Fiocchi", "2,95", "https://images.unsplash.com/photo-1600781048302-ac9a3bc48bb2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZmlzaCUyMGZlZWR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60", "Fish", "30gr", "pesci e sottoprodotti dei pesci, cereali, lieviti, alghe");

// accessories
$accessoriesProduct_1 = new Accessories("Voliera Wilma in legno", "184,99", "https://images.unsplash.com/photo-1634413102755-7f0857eba45b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyZCUyMGNhZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60", "Bird", "Legno", "M: L83xP67xH153cm");
$accessoriesProduct_2 = new Accessories("Cartucce filtranti per filtro EasyCrystal", "2,29", "https://images.unsplash.com/photo-1611181354769-4dc8f1a35486?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8ZmlzaCUyMGZpbHRlcnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60", "Fish", "Materiale espanso", "ND");

// toys
$toysProduct_1 = new Toys("Kong Classic", "13,49", "https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9nJTIwdG95fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60", "Dog", "Galleggia e rimbalza", "8,5cm x 10cm");
$toysProduct_2 = new Toys("Topini di peluche Trixie", "4,99", "https://images.unsplash.com/photo-1545249390-6bdfa286032f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2F0JTIwdG95fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60", "Cat", "Morbido con codina in corda", "8,5cm x 10cm");

$productsList = [$foodProduct_1, $foodProduct_2, $foodProduct_3, $foodProduct_4, $accessoriesProduct_1, $accessoriesProduct_2, $toysProduct_1, $toysProduct_2];
