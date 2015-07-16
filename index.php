<?php

if (isset($_GET['state']))
$state = $_GET['state'];
else
$state = 'main';	

if (isset($_GET['cat_name']))
$cat_name = $_GET['cat_name'];
else
$cat_name = 'ap';

if (isset($_GET['vid']))
$vid = $_GET['vid'];
else
$vid = 0;	

require_once('lib.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
ExpertTV
</title>
<meta charset="UTF-8" />
<!--<link href="img/icona.ico" rel="shortcut icon" />-->
<link href="css/style.css" rel="stylesheet" />
<!-- <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> -->
 <script type="text/javascript" src="js/site.js"></script> 
 
 <!-- karusel menu -->
 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
 <script type="text/javascript" src="js/jquery.jcarousellite.js"></script>
 <!-- Optional -->
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
 
 <script type="text/javascript" src="js/jssor.js"></script>
 <script type="text/javascript" src="js/jssor.slider.js"></script>
 
 <script>
 $(function() {
    $(".carousel").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
       

});
 </script>
 <script type="text/javascript" src="js/slider.js"></script>
</head>
<body>
<div id="root">

<div id="top">
    <a href="?state=main">
	<div id="logo">
	&nbsp;
	</div>
	</a>
	<div id="search">
		<div id="search_left">
		&nbsp;
		</div>
		<div id="search_middle">
			<div id="topline"></div>
			<input type="text" name="searchtext" id="searchtext" placeholder="Nəyi bilmək istəyirsiniz?" value="" /> 
			<div id="bottomline"></div>
		</div>
		<div id="search_right">
		
		</div>
	</div>
</div>  <!-- top div end -->


    <a href="#" class="prev">&lsaquo;</a>
    <div class="carousel">
        <ul>
        <li><a href="?state=cat&cat_name=ap"><div class="in_li"><img src="img/aile_psixologiya_icon.png"><div><span>Ailə və Psixologiya</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=bi"><div class="in_li"><img src="img/biznes_iqtisadiyyat_icon.png"><div><span>Biznes, İqtisadiyyat</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=tl"><div class="in_li"><img src="img/tehsil_icon.png"><div><span>Təhsil</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=al"><div class="in_li"><img src="img/avtomobil_icon.png"><div><span>Avtomobil</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=sq"><div class="in_li"><img src="img/saglamliq_icon.png"><div><span>Sağlamlıq</span></div></div></a></li>
		<li><a href="?state=cat&cat_name=tn"><div class="in_li"><img src="img/toy_nishan_icon.png"><div><span>Toy və Nişan</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=ka"><div class="in_li"><img src="img/kulinariya_icon.png"><div><span>Kulinariya</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=hq"><div class="in_li"><img src="img/huquq_icon.png"><div><span>Hüquq</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=it"><div class="in_li"><img src="img/it_icon.png"><div><span>İT</span></div></div></a></li>
        <li><a href="?state=cat&cat_name=dn"><div class="in_li"><img src="img/din_icon.png"><div><span>Din</span></div></div></a></li>
        </ul>
    </div>
    <a href="#" class="next">&rsaquo;</a>
    <div class="clear"></div>



<?php
switch ($state) 
{
	case 'main': {
		
			include('karusel.php');
			include('news_populyar.php');
			include('ekspertler.php');
			include('main_categories.php');
			break;
			}
			
    case 'cat': {
		
			include_get_params('opened_video.php?cat='.$cat_name.'&vid='.$vid);
			//include('opened_video.php');
			break;
			
			}
			
	default:	{
		
			include('karusel.php');
			include('news_populyar.php');
			include('ekspertler.php');
			include('main_categories.php');
			break;
			}	
	
}


?>










<!--

<div id="bottom">
&copy; Copyright&nbsp;2012-2015&nbsp; ExpertTV
</div>

-->

</div> <!-- root div end -->
</body>
</html>