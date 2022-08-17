<?php
    require __DIR__.'//inc//globals.php';

    $border = '1px solid red';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: block; background-color: rgb(25, 31, 41);">
    <div style="border: <?php echo $border; ?>;"><?php include INCLUDE_DIR.'/components/top.php'; ?></div>
    <div style="border: <?php echo $border; ?>;">HEADER</div>
    <div style="border: <?php echo $border; ?>;">BODY</div>
    <div style="border: <?php echo $border; ?>;">FOOTER</div>
    <div style="border: <?php echo $border; ?>;">BOTTOM</div>
</body>
</html>