<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Registrierung neuer User'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array(
    $home_directory.'assets/css/jasny-bootstrap.min.css'
);
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');

if($_SESSION['user'] != '') {
    header('Location: '.$home_directory);
}

?>
    <div class="container">
        <h1>Erstelle Dir Dein Profil!</h1>
        <p class="text-1er">Bevor du deinen 1er einstellen und allen präsentieren kannst, musst du dir ein Profil anlegen.</p>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <form role="form" id="frmRegister" method="POST" action="php/register.php" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group" id="frmGrpUsername">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Dein Username">
                            </div>
                            <div class="form-group" id="frmGrpEmail">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="max.mustermann@gmail.com">
                            </div>
                            <div class="form-group" id="frmGrpPassword1">
                                <label for="password1" class="control-label">Passwort</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Mindestens sechs Zeichen">
                            </div>
                            <div class="form-group" id="frmGrpPassword2">
                                <label for="password2" class="control-label">Passwort wiederholen</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Passwort wiederholen">
                            </div>
                            <div class="form-group" id="frmGrpCity">
                                <label for="city" class="control-label">Wo kommst du her?</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="z.B. München">
                            </div>
                            <div class="form-group" id="frmGrpBirthday">
                                <label for="birthday" class="control-label">Dein Geburtstag</label>
                                <input type="tel" class="form-control" id="birthday" name="birthday" data-mask="99.99.9999" placeholder="tt.mm.jjjj">
                            </div>
                        </div>
                        <div class="col-md-6 form-group" id="profilepicturelabel">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <label class="control-label">Profilbild wählen</label>
                                <div class="fileinput-new thumbnail">
                                    <img src="assets/img/placeholder.png" title="Dein Profilbild" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
							        <span class="btn btn-sort btn-file">
								    <span class="fileinput-new">Bild wählen</span>
								    <span class="fileinput-exists">Ändern</span>
								        <input type="file" name="profilepicture" id="profilepicture">
							        </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Löschen</a>
                                </div>
                            </div>
                            <div class="alert alert-info">
                                <p><strong>Alles klar!</strong> Sobald du deine Anmeldung abgeschickt hast, wird dir eine Bestätigungsmail zugeschickt. Klicke auf den Bestätigungslink darin und schon kann's losgehen!</p>
                                <p>Indem du auf jetzt abschicken klickst, erklärst du dich mit unseren <strong><a href="#" style="color: #4863a0;">Datenschutzbestimmungen</a></strong> einverstanden und bestätigst unsere <strong><a href="#" style="color: #4863a0;">Bestimmungen zur Verwendung von Cookies</a></strong> gelesen zu haben.</p>
                                <p class="text-right"><button type="submit" class="btn btn-sort">Jetzt abschicken!</button></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require_once('tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array(
    'http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places',
    $home_directory.'assets/js/jquery.geocomplete.js',
    $home_directory.'assets/js/jasny-bootstrap.min.js',
    $home_directory.'assets/js/register.js'
);

require_once('tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->
    <script>
        $(function(){
            $("#city").geocomplete()
                .bind("geocode:result", function(event, result){
                    $.log("Result: " + result.formatted_address);
                });
        });
    </script>
    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>