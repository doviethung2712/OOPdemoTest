<?php
include_once 'Data.php';
$a = new Data();

$arr = $a->loadData();

?>
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

<table>
    <?php foreach ($arr as $key => $value):?>
        <tr>
            <td><?php echo $key +1?></td>
            <td><?php echo $value->name?></td>
            <td><?php echo $value->age?></td>
        </tr>
        <?php endforeach;?>
</table>

</body>
</html>
<?php
