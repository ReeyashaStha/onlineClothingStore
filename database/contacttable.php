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
    $sql="CREATE TABLE contacttable(
        contact_id int primary key,
        contact_name varchar(100),
        contact_email varchar(100),
        contact_phone varchar(10),
        contact_message varchar(255))";
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