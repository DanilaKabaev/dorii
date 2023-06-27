<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dori</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/lightslider.css">
  <script type="text/Javascript" src="js/JQuery.js"></script>
  <script type="text/Javascript" src="js/lightslider.js"></script>
</head>

<?php
    include('php-core/bd.php');

    $sql = "SELECT * FROM product";
    $res_data = mysqli_query($link, $sql);
    // Цикл для вывода строк
    echo '<div class="blackfon1"><div class="container_service"><div class="columns">';
    while($row = mysqli_fetch_array($res_data)){
        echo '<div class="service-card">';
        //вывод имени и пути картинки
        $image_name=$row["image_name"];
        $image_path=$row["image_path"];
       echo "<img src=php-core/". $image_path . $image_name . ">";
       echo '<h3 class="h-tri">'. $row['name'] . '</h3> <p class="service-description">';
       echo $row['weight'] . '</p><span class="service-cost">';
       echo $row['price'] . '</span><a href="#" class="service-button">В КОРЗИНУ</a></div>';
    }
    echo '</div></div></div>';
    // Закрываем соединение с БД
    mysqli_close($link);

?>
