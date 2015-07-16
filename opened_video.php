<?php
if (isset($_GET['cat_name']))
$cat_name = $_GET['cat_name'];
else
$cat_name = 'ap';

if (isset($_GET['vid']))
$vid = $_GET['vid'];
else
$vid = 0;

 $ekspert_idd=''; $izahh='';	
?>

<div id="main_opened_video">
	
	<div id="opened_video_author_related_topics">
	<div id="opened_video">
	<?php
		require "connect.php";
		$query = 'SELECT `id`, `m_id`, `cat_id`, `cat_level`, `ad`, `shekil`, `izah`, `ekspert_id`, `izlenme_sayi`, `faydalanma_sayi`, `description`, `video_link` FROM `videolar` WHERE id='.$vid;

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
											$m_id  = $row[1];
											$cat_id = $row[2];
											$cat_level = $row[3];
											$ad = $row[4];
											$shekil = $row[5];
											$izah  = $row[6];
											$ekspert_id = $row[7];
											$izlenme_sayi = $row[8];
											$faydalanma_sayi = $row[9];
											$description = $row[10];
											$video_link = $row[11];
											
											$ekspert_idd = $ekspert_id;
											$izahh = $izah;
												
											echo   '
															<div id="opened_video_title">';
															
															$query2 = 'SELECT `ad` FROM `kateqoriyalar` WHERE id='.$cat_id;
															//echo $query2;
																$result2 = $mysqli->query($query2);
																if (mysqli_num_rows($result2)>0)
																	{
																	$row2 = $result2->fetch_array();
																	$cat_ad  = $row2[0];
																	echo $cat_ad;		
																	}
															
															echo '/';
														
														    $query3 = 'SELECT `ad` FROM `movzular` WHERE id='.$m_id;
															//echo $query3;
																$result3 = $mysqli->query($query3);
																if (mysqli_num_rows($result3)>0)
																	{
																	$row3 = $result3->fetch_array();
																	$movzu_ad  = $row3[0];
																	echo $movzu_ad;		
																	}
														 
														    echo '<br>';
															echo $ad ;
															echo '</div>
															<div id="playing_video">';
															?>														
															<object type="application/x-shockwave-flash" data="player_flv_maxi.swf" width="590" height="400">
																 <param name="movie" value="player_flv_maxi.swf" />
																 <param name="FlashVars" value="flv=upl_vid/<?php echo $video_link;?>&amp;title=<?php echo $ad ; ?>&amp;playercolor=58707b&amp;bgcolor2=58707b&amp;bgcolor1=A1B7C2&amp;autoplay=1&amp;buffer=5&amp;buffermessage=Yüklənir_n_&amp;loadingcolor=ffff00&amp;showstop=1&amp;showvolume=1&amp;showtime=1&amp;" />
															</object>
															<?php
															echo '<br>
															
															<span>Əlaqəli kod</span>
															<textarea><object type="application/x-shockwave-flash" data="player_flv_maxi.swf" width="590" height="400"><param name="movie" value="player_flv_maxi.swf" /><param name="FlashVars" value="flv=upl_vid/'.$video_link.'&amp;title='.$ad.'&amp;playercolor=58707b&amp;bgcolor2=58707b&amp;bgcolor1=A1B7C2&amp;autoplay=1&amp;buffer=5&amp;buffermessage=Yüklənir_n_&amp;loadingcolor=ffff00&amp;showstop=1&amp;showvolume=1&amp;showtime=1&amp;" /></object></textarea>
															</div>
												   
													';
										
										}
									}   

		?>
	<!--
		<div id="opened_video">
			<div id="opened_video_title">
			Sağlamlıq / Göz agrısı <br>
			Göz agrısı nədir?
			</div>
			<div id="playing_video">
			<!--
			<object type="application/x-shockwave-flash" data="http://eksperttv.az/player.swf" width="520px" height="430px" bgcolor="#000000" id="mediaspace" name=
