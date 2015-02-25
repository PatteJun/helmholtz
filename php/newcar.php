<?php
session_start();
require_once('../assets/php/config.php');
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
    require_once('../assets/php/medoo.min.php');
    require_once('../assets/php/uploadClass.php');
    require_once('../assets/php/SimpleImage.php');
    $database = new medoo();

    $new_car = $database->insert('cars', [
        'user' => $_SESSION['user'],
        'model' => $_POST['model'],
        'motor' => $_POST['motor'],
        'performance' => $_POST['performance'],
        'fabyear' => $_POST['fabYear'],
        'tires' => $_POST['tires'],
        'brakes' => $_POST['brakes'],
        'suspension' => $_POST['suspensions'],
        'exhaust' => $_POST['exhaust'],
        'chassis' => $_POST['chassis'],
        'engine' => $_POST['engine'],
        'paint' => $_POST['paint'],
        'interieur' => $_POST['interieur'],
        'sound' => $_POST['sound'],
        'lights' => $_POST['lights'],
        'misc' => $_POST['misc'],
        'date' => time()
    ]);

    $new_acitivity = $database->insert('activities', [
        'user' => $_SESSION['user'],
        'art' => '11',
        'date' => time()
    ]);

    header('Location: '.$home_directory.'profil.php');
}
?>
<?php
//Setup page
$page_title = 'Neues Fahrzeug veröffentlichen'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array();
$show_audio = false;

require_once('../tpl_header.php');
require_once('../tpl_menu.php');
?>
    <div class="container text-center" style="margin-top: 5em;">
        <i class="fa fa-refresh fa-spin fa-5x"></i>
        <h3 class="text-1er">Dein Fahrzeug wird veröffentlicht...</h3>
    </div>

<?php
require_once('../tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array();

require_once('../tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->

    <!-- END JavaScript -->
<?php
require_once('../tpl_end.php');
?>