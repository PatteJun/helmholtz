<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Profilseite eines Fahrzeugs'; //TITLE
$page_meta_desc = 'Hier die META-Description für ein Fahrzeug'; //META > Description
$custom_css = array(
    'http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css',
    $home_directory.'assets/css/fahrzeug.css',
    $home_directory.'assets/css/bootstrap-image-gallery.min.css',
	$home_directory.'assets/css/caption.css'
);
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Bilder Thumbnails -->
                <div class="panel panel-1er">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-picture-o fa-fw"></i> Alle Bilder
                        </h3>
                    </div>
                    <div class="panel-body gallery">
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="assets/img/auto.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('assets/img/auto.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/tower.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/tower.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/user.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/user.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/space.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/space.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/oldboy.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/oldboy.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/test.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/test.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/auto.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/auto.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 gallery-item">
                            <a href="images/auto.jpg" class="thumbnail" data-gallery>
                                <div class="ratio" style="background-image:url('images/auto.jpg')"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tuning Bereiche -->
                <ul id="myTab" class="nav nav-tabs nav-primary">
                    <li class="dropdown active">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Tuning <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" style="min-width: 200px;border: 1px solid #4863a0;">
                            <li>
                                <a href="#reifen" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/reifen.png" style=" height: 20px;" />
                                        </div>
                                        <div>Reifen | Felgen</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#bremse" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/bremse.png" style=" height: 20px;" />
                                        </div>
                                        <div>Bremsanlage</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#fahrwerk" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/fahrwerk.png" style=" height: 20px;" />
                                        </div>
                                        <div>Fahrwerk</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#abgas" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/abgas.png" style=" height: 20px;" />
                                        </div>
                                        <div>Abgassystem</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#karosserie" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/karosserie.png" style=" height: 20px;" />
                                        </div>
                                        <div>Karosserie</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#motor" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/motor.png" style=" height: 20px;" />
                                        </div>
                                        <div>Motor | Getriebe</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#farbe" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/farbe.png" style=" height: 20px;" />
                                        </div>
                                        <div>Farbe | Folierung</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#innen" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/innen.png" style=" height: 20px;" />
                                        </div>
                                        <div>Innenausstattung</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#sound" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/sound.png" style=" height: 20px;" />
                                        </div>
                                        <div>Soundsystem</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#licht" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/licht.png" style=" height: 20px;" />
                                        </div>
                                        <div>Lichtanlage</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#sonstiges" tabindex="-1" data-toggle="tab" style="padding-right: 5px;">
                                    <div class="valign">
                                        <div style="width: 30px;">
                                            <img src="assets/img/ico/sonstiges.png" style=" height: 20px;" />
                                        </div>
                                        <div>sonstiges | Zubeh&ouml;r</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li style="padding: 10px 15px; display: block;">Modifikationen: <span class="badge">11</span></li>
                </ul>

                <!-- Content Tuning-Bereiche -->
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="reifen">
                        <p class="media-heading">Reifen | Felgen</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="bremse">
                        <p class="media-heading">Bremsanlage</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="fahrwerk">
                        <p class="media-heading">Fahrwerk</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="abgas">
                        <p class="media-heading">Abgassystem</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="karosserie">
                        <p class="media-heading">Karosserie</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="motor">
                        <p class="media-heading">Motor | Getriebe</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="farbe">
                        <p class="media-heading">Farbe | Folierung</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="innen">
                        <p class="media-heading">Innenausstattung</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="sound">
                        <p class="media-heading">Soundsystem</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="licht">
                        <p class="media-heading">Lichtanlage</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="sonstiges">
                        <p class="media-heading">sonstiges | Zubeh&ouml;r</p>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                </div>
                <hr style="border-top: 1px solid #4863a0;" />
            </div>
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="panel panel-1er">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Dieser 1er:
                        </h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="valign" style="margin-bottom: 5px;">
                                <div style="width: 90px;border: none;text-align: left;">
                                    <img src="images/profile/user4.png" class="img-circle" width="80" />
                                </div>
                                <div style="text-align: left;">
                                    <h4 class="profile-link"><a href="#">Max Mustermann</a></h4>
                                    <span class="help-block" style="margin-bottom: 0px;"><i class="fa fa-map-marker fa-fw"></i> München</span>
                                    <i class="fa fa-trophy fa-fw text-bronze mytooltip" style="margin-top: 0px;" data-toggle="tooltip" title="Bronze: 0 bis 5 markierte Teile"></i>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="nobadge">E81</span><i class="fa fa-road fa-fw"></i> Modell
                        </li>
                        <li class="list-group-item">
                            <span class="nobadge">123d</span><i class="fa fa-cogs fa-fw"></i> Motor
                        </li>
                        <li class="list-group-item">
                            <span class="nobadge">202 PS</span><i class="fa fa-dashboard fa-fw"></i> Leistung
                        </li>
                        <li class="list-group-item">
                            <span class="nobadge">2007</span><i class="fa fa-calendar fa-fw"></i> Baujahr
                        </li>
                        <li class="list-group-item">
                            <span class="badge">145</span><i class="fa fa-thumbs-up fa-fw"></i> Likes gesamt
                        </li>
                        <li class="list-group-item">
                            <span class="badge">8</span><i class="fa fa-comments fa-fw"></i> Kommentare gesamt
                        </li>
                        <li class="list-group-item" style="margin-bottom:0px;">
                            <span class="badge">8</span><i class="fa fa-tags fa-fw"></i> Markierte Teile
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- BlueImp Gallery -->
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <!--
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        -->
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade no-scroll" id="myModal">
            <div class="modal-dialog car-display">
                <div class="modal-content noBorder" style="background-color: #ebeced;">
                    <div class="row no-margin">
                        <div class="col-xs-8 no-padding" style="background-color: #000000;">
                            <div class="modal-body next">
								<div class="caption">
								<div class="alignleft">Bild 2<span>/</span>16</div>
								<div class="alignright">
									<span class="controls">
										<a href="#">83 <i class="fa fa-thumbs-up"></i></a>
										<a href="#">Teil markieren <i class="fa fa-tag"></i></a>
										<a href="#">0 <i class="fa fa-tags"></i></a>
										<span class="display-comments disqus-comment-count" data-disqus-identifier="auto">53 <i class="fa fa-comments"></i></span>
									</span>
								</div>
								<div style="clear: both;"></div>
							</div>
							</div>
                        </div>
                        <div class="col-xs-4 no-padding disqus-area" style="overflow: hidden;position: relative;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once('tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array(
    '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js',
    $home_directory.'assets/js/bootstrap-image-gallery.min.js'
);

require_once('tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->
    <script type="text/javascript">
        var images =  new Array(
            'auto',
            'tower',
            'user',
            'space',
            'oldboy',
            'test',
            'auto',
            'auto'
        );

        var gallery = $('#blueimp-gallery');

        gallery.on('slide', function(index, slide) {

            $('.disqus-area').empty();

            $('div[data-index='+slide+'] .disqus-area').load('template/disqus.php?disqusId='+images[slide]);

            $('.disqus-area').height($('.col-xs-8').height());

        });
    </script>

    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '1ertuning'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    </script>

    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>