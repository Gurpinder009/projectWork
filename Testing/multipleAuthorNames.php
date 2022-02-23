<?php
    if(isset($_GET['author_name'])){
        $str = $_GET['author_name'];
        print_r(explode(",",$str));
    }
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
    <form action="/" autocomplete="off">
        <input name="author_name" type="text" placeholder="name" />
        <button>Submit</button>
    </form>
</body>
</html>