"mediaspace" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Feksperttv.az%2Fvideo.asp%3Fpid%3D58%26id%3D375&id=mediaspace&file=/kanallar/huquq/mek_muraci_qaydasi/mek_muraci_qaydasi_1.flv&skin=http://eksperttv.az/skewd.zip&plugins=adtvideo-h&adtvideo.config=video_reklam.asp%3Fkat%3D16&adtvideo.pluginmode=FLASH&controlbar.position=bottom"></object>-->


		
<!-- ISHLEYEN FLV -->
<!--		
<object type="application/x-shockwave-flash" data="player_flv_maxi.swf" width="590" height="400">
				 <param name="movie" value="player_flv_maxi.swf" />
				 <param name="FlashVars" value="flv=spiderman.mp4&amp;title=Mənim videom&amp;playercolor=58707b&amp;bgcolor2=58707b&amp;bgcolor1=A1B7C2&amp;autoplay=1&amp;buffer=5&amp;buffermessage=Yüklənir_n_&amp;loadingcolor=ffff00&amp;showstop=1&amp;showvolume=1&amp;showtime=1&amp;" />
			</object>
			<br>
			<span>Əlaqəli kod</span>
			</div>
<!-- ISHLEYEN FLV END-->

			
<!--			<object id="f4Player" width="480" height="270" type="application/x-shockwave-flash" data="player.swf?v1.3.5">
  <param name="movie" value="player.swf?v1.3.5" />
  <param name="quality" value="high" />
  <param name="menu" value="false" />
  <param name="scale" value="noscale" />
  <param name="allowfullscreen" value="true">
  <param name="allowscriptaccess" value="always">
  <param name="swlivevonnect" value="true" />
  <param name="cachebusting" value="false">
  <param name="flashvars"   value="skin=[SKIN_FILE]&video=[VIDEO_FILE]"/>
  <a href="http://www.adobe.com/go/flashplayer/">Download it from Adobe.</a>
  <a href="http://gokercebeci.com/dev/f4player" title="flv player">flv player</a>
