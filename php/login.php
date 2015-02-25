<?php
session_start();
require_once("../assets/php/medoo.min.php");
$database = new medoo();
$count = $database->count("user", [
    "username" => $_POST["username"]
]);

if($count == 0) {
    exit('<strong>Benutzername oder Passwort falsch!</strong><br />Passwort vergessen? <a href="#" class="text-danger"><strong>Neues Passwort anfordern</strong></a>');
} else {
    $data = $database->select("user", [
        "password",
        "id"
    ], [
        "username" => $_POST["username"]
    ]);
    if(md5($_POST["password"]) == $data[0]["password"]) {
        $_SESSION["user"] = $data[0]["id"];
        $_SESSION["start"] = time();
        echo("success");
    } else {
        exit('<strong>Benutzername oder Passwort falsch!</strong><br />Passwort vergessen? <a href="#" class="text-danger"><strong>Neues Passwort anfordern</strong></a>');
    }
}
?>