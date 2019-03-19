<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=portfolio", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = 'SELECT `id`, `Title` FROM `portfolio`;';
$query = $db->query($sql);

$result= $query->fetchAll();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">

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
            foreach ($result as $project) {
                echo '<tr><td>' . $project['Title'] . '</td><td><a href="#">Edit</a></td><td><a href="#">Del</a></td></tr>';
            }
            ?>
        </table>
        <BR>
        <a href="#" class="add-button"> ADD PROJECT </a>
    </div>
</body>







