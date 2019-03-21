<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=portfolio', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `portfolio` WHERE `id` = :id;";

    $query = $db->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $result = $query->execute();

    if ($result) {
        header("location:admin.php");
    } else {
        echo 'Database Error';
    }
} else {
    header("location:editupdate.php");
}



?>
