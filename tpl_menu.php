<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container showroom">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="margin: 18px 15px 18px 0px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo($home_directory); ?>">
                <img src="<?php echo($conf_logo_file); ?>" alt="Logo 1erTuning.de" title="1erTuning.de" height="30" />
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li<?php if($this_site == 'index.php') { echo(' class="active"'); } ?>>
                    <a href="<?php echo($home_directory); ?>">Showroom</a>
                </li>
                <li<?php if($this_site == 'katalog.php') { echo(' class="active"'); } ?>>
                    <a href="#">Katalog</a>
                </li>
                <li<?php if($this_site == 'forum.php') { echo(' class="active"'); } ?>>
                    <a href="#">Forum</a>
                </li>
                <?php
                if($_SESSION['user'] == '') {
                    echo('
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user fa-fw"></i> Login</a>
                    </li>
                    ');
                } else {
                    $username = $database->select('user', [
                        'username'
                    ], [
                        'id' => $_SESSION['user']
                    ]);
                    echo('
                    <li>
                        <a href="profil.php"><i class="fa fa-user fa-fw"></i> '.$username[0]["username"].'</a>
                    </li>
                    <li>
                        <a href="php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    ');
                }
                ?>
            </ul>
            <?php
            if($show_audio) {
                echo('
                <div class="visible-lg">
                    <p class="navbar-text pull-right player visible-lg" style="margin-right:0px;">
                        <a href="#" class="navbar-link" value="Rewind" onclick="rewind()">
                            <i class="fa fa-backward fa-fw"></i>
                        </a>
                        <a href="#" class="navbar-link" value="Play" onclick="play()">
                            <i class="fa fa-play fa-fw"></i>
                        </a>
                        <a href="#" class="navbar-link" value="Pause" onclick="pause()">
                            <i class="fa fa-pause fa-fw"></i>
                        </a>
                    </p>
                    <audio id="loop" '.$conf_music_auto.' loop>
                        <source src="'.$conf_music_file.'" type="audio/mp3"/>
                    </audio>
                </div>
                ');
            }
            ?>
        </div>
    </div>
</nav>