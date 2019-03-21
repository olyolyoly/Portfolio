<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=portfolio', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$id = $_GET['id'];

$sql = 'SELECT `id`,`Title`,`Image_URL` FROM `portfolio` WHERE `id` = ?;';
$query = $db->prepare($sql);
$query->execute([$id]);

$project = $query->fetch();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/add.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <title>Edit Form</title>
</head>

<body>


<div class="section">
    <div class="container">
        <form method="POST" action="editupdate.php?id=<?php echo $id;?>">
            <label class="label">Edit Project Title</label>
            <input type="text" name="title" value="<?php echo $project['Title'];?>" required>
            <br>
            <br>
            <label class="label">Edit Image URL</label>
            <input type="text" name="url" value="<?php echo $project['Image_URL'];?>" required>
            <br>
            <?php

            if (empty($_GET['id'])) {
                echo '<p>No projected selected to edit</p>';
                }
            ?>

            <br>
            <input type="submit" value="Edit">
        </form>
    </div>
</div>
</body>
</html>



