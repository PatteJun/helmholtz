<?php
require_once('../assets/php/medoo.min.php');
$database = new medoo();

if($database->has('members', [
    'email' => $_POST['email']
])) {
    echo('nope');
} else {
    echo('unique');
}

?>