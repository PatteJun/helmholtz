<?php
session_start();

require_once('assets/php/medoo.min.php');
$database = new medoo();

$this_site = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="<?php echo($page_meta_desc); ?>" />
    <title><?php echo($page_title.$base_page_title); ?></title>

    <?php
        foreach($base_css as $file) {
            echo('
            <link href="'.$file.'" type="text/css" rel="stylesheet" />
            ');
        }

        foreach($custom_css as $file) {
            echo('
                <link href="'.$file.'" type="text/css" rel="stylesheet" />
                ');
        }
    ?>
</head>
<body>