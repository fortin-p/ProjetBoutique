<?php
include "article.php";
include "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Boutique</title>
    <meta charset="utf-8"/>

</head>
<body>
<?php
require "header.php"
?>

    <form class="d-flex justify-content-center" action="basket.php" method="POST">
        <?php
        $liste_products = array($article1, $article2, $article3);  //Tableau liste des 3 articles
        foreach ($liste_products as $key => $products) {  //boucle sur le tableau



            if ($key == 1) {
                echo "<div class='card p-2 ml-5 ' style='background: linear-gradient(0deg,#6930c3,#222,#d00000); width: 300px;'>";
            } elseif ($key == 2) {
                echo "<div class='card p-2 ml-5 ' style='background: linear-gradient(0deg,#023e8a,#222,#1dd3b0); width: 300px;'>";

            } else {
                echo "<div class='card p-2 ml-5 ' style='background: linear-gradient(0deg,#772e25,#222,#b8b08d); width: 300px;'>";
            }
            displayItemCheckedBox($products["name"], $products["price"], $products["picture"],$key);
            echo "</div>";

        }
        ?>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>





<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>


</html>
