<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Showroom'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array();
$show_audio = true;

require_once('tpl_header.php');
require_once('tpl_menu.php');
?>
    <div class="container container-showroom">
        <div class="btn-group pull-right" style="padding-right: 15px;">
            <div class="btn-group">
                <button type="button" class="btn btn-sort dropdown-toggle" data-toggle="dropdown">
                    Modell
                    <i class="fa fa-list fa-fw"></i>
                </button>
                <ul class="dropdown-menu">
                   <li><a href="#" class="filter" data-filter=".e81">E81</a></li>
                    <li><a href="#" class="filter" data-filter=".e82">E82</a></li>
                    <li><a href="#" class="filter" data-filter=".e87">E87</a></li>
                    <li><a href="#" class="filter" data-filter=".e88">E88</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="filter" data-filter=".f20">F20</a></li>
                    <li><a href="#" class="filter" data-filter=".f21">F21</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-sort dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-thumbs-up fa-fw"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#" class="filter" data-filter="" style="padding: 3px 10px;">
                            <i class="fa fa-sort-amount-desc fa-fw">&nbsp;</i> aufsteigend
                        </a>
                    </li>
                    <li>
                        <a href="#" class="filter" data-filter="" style="padding: 3px 10px;">
                            <i class="fa fa-sort-amount-asc fa-fw">&nbsp;</i> absteigend
                        </a>
                    </li>
                </ul>
            </div>
            <button type="button" class="sort btn btn-sort" data-sort="random"><i class="fa fa-refresh fa-fw"></i></button>
            <button type="button" class="filter btn btn-sort" data-filter="all">Alle</button>
        </div>
        <div class="clearfix"></div>
        <br />
        <div id="Container">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mix e81">
                <div class="thumbnail carcard">
                    <a href="#" title="">
                        <div class="ratio" style="background-image:url('assets/img/auto.jpg')"></div>
                    </a>
                    <a href="#" class="userlink">Max Mustermann</a>
                    <div class="caption">
                        <div class="valign">
                            <div class="mytooltip" data-toggle="tooltip" title="Likes">
                                <i class="fa fa-thumbs-up fa-fa"></i> 123
                            </div>
                            <div>
                                <i class="fa fa-comments fa-fa"></i> 123
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mix e81">
                <div class="thumbnail carcard">
                    <a href="#" title="">
                        <div class="ratio" style="background-image:url('assets/img/auto.jpg')"></div>
                    </a>
                    <a href="#" class="userlink">Max Mustermann</a>
                        <div class="caption">
                            <div class="valign">
                                <div>
                                    <i class="fa fa-thumbs-up fa-fa"></i> 123
                                </div>
                            <div>
                                <i class="fa fa-comments fa-fa"></i> 123
                            </div>
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
        $home_directory.'assets/js/jquery.mixitup.js'
    );

    require_once('tpl_javascript.php');
?>
<!-- Put the Custom JavaScripts here -->
<!-- START JavaScripts -->
<script type="text/javascript">
    // On document ready:
    $(function(){
        // Instantiate MixItUp:
        $('#Container').mixItUp();
    });
</script>
<script type="text/javascript">
    var audio = document.getElementById('loop');
    function play() { audio.play(); }
    function pause() { audio.pause(); }
    function rewind() { audio.currentTime = 0; }
</script>
<!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>