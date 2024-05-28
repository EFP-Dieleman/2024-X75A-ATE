<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="X75A.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php?page=list&entity=category">Category</a>
            <a href="index.php?page=list&entity=theme">Theme</a>
            <a href="index.php?page=list&entity=tag">Tag</a>
            <a href="index.php?page=list&entity=item">Item</a>
        </nav>
    </header>
    <?php

    require_once '../connection.php';

    $page = 'list';
    $entity = 'category';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    if(isset($_GET['entity'])) {
        $entity = $_GET['entity'];
    }

    require $entity. '/' . $page . '.php';
    ?>
</body>

</html>
