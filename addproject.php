<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=portfolio', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$title = $_POST ['title'];
$url = $_POST ['url'];

$sql = "INSERT INTO `portfolio`(`Title`, `Image_URL`) VALUES (:title, :url);";
$query = $db->prepare($sql);
$query->bindParam(':title', $title, PDO::PARAM_STR);
$query->bindParam(':url', $url, PDO::PARAM_STR);
$query->execute();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/add.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <title>Add Form</title>
</head>

<body>
    <div class="section">
        <div class="container">
        <form method="POST" action="addproject.php">
            <label class="label">Enter Project Title</label>
            <input type="text" name="title">
            <br>
            <br>
            <label class="label">Enter Image URL</label>
            <input type="text" name="url">
            <br>
            <br>
            <input type="submit" value="Add">
        </form>
        </div>
    </div>
</body>
</html>

