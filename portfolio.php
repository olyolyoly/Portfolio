<?php

$db = new PDO("mysql:host=192.168.20.20;dbname=portfolio", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = 'SELECT `Image_URL` FROM `portfolio`;';
$query = $db->query;

    var_dump($db);

