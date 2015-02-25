<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" style="padding-left: 5px;">Login für Mitglieder</h4>
            </div>
            <form role="form" id="frmLogin">
                <div class="modal-body">
                    <div id="loginAlert" class="alert alert-info">
                        Als registriertest Mitglied kannst Du Dich hier in den Mitglieder-Bereich einloggen.<br />
                        Du bist noch kein Mitglied? <a href="<?php echo($home_directory.'registrierung.php'); ?>" title="Als neues Mitglied registrieren"><strong>Jetzt kostenlos registrieren!</strong></a>
                    </div>
                    <div class="form-group" id="frmGrpUsername">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group" id="frmGrpPassword">
                        <label for="password">Passwort</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-key fa-fw"></i>
                            </span>
                            <input type="password" class="form-control" id="password" placeholder="Passwort">
                        </div>
                    </div>
                    <div class="form-group">
                        <p>
                            <a href="#" class="text-muted">Passwort vergessen?</a>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sort btn-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>