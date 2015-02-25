<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Base Template'; //TITLE
$page_meta_desc = 'This ist the description'; //META > Description
$custom_css = array();
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');
?>
    <div class="container">
        <!-- Put the main content here -->
    </div>

<?php
require_once('tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array();

require_once('tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->

    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>