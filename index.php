<?php
include __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <!-- css -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="bg-dark p-5">
    <div class="container">
        <header class="text-white">
            <h1>Boolshop</h1>
        </header>
        <main>
            <h2>I nostri prodotti</h2>
            <div class="d-flex flex-wrap gap-4">
                <?php foreach ($productsList as $product) { ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $product->image ?>" alt="not available">
                        <div class="card-body">
                            <h4><?php echo $product->name ?></h4>
                            <p><?php switch ($product->item) {
                                    case "Dog":
                                        echo "<i class='fa-solid fa-dog'></i> " . "$product->item";
                                        break;
                                    case "Cat":
                                        echo "<i class='fa-solid fa-cat'></i> " . "$product->item";
                                        break;
                                    case "Bird":
                                        echo "<i class='fa-solid fa-dove'></i> " . "$product->item";
                                        break;
                                    case "Fish":
                                        echo "<i class='fa-solid fa-fish'></i> " . "$product->item";
                                        break;
                                } ?></p>
                            <p>Prezzo: &euro;<?php echo $product->price ?></p>
                            <p><?php switch (get_class($product)) {
                                    case "Food":
                                        echo "Peso: " . $product->weight . "<br><br>";
                                        echo "Ingredienti: " . implode(", ", $product->ingredients);
                                        break;
                                    case "Accessories":
                                        echo "Materiale: " . $product->material . "<br><br>";
                                        echo "Dimensioni: " . $product->sizes;
                                        break;
                                    case "Toys":
                                        echo "Caratteristiche: " . $product->specs . "<br><br>";
                                        echo "Dimensioni: " . $product->dimens;
                                        break;
                                } ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>