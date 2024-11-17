<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "dbconnect.php";
    $sql="CREATE TABLE cart_details(
        product_id int primary key,
        product_title varchar(100),
        product_description varchar(255),
        product_categories varchar(255),
        product_image varchar(255),
        product_price varchar(100))";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Table created";
        }
        else{
            die("Table is not created due to".mysqli_error($conn));
        }

        ?>

</body>
</html>