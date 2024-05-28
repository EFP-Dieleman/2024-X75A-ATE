
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=catalog">Catalog</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php include 'pages/' . $page . '.php'; ?>
    </main>
</body>

</html>