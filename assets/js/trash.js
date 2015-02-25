//Give the image an id
$('#thisPic').click(function(e) {
 var picId = $('#thisPic');
 var picWidth = picId.width();
 var picHeight = picId.height();

 var posX = $(this).position().left;
 var posY = $(this).position().top;
 var hotX = e.pageX-posX;
 var hotY = e.pageY-posY;
 alert(e.pageX+'...'+ e.pageY);

 var newLeft = hotX/(picWidth/100);
 var newTop = hotY/(picHeight/100);

 //alert(newLeft+'---'+newTop);

 $('#hotspotting').append('<div class="hotspot" data-toggle="popover" data-target="click" data-placement="right" title="Test" data-content="kkk" style="top:'+newTop+'%;left:'+newLeft+'%;"></div>');
 });