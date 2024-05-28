<a href="index.php?page=new">New theme</a>
<br />
<?php


$sql = "SELECT * FROM theme";
$res = $pdo->query($sql);
$themes = $res->fetchAll();

foreach ($themes as $theme) {
    echo '<a href="index.php?page=edit&entity=theme&id=' . $theme['id'] . '">' . $theme['label'] . '</a><br/>';
}
