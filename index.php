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
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container">
        <header class="text-white">
            <h1>Boolshop</h1>
        </header>
        <main>
            <h2>I nostri prodotti</h2>
            <div class="d-flex flex-wrap gap-3">
                <?php foreach ($productsList as $product) { ?>
                    <div class="card" style="width: 250px; line-height: 2">
                        <img src="<?php echo $product->image ?>" alt="not available">
                        <h4><?php echo $product->name ?></h4>
                        <p>Prezzo: €<?php echo $product->price ?></p>
                        <p><?php echo $product->item ?></p>
                        <p><?php if (isset($product->weight)) {
                                echo $product->weight;
                            };
                            if (isset($product->material)) {
                                echo $product->material;
                            };
                            if (isset($product->dimens)) {
                                echo $product->dimens;
                            }; ?></p>
                        <p><?php if (isset($product->ingredients)) {
                                echo $product->ingredients;
                            };
                            if (isset($product->sizes)) {
                                echo $product->sizes;
                            };
                            if (isset($product->infos)) {
                                echo $product->infos;
                            }; ?></p>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
</body>

</html>