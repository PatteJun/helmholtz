<?php
require_once('../assets/php/medoo.min.php');
$database = new medoo();

if($database->has('user', [
    'username' => $_POST['username']
])) {
    echo('nope');
} else {
    echo('unique');
}

?>