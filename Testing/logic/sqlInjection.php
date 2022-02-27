<?php
    // if(isset($_POST['username'])){
    //     echo htmlspecialchars($_POST['username'],ENT_QUOTES,"UTF-8");
    // }

    $conn = new PDO("mysql:host=localhost;dbname=pdo_project","gurpinder","password@123");
    // $sql = "select * from users where user_id = 12";
    $data =  $_POST['username'];
    print_r($conn->query("select * from users where user_name = '$data' and user_phone_number='23482379';")->fetchAll(PDO::FETCH_ASSOC));
    unset($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/sqlInjection.php" method="POST">
        <input name="username" type="text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>