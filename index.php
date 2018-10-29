<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro Fun</title>
    <link rel="stylesheet" href="<?= $_SERVER['DOCUMENT_ROOT'] . '/' . 'style.css';?>" class="style">
</head>
<body>
    <?
    require('header.php');
    echo $_SERVER['SERVER_NAME'];
    require('footer.php');
    ?>
</body>
</html>