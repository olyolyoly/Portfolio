<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=portfolio", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = 'SELECT `id`,`Title` FROM `portfolio`;';
$query = $db->query($sql);

$projects = $query->fetchAll();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
    <div>
        <table>
            <tr>
                <th>Title</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($projects as $project) {
                echo '<tr><td>' . $project['Title'] . '</td><td><a href="edit.php?id=' . $project['id'] . '">Edit</a></td><td><a href="delete.php?id=' . $project['id'] . '">Del</a></td></tr>';
            }
            ?>
        </table>
        <br>
        <a href="addproject.php" class="add-button"> ADD PROJECT </a>
    </div>
</body>







