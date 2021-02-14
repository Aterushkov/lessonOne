<?
include "./inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    $product1 = new PlushToys("Мопс","MopsInc","Бежевый","600","Вата");
    echo $product1->getDocSF();
    ?>
    <br/>
    <?php
    echo $product1->getItem();
    ?>
    <br/>
     <?php
    $product1->getBrandAndLabel();
     ?>

</head>
<body>

</body>
</html>
