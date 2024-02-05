<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link a css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css mio -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <?php
        require_once("db.php")
    ?>
</head>
<body>
    
    <h1>PET SHOP</h1>
    <div class="container">
        <div class="row">
        <?php
        foreach ($Products as $product) {
        echo "<div class='my_col col-lg-3 col-md-4 col-sm-6 col-xs-12'>";
        echo "<h2>{$product -> getName()}</h2>";
        echo "<img class='copertina' src='{$product->getPicture()}' alt=''>";
        echo "<span>Prezzo: {$product -> getPrice()} €</span>";
        echo "<span>Categoria: <img class='favicon' src='{$product->getCategory()}' alt=''></span>";
    
        if ($product instanceof Food) {
            echo "<span>Tipologia di prodotto: {$product -> getFoodType()}</span>";
        } elseif ($product instanceof Game) {
            echo "<span>Tipologia di prodotto: {$product -> getGameType()}</span>";
        } elseif ($product instanceof Kennel) {
            echo "<span>Tipologia di prodotto: {$product -> getKennelType()}</span>";
        }
    
        echo "</div>";
    }
    ?>
        </div>
    
    </div>
    

</body>
</html>