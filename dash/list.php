<a href="index.php?page=new">New category</a>
<br />
<?php


$sql = "SELECT * FROM category";
$res = $pdo->query($sql);
$categories = $res->fetchAll();

foreach ($categories as $category) {
    echo '<a href="index.php?page=edit&id='. $category['id'].'">' . $category['label'] . '</a><br/>';
}
