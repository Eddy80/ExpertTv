<div id="news_popular">
	<div id="news">
		<div id="news_title">
		Yeni Mövzular
		</div>
		<div id="news_list">
		<?php	
		require "connect.php";

		$query = 'SELECT `id`, `ad`, `shekil`, `ekspert_id`, `create_date` FROM `movzular` ORDER BY `id` DESC LIMIT 0 , 2';

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
											$shekil = $row[2];
											$ekspert_id = $row[3];
											$date = $row[4];
											
											$query2 = 'SELECT `id`, `ad`, `soyad` FROM `ekspertler` WHERE id='.$ekspert_id;

											//echo $query2;

												$result2 = $mysqli->query($query2);
												if (mysqli_num_rows($result2)>0)
													{
													$row2 = $result2->fetch_array();
													$ekspert_id = $row2[0];
													$ekspert_ad  = $row2[1];
													$ekspert_soyad = $row2[2];
													
												
													echo'<div class="news_item">
															<div class="news_item_top">
																<div class="news_item_top_video">
																<img src="img/movzu/snapshots/'.$shekil.'" />
																</div>
																<div class="news_item_top_title">'.
																$ad
																.'</div>
																<div class="news_item_top_questioncount">
																<img src="img/play_button_mini.png" />
																<span>8 sual</span>
																</div>
																<div class="news_item_top_author">
																<img src="img/author_ciluet.png" />
																<span>'.$ekspert_ad.' '.$ekspert_soyad.'</span>
																</div>
															</div>
															<div class="news_item_bottom_colored_line">
															</div>
														</div>';		
													}
										}
									}   


											
											
									

		?>

		</div>
	</div>
	<div id="popular">
		<div id="popular_title">
		Gün / Həftə / Ay ərzində populyar
		</div>
		<div id="popular_list">
			
		<?php	
			$query = 'SELECT `id`, `ad`, `shekil` FROM `videolar` ORDER BY `izlenme_sayi` DESC LIMIT 0 , 5';

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
											$shekil = $row[2];
											
											
											
											echo'<div class="popular_list_item">
													<div  class="popular_list_item_image">
													<img src="img/video/snapshots/'.$shekil.'" />
													</div>
													<div  class="popular_list_item_text">'.
													$ad
													.'</div>
												</div>';		
													
										}
									}   
		?>
		</div>
	</div>
</div>