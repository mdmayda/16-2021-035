<?php
    include('connection.php');

    $query_fav_product = "SELECT * FROM products WHERE product_criteria = 'favourite' LIMIT 8";

    $stmt_fav_product = $conn->prepare($query_fav_product);

    $stmt_fav_product->execute();

    $fav_products = $stmt_fav_product->get_result();

    ?>