</object>  -->
	<!--<embed width="100%" height="100%" name="plugin" src="http://d.uzmimg.com/assets/web/1.0.1/uplayer/Player.swf?id=0.8465365362338729" type="application/x-shockwave-flash">    -->    
			
		</div>
		<div id="related_topics">
		    
		<?php
		$query = 'SELECT `id`, `ad`, `soyad`, `ixtisas`, `photo` FROM `ekspertler` WHERE id='.$ekspert_idd;

		//echo $query;
        
		$result = $mysqli->query($query);
									
									if (mysqli_num_rows($result)>0)
									{
									    $rows=array();
										if (mysqli_num_rows($result2)>0)
										{
										$row = $result->fetch_array();
											$id = $row[0];
											$ad  = $row[1];
											$soyad = $row[2];
											$ixtisas = $row[3];
											$shekil = $row[4];
											
											echo   '<div id="related_topics_title">
														<div id="related_topics_title_image">
															<img src="img/eksperts/'.$shekil.'" />
														</div>
														'.$ixtisas.' <br><span> '.$ad.' '.$soyad.' </span>
													</div>';
										}
									}
            ?>									
			<div id="related_topics_list">
			
			<?php
			$query = 'SELECT `id`, `ad`  FROM `videolar` WHERE ekspert_id='.$ekspert_idd;

			//echo $query;
			
			$result = $mysqli->query($query);
									
									if (mysqli_num_rows($result)>0)
									{
									
										if (mysqli_num_rows($result)>1)
										{
										echo '<span>Digər videolar:<span> <br>
												<ul> ';	
										}
											
													$rows=array();
													while($row = $result->fetch_array())
													{
													$rows[] = $row;
													}
												   
													$counter=1;
													foreach($rows as $row)
													{
														$id = $row[0];
														$video_ad  = $row[1];
														
														if ($id != $vid)	
														echo   '<li>'.$counter.'. '.$video_ad.'</li>';
													$counter++;	
													}
										
										if (mysqli_num_rows($result)>1)
										{
										echo '</ul>';
										}									
									
									}	
			?>
				
			</div>
			
		</div>
	
	</div>
	<div id="opened_video_text_related_videos_div">
		<div id="opened_video_title_text">
			<div id="opened_video_title">
			Video mətni
			</div>
			<div id="opened_video_text">
			<?php echo $izahh; ?>
			</div>
	       
		</div>
		<div id="related_videos">
			<div id="related_videos_title">
				<span> Əlaqədar videolar: </span>
			</div>
			<div id="related_videos_list">
				
				<div id="related_videos_list_item">
					<div id="related_videos_list_item_image">
						<img src="img/video/related/1.png" />
					</div>
					<div id="related_videos_list_item_text">
					Göz sulanması
					</div>
					<div id="related_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div id="related_videos_list_item">
					<div id="related_videos_list_item_image">
						<img src="img/video/related/2.png" />
					</div>
					<div id="related_videos_list_item_text">
					Konyuktivit (Göz iltihabı)
					</div>
					<div id="related_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div id="related_videos_list_item">
					<div id="related_videos_list_item_image">
						<img src="img/video/related/5.png" />
					</div>
					<div id="related_videos_list_item_text">
					Katarakta
					</div>
					<div id="related_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div id="related_videos_list_item">
					<div id="related_videos_list_item_image">
						<img src="img/video/related/3.png" />
					</div>
					<div id="related_videos_list_item_text">
					Göz tənbəlliyi
					</div>
					<div id="related_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div id="related_videos_list_item">
					<div id="related_videos_list_item_image">
						<img src="img/video/related/4.png" />
					</div>
					<div id="related_videos_list_item_text">
					Zəif görmə
					</div>
					<div id="related_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
			</div>
			
		</div>
	
	</div>
	

	
	<div id="opened_video_comments_popular_videos">
		<div id="comments_div">
			<div id="comments_div_title">
			Şərhlər
			</div>
			<div id="comments_list">
			
			</div>
	       
		</div>
		<div id="popular_videos">
			<div id="popular_videos_title">
				<span> Gün / Həftə / Ay ərzində populyar: </span>
			</div>
			<div id="popular_videos_list">
				
				<div class="popular_videos_list_item">
					<div class="popular_videos_list_item_image">
						<img src="img/video/popular/1.png" />
					</div>
					<div class="popular_videos_list_item_text">
					Nələri sığortalamaq olar?
					<br>
					<span>Sığorta hüququ, Mübariz Yolçuyev</span>
					</div>
					<div class="popular_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div class="popular_videos_list_item">
					<div class="popular_videos_list_item_image">
						<img src="img/video/popular/2.png" />
					</div>
					<div class="popular_videos_list_item_text">
					Bel yırtığının əlamətləri nələrdir? 
					<br>
					<span>Neyrocərrah, Fərid Təqdirov</span>
					</div>
					<div class="popular_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div class="popular_videos_list_item">
					<div class="popular_videos_list_item_image">
						<img src="img/video/popular/5.png" />
					</div>
					<div class="popular_videos_list_item_text">
					Quş südü tortu necə hazırlanır?
					<br>
					<span>Şirniyyat ustası, Marina Cəfərova  </span>
					</div>
					<div class="popular_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div class="popular_videos_list_item">
					<div class="popular_videos_list_item_image">
						<img src="img/video/popular/3.png" />
					</div>
					<div class="popular_videos_list_item_text">
					Sazı necə öyrənmək olar?
					<br>
					<span>Solo saz ifaçısı, Musa Elxanoğlu</span>
					</div>
					<div class="popular_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
				<div class="popular_videos_list_item">
					<div class="popular_videos_list_item_image">
						<img src="img/videos/popular/4.png" />
					</div>
					<div class="popular_videos_list_item_text">
					Qurban nə üçün kəsilir?
					<br>
					<span>Dünyaşünas, Ziyad Həsənov</span>
					</div>
					<div class="popular_videos_list_item_play">
					&nbsp;
					</div>
				</div>
				
			</div>
	
	</div>
	
</div>
