<?php
foreach($base_javascripts as $file) {
    echo('
        <script src="'.$file.'"></script>
    ');
}

foreach($javascripts as $file) {
    echo('
        <script src="'.$file.'"></script>
    ');
}
?>