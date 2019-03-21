<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolio', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$title = $_POST ['title'];
$url = $_POST ['url'];
$id = $_GET['id'];

$sql = "UPDATE `portfolio` SET `Title`=  :title, `Image_URL`= :url WHERE `id` = :id;";
$query = $db->prepare($sql);
$query->bindParam(':title', $title, PDO::PARAM_STR);
$query->bindParam(':url', $url, PDO::PARAM_STR);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$result = $query->execute();

if ($result) {
    header ("location:admin.php");
} else {
    echo 'Database Error';
}

?>