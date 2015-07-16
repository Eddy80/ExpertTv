<?php

   $mysqli = new mysqli("localhost", "root", "", "expertdb");							
							if (!mysqli_set_charset($mysqli, "utf8")) {
							printf("Error loading character set utf8: %s\n", mysqli_error($mysqli));
							} else {
							}
							
                          
                            if (mysqli_connect_errno()) {
                                printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
							}


?>
