<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit">
</form>
</body>
</html>
<?php
include_once 'Student.php';
include_once 'Data.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $add = new Student($_REQUEST["name"],$_REQUEST["age"]);
    $st = new Data();
    $st->addNew($add);
    header("Location:index.php");


}