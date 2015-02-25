<?php

//echo($_GET['disqusId']);

?>

<div id="disqus_thread"></div>
<script type="text/javascript">

    var thisDisqus = '<?php echo($_GET['disqusId']); ?>';

    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '1ertuning'; // required: replace example with your forum shortname
    var disqus_identifier = thisDisqus;
    var disqus_url = 'http://1er.xml-datei.de/fahrzeug.php#!'+thisDisqus;

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>