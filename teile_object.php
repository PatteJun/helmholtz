<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<?php

$teil = array(
    'cat' => 'Abgas',
    'sub_cat' => 'Schalldämpfer',
    'type' => 'z.B. Farbe',
    'id' => '1234',
    'name' => 'Name des Produkts',
    'manufacturer' => 'Brembo',
    'price' => 130,
    'skills' => 4,
    'size' => array(
        'width' => 195,
        'zoll' => 55,
        'radius' => 16,
        'watt' => 4400
    ),
    'link' => 'http://www.example.com',
    'pictures' => array(
        'img1' => 'http://1ertuning.de/img/bild1.jpg',
        'img2' => 'http://1ertungin.de/img/bild2.jpg'
    ),
    'cars' => array(
        'car1' => '123',
        'car2' => '124'
    ),
    'description' => 'Beschreibung des Produkts',
    'author' => 'userID',
    'date_create' => 'Wann wurde das Teil eingestellt',
    'like_count' => 29,
    'comment_count' => 1
);

echo('<pre style="width: 100%;">');
var_dump($teil);
echo("</pre>");
?>