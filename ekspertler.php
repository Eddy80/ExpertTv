<div id="eksperts">
	<div id="eksperts_title">
		Ekspertlər
	</div>
	<div id="eksperts_list">

		<?php
		/*
		if (isset( $_POST['param']))
		$param = $_POST['param'];

		if (isset( $_POST['id']))
		$id = $_POST['id'];
		*/
		require "connect.php";

		$query = 'SELECT `id`, `ad`, `soyad`, `ixtisas`, `photo` FROM `ekspertler` ORDER BY `id` DESC LIMIT 0 , 6';

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
											$soyad = $row[2];
											$ixtisas = $row[3];
											$photo = $row[4];
											
											//status=0,
												
											echo '<a href="javascript:poptastic(\'ekspert.php?id='.$id.'\');">';
												
												echo   '<div class="eksperts_list_item">
															<div  class="eksperts_list_item_image">
																<img src="img/eksperts/'.$photo.'"  width="130" height="105"/>
															</div>
															<div  class="eksperts_list_item_name">'.
																$ad.' '.$soyad.' 
															</div>
															<div  class="eksperts_list_item_speciality">'.
																$ixtisas
															.'</div>
														</div>';	
												
											echo '</a>';
										
										}
									}   

		?>

	</div>
</div>