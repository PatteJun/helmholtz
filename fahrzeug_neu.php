<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Neues Fahrzeug einstellen'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array(
    $home_directory.'assets/css/car-upload.css'
);
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');

//Get all models
$models = $database->select('models', [
    'id',
    'name'
]);

?>
    <div class="container">
        <h1>Stelle jetzt Deinen 1er ein!</h1>
        <p class="text-1er">Nutze das Formular um deinen 1er mit Bildern und technischen Daten der Community zu präsentieren.</p>
        <form id="frmNewCar" action="php/newcar.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9" style="padding-bottom: 15px;">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-1er">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Fahrzeugdaten
                                </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="alert alert-info alert-dismissable hidden-md hidden-lg">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Aufgepasst!</strong> Du kannst gerne dein Fahrzeug von einem mobilen Gerät einstellen. Bequemer lässt es sich aber vom PC aus machen.
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group" id="frmGrpModel">
                                                <label for="model" class="control-label">Modell</label>
                                                <select class="form-control" id="model" name="model">
                                                    <option value="0" selected>Bitte auswählen...</option>
                                                    <?php
                                                    foreach($models as $data) {
                                                        echo('
                                                        <option value="'.$data["id"].'">'.$data["name"].'</option>
                                                        ');
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" id="frmGrpMotor">
                                                <label for="motor" class="control-label">Motor</label>
                                                <input type="text" class="form-control" id="motor" name="motor" data-mask="999a" placeholder="z.B. 120d oder 135i" maxlength="4" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" id="frmGrpPerformance">
                                                <label for="performance" class="control-label">Leistung</label>
                                                <div class="input-group">
                                                    <input type="tel" class="form-control" id="performance" name="performance" data-mask="999" maxlength="3" />
                                                    <span class="input-group-addon">PS</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" id="frmGrpFabYear">
                                                <label for="fabYear" class="control-label">Baujahr</label>
                                                <div class="input-group">
                                                    <input type="tel" class="form-control" id="fabYear" name="fabYear" data-mask="9999" placeholder="z.B. 2005" maxlength="4" />
                                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-sort" id="frmPart1">weiter</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-1er">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-wrench fa-fw"></i> Tuning
                                </h3>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="alert alert-info" style="margin-top: 0px; margin-bottom: 10px;">
                                        <h4 class="text-1er">Was hast du verändert?</h4>
                                        <p>Beschreibe in diesem Abschnitt, welche Modifikationen Du an Deinem Fahrzeug vorgenommen hast. Nutze dafür die 11 verschiedenen Kategorien. Hast Du in einer Kategorie nichts verändert, lass das Feld einfach leer.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpTires">
                                                <label for="tires" class="control-label">Reifen | Felgen</label>
                                                <textarea class="form-control" rows="3" id="tires" name="tires" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpBrakes">
                                                <label for="brakes" class="control-label">Bremsanlage</label>
                                                <textarea class="form-control" rows="3" id="brakes" name="brakes" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpSuspension">
                                                <label for="suspension" class="control-label">Fahrwerk</label>
                                                <textarea class="form-control" rows="3" id="suspension" name="suspensions" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpExhaust">
                                                <label for="exhaust" class="control-label">Abgassystem</label>
                                                <textarea class="form-control" rows="3" id="exhaust" name="exhaust" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpChassis">
                                                <label for="chassis" class="control-label">Karosserie</label>
                                                <textarea class="form-control" rows="3" id="chassis" name="chassis" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpEngine">
                                                <label for="engine" class="control-label">Motor | Getriebe</label>
                                                <textarea class="form-control" rows="3" id="engine" name="engine" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpPaint">
                                                <label for="paint" class="control-label">Farbe | Folierung</label>
                                                <textarea class="form-control" rows="3" id="paint" name="paint" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpInterieur">
                                                <label for="interieur" class="control-label">Innenausstattung</label>
                                                <textarea class="form-control" rows="3" id="interieur" name="interieur" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpSound">
                                                <label for="sound" class="control-label">Soundsystem</label>
                                                <textarea class="form-control" rows="3" id="sound" name="sound" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpLights">
                                                <label for="lights" class="control-label">Lichtanlage</label>
                                                <textarea class="form-control" rows="3" id="lights" name="lights" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group" id="frmGrpMisc">
                                                <label for="misc" class="control-label">Sonstiges | Zubehör</label>
                                                <textarea class="form-control" rows="3" id="misc" name="misc" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-default" id="frmPart2Back">zurück</button>
                                    <button type="button" class="btn btn-sort" id="frmPart2">weiter</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-1er">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-picture-o fa-fw"></i> Bilder
                                </h3>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group" id="frmGrpPictures">
                                                <label for="pictures" class="control-label">Wähle die Bilder für deine Gallerie aus:</label>
                                                <input type="file" id="pictures" name="pictures" multiple />
                                                <p class="text-1er" style="margin-top: 5px; text-align: justify;">Achte bitte darauf, dass deine Bilder groß genug sind. Zu kleine Bilder sehen in der Gallerie nicht gut aus.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="alert alert-info" style="margin-top: 0px; margin-bottom: 10px;">
                                                <h4 class="text-1er">Ready, set, go!</h4>
                                                <p>Gleich wird dein Fahrzeug auf 1erTuning präsentiert. Du kannst später neue Bilder zu deiner Gallerie hinzufügen, alte löschen sowie dein Fahrzeug-Profilbild ändern.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-default" id="frmPart3Back">zurück</button>
                                    <button type="submit" class="btn btn-success">Fahrzeug einstellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
<?php
require_once('tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array();

require_once('tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->
    <script>
    $('#frmPart1').click(function(e) {
        var formControl = true;

        var frmGrpModel = $('#frmGrpModel');
        var frmGrpMotor = $('#frmGrpMotor');
        var frmGrpPerformance = $('#frmGrpPerformance');
        var frmGrpFabYear = $('#frmGrpFabYear');

        frmGrpModel.removeClass('has-error');
        frmGrpMotor.removeClass('has-error');
        frmGrpPerformance.removeClass('has-error');
        frmGrpFabYear.removeClass('has-error');

        var model = $('#model');
        var motor = $('#motor');
        var performance = $('#performance');
        var fabYear = $('#fabYear');

        if(model.val() == 0) {
            frmGrpModel.addClass('has-error');
            formControl = false;
        }

        if(motor.val() == '') {
            frmGrpMotor.addClass('has-error');
            formControl = false;
        }

        if(performance.val() == '') {
            frmGrpPerformance.addClass('has-error');
            formControl = false;
        }

        if(fabYear.val() == '') {
            frmGrpFabYear.addClass('has-error');
            formControl = false;
        }

        if(formControl) {
            $('#collapseOne').collapse('toggle');
            $('#collapseTwo').collapse('toggle');
        }

    });

    $('#frmPart2Back').click(function(e) {
        $('#collapseTwo').collapse('toggle');
        $('#collapseOne').collapse('toggle');
    });

    $('#frmPart2').click(function(e) {
        $('#collapseTwo').collapse('toggle');
        $('#collapseThree').collapse('toggle');
    });

    $('#frmPart3Back').click(function(e) {
        $('#collapseTwo').collapse('toggle');
        $('#collapseThree').collapse('toggle');
    });

    $('#frmNewCar').submit(function(e) {
        var formControl = true;

        var frmGrpPictures = $('#frmGrpPictures');

        frmGrpPictures.removeClass('has-error');

        var pictures = $('#pictures');

        if(pictures.val() == '') {
            frmGrpPictures.addClass('has-error');
            formControl = false;
        }

        return formControl;
    });

    </script>
    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>