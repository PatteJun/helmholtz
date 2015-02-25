<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Image Tagger'; //TITLE
$page_meta_desc = ''; //META > Description
$custom_css = array();
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');
?>

    <div class="container text-center">
        <div id="hotspotting">
            <img src="images/test.jpg" class="img-responsive" id="thisPic">
        </div>
    </div>

    <!-- START Modal -->
    <!-- Modal -->
    <div class="modal fade" id="tagIt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Was möchtest Du markieren?</h4>
                </div>
                <div class="modal-body">
                    ...
                    <input type="hidden" id="actHotspot">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="deleteHotspot">Abbrechen</button>
                    <button type="button" class="btn btn-primary">Speichern</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal -->

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
        $('#thisPic').click(function(e) {
            var posX = $(this).offset().left;
            var posY = $(this).offset().top;

            var hotX = e.pageX-posX;
            var hotY = e.pageY-posY;

            var picId = $(this);
            var picWidth = picId.width();
            var picHeight = picId.height();

            var newLeft = (hotX/(picWidth/100))-(5/(picWidth/100));
            var newTop = hotY/(picHeight/100)-(5/(picHeight/100));

            $('#tagIt').modal('toggle');

            var randomstring = Math.random().toString(36).slice(-8);

            $('#actHotspot').val(randomstring);

            $('#hotspotting').append('<div class="hotspot" id="'+randomstring+'" style="top:'+newTop+'%;left:'+newLeft+'%;"></div>');
        });

        $('#deleteHotspot').click(function(e) {
            $('#tagIt').modal('toggle');
            var actHotspot = $('#actHotspot').val();
            $('#'+actHotspot).remove();
        });

        $(document).on("click",".hotspot",function(e) {
            var actHotspot = $(this).attr('id');
            $('#actHotspot').val(actHotspot);
            $('#tagIt').modal('toggle');
        });

    </script>
    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>