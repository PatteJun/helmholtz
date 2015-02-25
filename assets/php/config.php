<?php
//Set base values
$home_directory = 'http://localhost/helmholtz/'; //Folder or domain
$base_page_title = ' - 1erTuning.de';
$conf_after_logout = $home_directory;

//Set autoplay background music
$conf_music_auto = ''; //'autoplay' = true; '' = false;
$conf_music_file = $home_directory.'assets/audio/7thgate.mp3';

//Set logo file
$conf_logo_file = $home_directory.'assets/img/1erTuning.svg';

//Base JavaScripts
$base_javascripts = array(
    '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
    $home_directory.'assets/js/bootstrap.js',
    $home_directory.'assets/js/application.js',
    'http://platform.twitter.com/widgets.js',
    $home_directory.'assets/js/base.js'
);

//Base CSS
$base_css = array(
    $home_directory.'assets/css/bootstrap.css',
    '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
    $home_directory.'assets/css/custom.css'
);

?>