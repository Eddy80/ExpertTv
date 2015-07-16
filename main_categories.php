<div id="main">


	<div id="kategory">
		
		<div id="kategory_list">
			
			
			<?php	
		require "connect.php";

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//Ailə və Psixologiya
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=1 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#6d60a3;">
																<img src="img/aile_psixologiya_icon_colored.png" />
																Ailə və Psixologiya
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/aile_psixologiya_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#6d60a3;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//Toy və Nişan
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=6 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#ef4423;">
																<img src="img/toy_nishan_icon_colored.png" />
																Toy və Nişan
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/toy_nishan_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#ef4423;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Biznes və İqtisadiyyat
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=2 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#df57a0;">
																<img src="img/biznes_iqtisadiyyat_icon_colored.png" />
																Biznes və İqtisadiyyat
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/biznes_iqtisadiyyat_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#df57a0;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Kulinariya
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=7 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#f37121;">
																<img src="img/kulinariya_icon_colored.png" />
																Kulinariya
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/kulinariya_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#f37121;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Təhsil
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=3 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#f26662;">
																<img src="img/tehsil_icon_colored.png" />
																Təhsil
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/tehsil_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#f26662;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
											
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Hüquq
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=8 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#660003;">
																<img src="img/huquq_icon_colored.png" />
																Hüquq
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/huquq_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#660003;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
																	
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Avtomobil
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=4 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#73af43;">
																<img src="img/avtomobil_icon_colored.png" />
																Avtomobil
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/avtomobil_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#73af43;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
									
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//İT
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=9 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#6588c5;">
																<img src="img/it_icon_colored.png" />
																İT
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/it_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#6588c5;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Sağlamlıq
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=5 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#034b79;">
																<img src="img/saglamliq_icon_colored.png" />
																Sağlamlıq
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/saglamliq_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#034b79;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   		
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////						
		//Din
		$query = 'SELECT `id`, `ad`, `shekil` FROM `movzular` WHERE id = ( SELECT `m_id` FROM `videolar` WHERE `cat_id`=10 AND `cat_level`=1 ORDER BY `id` DESC LIMIT 0 , 1)';
		//echo $query;
		$result = $mysqli->query($query);
									if (mysqli_num_rows($result)>0)
									{
										$rows=array();
										while($row = $result->fetch_array())
										{	$rows[] = $row;  }
										foreach($rows as $row)
										{
											$id = $row[0]; 	$ad  = $row[1];  	$shekil = $row[2];
											echo'		<div class="kategory_list_item">
															<div class="kategory_list_item_top">
																<div class="kategory_list_item_top_image_title" style="color:#00a651;">
																<img src="img/din_icon_colored.png" />
																Din
																</div>
																<div class="kategory_list_item_thumbnail">
																	<img src="img/din_icon_thumbnail_290_185.png" />	
																</div>
																<div class="kategory_item_text">'.
																$ad
																.'</div>
															</div>	
															<div  style="height:10px;width:303px;background-color:#00a651;">
															&nbsp;
															</div>
														</div>';		
													
										}
									}   
		
		?>			
		</div>
	</div>
	
	<div id="right_sosial">
		<div id="fb">
		<img src="img/fb.png"  /> 
		</div>
		<div id="banner">
		<img src="img/millibyte.png"  /> 
		</div>
	</div>


</div> <!-- main div end -->