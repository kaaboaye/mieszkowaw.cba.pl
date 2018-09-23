</br></br><table width="100%">
	<tr width="90%">
		<td width="50%"><center>
			Skala %</br></br>
			
				<?php
				
						if ($_POST[sma] == 0)
							if ($_POST[s1] == 0)
								if ($_POST[s2] == 0)
									if ($_POST[s3] == 0)
										if ($_POST[s4] == 0)
											if ($_POST[s5] == 0)
												if ($_POST[s6] == 0)
														$stest="start";
						
			/*			if ($s1 > s2) $sserror="true";
						if ($s2 > s3) $sserror="true";
						if ($s3 > s4) $sserror="true";
						if ($s4 > s5) $sserror="true";
						if ($s5 > s6) $sserror="true";
							
							if ($sserror == "true") $serror="Skala procentowa jest niepoprawnie wpisana!";
			*/			
						
						if(isset($_COOKIE[sma]))
								{
									if (empty($_POST[sma]))
											{
												$sma=$_COOKIE[sma];
											}
										else
											{
												if ($stest == "start")
														{
															$sma=$_COOKIE[sma];
														}
													else
														{
															if ($_POST[sma] == $_COOKIE[sma])
																	{
																		$sma=$_COOKIE[sma];
																	}
																else
																	{
																		$sma=$_POST[sma];
																	}
														}
											}
									setcookie ("sma", time()-3*60*60*24*30);
									$scma=$_POST[sma];
									setcookie ("sma", "$scma",time()+3*60*60*24*30);
								}
							else
								{
									$sma=$_POST[sma];
									setcookie ("sma", "$sma",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s1]))
								{
									if (empty($_POST[s1]))
											{
												$s1=$_COOKIE[s1];
											}
										else
											{
												if ($stest == "start")
														{
															$s1=$_COOKIE[s1];
														}
													else
														{
															if ($_POST[s1] == $_COOKIE[s1])
																	{
																		$s1=$_COOKIE[s1];
																	}
																else
																	{
																		$s1=$_POST[s1];
																	}
														}
											}
									setcookie ("s1", time()-3*60*60*24*30);
									$sc1=$_POST[s1];
									setcookie ("s1", "$sc1",time()+3*60*60*24*30);
								}
							else
								{
									$s1=$_POST[s1];
									setcookie ("s1", "$s1",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s2]))
								{
								if (empty($_POST[s2]))
											{
												$s2=$_COOKIE[s2];
											}
										else
											{
												if ($stest == "start")
														{
															$s2=$_COOKIE[s2];
														}
													else
														{
															if ($_POST[s2] == $_COOKIE[s2])
																	{
																		$s2=$_COOKIE[s2];
																	}
																else
																	{
																		$s2=$_POST[s2];
																	}
														}
											}
								setcookie ("s2", time()-3*60*60*24*30);
								$sc2=$_POST[s2];
								setcookie ("s2", "$sc2",time()+3*60*60*24*30);
								}
							else
								{
									$s2=$_POST[s2];
									setcookie ("s2", "$s2",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s3]))
								{
									if (empty($_POST[s3]))
											{
												$s3=$_COOKIE[s3];
											}
										else
											{
												if ($stest == "start")
														{
															$s3=$_COOKIE[s3];
														}
													else
														{
															if ($_POST[s3] == $_COOKIE[s3])
																	{
																		$s3=$_COOKIE[s3];
																	}
																else
																	{
																		$s3=$_POST[s3];
																	}
														}
											}
									setcookie ("s3", time()-3*60*60*24*30);
									$sc3=$_POST[s3];
									setcookie ("s3", "$sc3",time()+3*60*60*24*30);
								}
							else
								{
									$s3=$_POST[s3];
									setcookie ("s3", "$s3",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s4]))
								{
									if (empty($_POST[s4]))
											{
												$s4=$_COOKIE[s4];
											}
										else
											{
												if ($stest == "start")
														{
															$s4=$_COOKIE[s4];
														}
													else
														{
															if ($_POST[s4] == $_COOKIE[s4])
																	{
																		$s4=$_COOKIE[s4];
																	}
																else
																	{
																		$s4=$_POST[s4];
																	}
														}
											}
									setcookie ("s4", time()-3*60*60*24*30);
									$sc4=$_POST[s4];
									setcookie ("s4", "$sc4",time()+3*60*60*24*30);
								}
							else
								{
									$s4=$_POST[s4];
									setcookie ("s4", "$s4",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s5]))
								{
									if (empty($_POST[s5]))
											{
												$s5=$_COOKIE[s5];
											}
										else
											{
												if ($stest == "start")
														{
															$s5=$_COOKIE[s5];
														}
													else
														{
															if ($_POST[s5] == $_COOKIE[s5])
																	{
																		$s5=$_COOKIE[s5];
																	}
																else
																	{
																		$s5=$_POST[s5];
																	}
														}
											}
									setcookie ("s5", time()-3*60*60*24*30);
									$sc5=$_POST[s5];
									setcookie ("s5", "$sc5",time()+3*60*60*24*30);
								}
							else
								{
									$s5=$_POST[s5];
									setcookie ("s5", "$s5",time()+3*60*60*24*30);
								}
						if(isset($_COOKIE[s6]))
								{
								if (empty($_POST[s6]))
										{
											$s6=$_COOKIE[s6];
										}
									else
										{
											if ($stest == "start")
														{
															$s6=$_COOKIE[s6];
														}
													else
														{
															if ($_POST[s6] == $_COOKIE[s6])
																	{
																		$s6=$_COOKIE[s6];
																	}
																else
																	{
																		$s6=$_POST[s6];
																	}
														}
										}
								setcookie ("s6", time()-3*60*60*24*30);
								$sc6=$_POST[s6];
								setcookie ("s6", "$sc6",time()+3*60*60*24*30);
								}
							else
								{
									$s6=$_POST[s6];
									setcookie ("s6", "$s6",time()+3*60*60*24*30);
								}	
				
					echo "<form method='post'>";
					
					
					echo "Maksymalna liczba punktów: ";
					echo "<input name='sma' value='$sma' style='width:40px'></br>";
					
					echo "1: ";
					echo "<input name='s1' value='$s1' style='width:22px'>%</br>";
					
					echo "2: ";
					echo "<input name='s2' value='$s2'style='width:22px'>%</br>";
					
					echo "3: ";
					echo "<input name='s3' value='$s3'style='width:22px'>%</br>";
					
					echo "4: ";
					echo "<input name='s4' value='$s4'style='width:22px'>%</br>";
					
					echo "5: ";
					echo "<input name='s5' value='$s5'style='width:22px'>%</br>";
					
					echo "6: ";
					echo "<input name='s6' value='$s6'style='width:22px'>%</br>";
					
					echo '</br></br><input type="submit" value="Oblicz">';
					
					echo "</form>";
					
				?>
		</center></td>
		<td width="50%"><center>
			Podgląd</br></br>
				<?php
				
							$sw1=$s1/100*$sma;
							$sw2=$s2/100*$sma;
							$sw3=$s3/100*$sma;
							$sw4=$s4/100*$sma;
							$sw5=$s5/100*$sma;
							$sw6=$s6/100*$sma;
							
				
						echo "Maksymalna liczba punktów: <strong>$sma</strong> </br>";
						echo "1: od <strong>$sw1</strong> punktów</br>";
						echo "2: od <strong>$sw2</strong> punktów</br>";
						echo "3: od <strong>$sw3</strong> punktów</br>";
						echo "4: od <strong>$sw4</strong> punktów</br>";
						echo "5: od <strong>$sw5</strong> punktów</br>";
						echo "6: od <strong>$sw6</strong> punktów</br>";
						
				?>
		</center></td>
	</tr>
</table>
	<span id="textex" style="font-color: red"><?php echo "$serror"; ?></span>