<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    include "dcconnect.php";
    $sql="CREATE TABLE producttable(
        id int primary key,
        product_name varchar(50),
        description varchar(100),
        img varchar(100),
        price int,
        data_view varchar(30),
        counter int)";
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
</body>
</html>