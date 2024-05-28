<?php

require_once '../connection.php';

$page = 'list';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

require $page.'.php';

/*

category


1. Listes
    list.php

2. Formulaires
    new.php
    edit.php

    => alter.php

3. Persistence

    save.php
    */