<div id="karusel">

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->  
    <div id="slider1_container" style="position: relative; width: 1000px;
        height: 350px; overflow: hidden;">
 
        <!-- Loading Screen --> 
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
            </div> 
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
            </div> 
        </div> 
 
        <!-- Slides Container --> 
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1000px; height: 350px;
            overflow: hidden;">
			
		<?php
		
		require "connect.php";

		$query = 'SELECT `id`, `ad`, `sira_id`, `shekil`, `comment1`, `comment2`, `comment3`, `videolink` FROM `manshet` WHERE `active`=0 ORDER BY `sira_id` ASC LIMIT 0 , 10';

		//echo $query;

		$result = $mysqli->query($query);
									
									if (mysqli_num_rows($result)>0)
									{
									    $rows=array();
										while($row = $result->fetch_array())
										{
										$rows[] = $row;
										}
							           
										foreach($rows as $row)
										{
											$id = $row[0];
											$ad  = $row[1];
											$sira_id = $row[2];
											$shekil = $row[3];
											$comment1 = $row[4];
											$comment2 = $row[5];
											$comment3 = $row[6];
											$videolink = $row[7];
											
											//status=0,
												
											echo '<div>
													<img u="image" src="img/home/'.$shekil.'" />
													<a class="captionOrange" href="index.php?state=cat&vid='.$videolink.'" style="position: absolute; top: 270px; right: 30px; padding-left:10px; padding-right:10px; ">Videoya bax</a>
													<div u="caption" t="CLIP|LR" du="1500" class="captionblue"  style="position:absolute; left:20px; top: 30px; height:30px; width:500px;"> 
													'.$comment1.'
													</div>
													
													<div u="caption" t="FADE" t2="B" d=-450 class="captionBlack" style="position: absolute; left:700px;top:100px;width:200px;height:90px;">
															'.$comment2.'
													</div>
													
													<div u="caption" t="CLIP|LR" t2="B" du="2000" class="captionblue2"  style="position:absolute; left:20px; top: 220px;  height:30px; width:500px;"> 
													'.$comment3.' 
													</div>

												</div>';
										
										}
									}   

		?>

			
           

            <!-- Example to add fixed static share buttons in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- Share Button Styles -->
            <style>
                .share-icon {
                    display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(img/share/share-icons.png);
                }

                .share-facebook {
                    background-position: 0px 0px;
                }

                    .share-facebook:hover {
                        background-position: 0px -40px;
                    }

        .share-twitter {
            background-position: -40px 0px;
        }

            .share-twitter:hover {
                background-position: -40px -40px;
            }

        .share-pinterest {
            background-position: -80px 0px;
        }

            .share-pinterest:hover {
                background-position: -80px -40px;
            }

                .share-linkedin {
                    background-position: -240px 0px;
                }

                    .share-linkedin:hover {
                        background-position: -240px -40px;
                    }


                .share-googleplus {
                    background-position: -120px 0px;
                }

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


        .share-stumbleupon {
            background-position: -360px 0px;
        }

            .share-stumbleupon:hover {
                background-position: -360px -40px;
            }

                .share-email {
                    background-position: -320px 0px;
                }

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

			<!--
            <div u="any" style="position: absolute; display: block; top: 6px; right: 16px; width: 280px; height: 40px; z-index: 10;">

                <a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://eksperttv.az title="Share on Facebook"></a>
                <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://eksperttv.az&text=JavaScript%20Eksperttv.az" title="Share on Twitter"></a>
                <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://eksperttv.az" title="Share on Google Plus"></a>
                <a class="share-icon share-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://eksperttv.az" title="Share on LinkedIn"></a>
                <a class="share-icon share-stumbleupon" target="_blank" href="http://www.stumbleupon.com/submit?url=eksperttv.az&title=JavaScript%20eksperttv.az" title="Share on StumbleUpon"></a>
                <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://eksperttv.az&media=http://eksperttv.az&description=JavaScript%20eksperttv.az" title="Share on Pinterst"></a>
                <a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20JavaScript%20eksperttv.az%20http://eksperttv.az" title="Share by Email"></a>
            </div>
            -->
           
        </div> 
 
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(img/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 20 css */
            /*
            .jssora20l                  (normal)
            .jssora20r                  (normal)
            .jssora20l:hover            (normal mouseover)
            .jssora20r:hover            (normal mouseover)
            .jssora20l.jssora20ldn      (mousedown)
            .jssora20r.jssora20rdn      (mousedown)
            */
            .jssora20l, .jssora20r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(img/a20.png) no-repeat;
                overflow: hidden;
            }
            .jssora20l { background-position: -3px -33px; }
            .jssora20r { background-position: -63px -33px; }
            .jssora20l:hover { background-position: -123px -33px; }
            .jssora20r:hover { background-position: -183px -33px; }
            .jssora20l.jssora20ldn { background-position: -243px -33px; }
            .jssora20r.jssora20rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://eksperttv.az">Bootstrap Slider</a>
    </div> 
    <!-- Jssor Slider End -->

&nbsp;
</div>

<div class="hor_line">
&nbsp;
</div>