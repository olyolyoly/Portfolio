<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=portfolio', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (!empty($_POST['title']) && !empty($_POST['url'])) {

    $title = $_POST ['title'];
    $url = $_POST ['url'];

    $sql = "INSERT INTO `portfolio`(`Title`, `Image_URL`) VALUES (:title, :url);";
    $query = $db->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':url', $url, PDO::PARAM_STR);
    $result = $query->execute();


    if ($result) {
        header("location:admin.php");
    } else {
        echo 'Database Error';
    }
}   else {
    header("location:addproject.php");
}

?>