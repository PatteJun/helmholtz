<?php
require_once('assets/php/config.php');
//Setup page
$page_title = 'Disqus Testing'; //TITLE
$page_meta_desc = 'Just for testing'; //META > Description
$custom_css = array();
$show_audio = false;

require_once('tpl_header.php');
require_once('tpl_menu.php');
?>
    <div class="container">
        <div class="col-md-4">
            <p>Hier die Kommentare aus Disqus</p>
            <p>Anzahl der Kommentare: <a href="http://1er.xml-datei.de/disqus.php#disqus_thread">Link</a></p>
            <div id="disqus_thread"></div>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <button type="button" class="btn btn-primary" id="newDisqusOne">Klick mich 1!</button>
            <button type="button" class="btn btn-primary" id="newDisqusTwo">Klick mich 2!</button>
        </div>
    </div>

<?php
require_once('tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array();

require_once('tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->

    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '1ertuning'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());

        $('#newDisqusOne').click(function() {
            DISQUS.reset({
                reload: true,
                config: function () {
                    this.page.identifier = "neuer1234";
                    this.page.url = "http://1er.xml-datei.de/disqus.php#!neuer1234";
                }
            });
        });

        $('#newDisqusTwo').click(function() {
            DISQUS.reset({
                reload: true,
                config: function () {
                    this.page.identifier = "neuer12345";
                    this.page.url = "http://1er.xml-datei.de/disqus.php#!neuer12345";
                }
            });
        });
    </script>

    <!-- END JavaScript -->
<?php
require_once('tpl_end.php');
?>