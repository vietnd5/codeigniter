<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view 3 getdata</title>
</head>
<body>
    <h1> view 3 </h1>
    <?php
        foreach $cacsanpham as $motsanpham :
    ?>
        <h1> <?php echo $motsanpham['ten'] ; ?></h1>
        <h1> <?php echo $motsanpham['mota'] ; ?></h1>

    <?php
        endforeach;
    ?>
</body>
</html>