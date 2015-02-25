<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Dein Profil'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array(
    $home_directory.'assets/css/profile.css'
);
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');
if($_SESSION['user'] == '') {
    header('Location: '.$home_directory);
}

$user = $database->select('members', [
    'city',
    'picture',
    'date'
], [
    'user' => $_SESSION['user']
]);

$username = $database->select('user', [
    'username'
], [
    'id' => $_SESSION['user']
]);

$acitivities = $database->select('activities', [
    'art',
    'date'
], [
    'user' => $_SESSION['user'],
    'ORDER' => 'date DESC'
]);
?>
    <div class="container">
        <h1>Deine Profilseite</h1>
        <p class="text-1er">Auf deiner Profilseite kannst du dein Profil bearbeiten, ein Fahrzeug hochladen oder ein bestehendes bearbeiten.</p>
        <div class="user-buttons btn-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-sort dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user fa-fw"></i> Profil <i class="fa fa-caret-down fa-fw"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><i class="fa fa-edit fa-fw"></i> Profil bearbeiten</a></li>
                    <li><a href="#" id="deleteAccount"><i class="fa fa-trash-o fa-fw"></i> Account löschen</a></li>
                </ul>
            </div>
            <div class="btn-group">
            <?php
            if($database->has('cars', [
                'user' => $_SESSION['user']
            ])) {
                echo('
                <a href="#" class="btn btn-sort"><i class="fa fa-car fa-fw"></i> Mein Fahrzeug</a>
                ');
            } else {
                echo('
                <a href="fahrzeug_neu.php" class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Fahrzeug einstellen</a>
                ');
            }
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel panel-1er">
                            <div class="panel-body user-panel">
                                <img src="<?php echo($user[0]['picture']); ?>" alt="" class="img-circle img-user">
                            </div>
                            <div class="panel-body">
                                <div class="about">
                                    <h4 class="text-infinite text-1er" style="margin-bottom:5px;"><?php echo($username[0]['username']); ?></h4>
                                    <p class="text-infinite text-profile">
									<span class="mytooltip" data-toggle="tooltip" data-original-title="Heimatort">
										<i class="fa fa-map-marker fa-fw"></i> <?php echo($user[0]['city']); ?>
									</span>
                                    </p>
                                    <p class="text-infinite text-profile mytooltip">
									<span class="mytooltip" data-toggle="tooltip" data-original-title="Mitglied seit">
										<i class="fa fa-calendar fa-fw"></i> seit <?php echo(date('d.m.Y',$user[0]['date'])); ?>
									</span>
                                    </p>
                                    <p class="text-infinite text-profile" >
                                        <span class="mytooltip" data-toggle="tooltip" data-original-title="Noch kein Tuning-Teil markiert">
                                            <i class="fa fa-trophy fa-fw"></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="panel-footer" style="padding-bottom: 1.5em;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-1er">
                            <div class="panel-heading">
                                <h3 class="panel-title">Letzte Aktivitäten</h3>
                            </div>
                            <div class="activity-responsive">
                                <div class="panel-body" style="padding:0px;max-height:262px;">
                                    <div class="list-group" style="margin-bottom:0px;">
                                        <?php
                                        foreach($acitivities as $data) {
                                            $activity = $database->select('activity_categories', [
                                                'icon',
                                                'text'
                                            ], [
                                                'id' => $data['art']
                                            ]);

                                            echo('
                                            <a href="#" class="list-group-item list-group-item-primary" style="padding: 0px 15px 0px 0px;">
                                                <div class="valign">
                                                    <div class="activity-icon" style="text-align: center;">
                                                        '.$activity[0]["icon"].'
                                                    </div>
                                                    <div>
                                                        <p class="text-activity text-info">'.$activity[0]["text"].'</p>
                                                        <p class="activity-date">- '.date("d.m.Y",$data["date"]).'</p>
                                                    </div>
                                                </div>
                                            </a>
                                            ');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="padding-bottom:1.5em;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-6 col-md-12">

                    </div>
                    <div class="col-sm-6 col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- START Modals -->

    <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title text-1er" id="myModalLabel">Wirklich löschen?</h4>
                </div>
                <div class="modal-body" id="deleteModalBody">
                    <p><strong>Möchtest Du Deinen Account wirklich löschen?</strong></p>
                    <p>Deine Daten und Bilder werden danach für immer gelöscht. Dein Fahrzeug kann nicht mehr von anderen bestaunt werden!</p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Abbrechen</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i> Endgültig löschen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Modals -->

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
        $('#deleteAccount').click(function(e) {
            $('#deleteModalBody').append('<img src="<?php echo($home_directory); ?>assets/img/dont-leave.gif" class="img-thumbnail img-responsive">');
            $('#deleteAccountModal').modal('toggle');
        });
    </script>
    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>