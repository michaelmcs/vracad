<table style="width:100%;float:left">
							<thead>
							  <tr>
								<th class="first">Tiempo</th>
								<th>L</th>
								<th>M</th>
								<th>M</th>
								<th>J</th>
								<th>V</th>
							  </tr>
							</thead>
							
		<?php
				
				$query=mysqli_query($con,"select * from time where days like '%mwfjv%' order by time_start")or die(mysqli_error());
					
				while($row=mysqli_fetch_array($query)){
						$id=$row['time_id'];
						$start=date("h:i a",strtotime($row['time_start']));
						$end=date("h:i a",strtotime($row['time_end']));
		?>
							  <tr >
								<td class="first"><?php echo $start."-".$end;?></td>
								<td><?php 
								if ($member<>"")
								{
									$query1=mysqli_query($con,"select * from schedule natural join member NATURAL JOIN  subject where day='m' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
			
								}

								// select * from schedule natural join member where day='m' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'
								
						
								elseif ($room<>"")
								{
									$query1=mysqli_query($con,"select * from schedule natural join member   NATURAL JOIN  subject where day='m' and schedule.room='$room' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($class<>"")
								{
									$query1=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where  day='m' and schedule.cys='$class' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
										$row1=mysqli_fetch_array($query1);
										$id1=$row1['sched_id'];
										$count=mysqli_num_rows($query1);
										$encode=$row1['encoded_by'];
										$mid=$_SESSION['id'];
										$prog=$_SESSION['id'];
										if ($row1['remarks']<>" ")
											$displayrm= "<li>$row1[remarks]</li>";
										if($mid==$encode or $prog = 44)
										{
											$options="";
										}
										else
											$options="none";
										if ($count==0)
										{
											//echo "<td></td>";
										}
										else
										{
											
											echo "<div class='show'>";	
											echo "<ul>
														<li class='options' style='display:$options'>
															<span style='float:left;'><a href='sched_edit.php?id=$id1' class='edit' title='Editar'>Editar</a></span>
																<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>borrar</a></span>
														</li>";

											echo "<li class='showme'>";	
											echo "<li class='$displayc'>CURSO: $row1[subject_title]</li>";	
											echo "<li class='$displayp'>Programa: $row1[prog_title]</li>";	
											// echo $row1['subject_code'];
											echo "</li>";
											echo "<li class='$displaym'>$row1[member_last], $row1[member_first]</li>";	
											echo "<li class='$displayc'>Salon: $row1[room], Semestre: $row1[cys] Grupo: $row1[sec] </li>";										
											// echo "<li class='$displayr'>SALON: $row1[room], SECCION $row1[sec]</li>";
											echo $displayrm;
											echo "</ul>";
										}	
									?>
								</td>
								<td><?php 
									if ($member<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='w' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($room<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='w' and schedule.room='$room' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($class<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='w' and schedule.cys='$class' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								
										$row1=mysqli_fetch_array($query2);
										$count=mysqli_num_rows($query2);
										$id1=$row1['sched_id'];
										//$count=mysqli_num_rows($query1);
										$encode=$row1['encoded_by'];
										$mid=$_SESSION['id'];
										
										if ($row1['remarks']<>"")
											$displayrm= "<li>$row1[remarks]</li>";
											
										
										if($mid==$encode or $prog==44 )
										{
											$options="";
										}
										else
											$options="none";
										if ($count==0 or $prog==44 )
										{
											//echo "<td></td>";
										}
										else
										{
											
											echo "<div class='show'>";	
											echo "<ul>

														

														<li class='options' style='display:$options'>
															<span style='float:left;'><a href='sched_edit.php?id=$id1' class='edit' title='Edit'>Editar</a></span>
																<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>Borrar</a></span>
														</li>";

											echo "<li class='showme'>";
											echo "<li class='$displayc'>CURSO: $row1[subject_title]</li>";			
											// echo $row1['subject_code'];
											echo "</li>";

											

											echo "<li class='$displayc' >CICLO: $row1[cys]</li>";
											echo "<li class='$displaym'>$row1[member_last], $row1[member_first]</li>";											
											echo "<li class='$displayr'>SALON: $row1[room], SECCION $row1[sec]</li>";
											echo "<li class='$displayr'>Designacion: $row1[room], SECCION $row1[sec]</li>";

											echo $displayrm;
											echo "</ul>";
										}	
									?>
								</td>
								<td><?php 
								if ($member<>"")
								{
									$query3=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='f' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($room<>"")
								{
									$query3=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='f' and schedule.room='$room' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($class<>"")
								{
									$query3=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='f' and schedule.cys='$class' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
										$row1=mysqli_fetch_array($query3);
										$count=mysqli_num_rows($query3);
										$id1=$row1['sched_id'];
										//$count=mysqli_num_rows($query1);
										$encode=$row1['encoded_by'];
										$mid=$_SESSION['id'];
										if ($row1['remarks']<>"")
											$displayrm= "<li>$row1[remarks]</li>";
											
										else
											$displayrm="";
										if($mid==$encode)
										{
											$options="";
										}
										else
											$options="none";
										if ($count==0)
										{
											//echo "<td></td>";
										}
										else
										{
											
											echo "<div class='show'>";	
											echo "<ul>
														<li class='options' style='display:$options'>
															<span style='float:left;'><a href='sched_edit.php?id=$id1' class='edit' title='Editar'>Edit</a></span>
																<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>Borrar</a></span>
														</li>";

											echo "<li class='showme'>";		
											echo "<li class='$displayc'>CURSO: $row1[subject_title]</li>";			
											// echo $row1['subject_code'];
											echo "</li>";

											echo "<li class='$displayc'>CICLO: $row1[cys]</li>";
											echo "<li class='$displaym'>$row1[member_last], $row1[member_first]</li>";											
											echo "<li class='$displayr'>SALON: $row1[room], SECCION $row1[sec]</li>";
											echo $displayrm;
											echo "</ul>";
										}	
									?>
								</td>
								
							  <td><?php 
									if ($member<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='j' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($room<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='j' and schedule.room='$room' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($class<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='j' and schedule.cys='$class' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								
										$row1=mysqli_fetch_array($query2);
										$count=mysqli_num_rows($query2);
										$id1=$row1['sched_id'];
										//$count=mysqli_num_rows($query1);
										$encode=$row1['encoded_by'];
										$mid=$_SESSION['id'];
										if ($row1['remarks']<>"")
											$displayrm= "<li>$row1[remarks]</li>";
											
										
										if($mid==$encode)
										{
											$options="";
										}
										else
											$options="none";
										if ($count==0)
										{
											//echo "<td></td>";
										}
										else
										{
											
											echo "<div class='show'>";	
											echo "<ul>
														<li class='options' style='display:$options'>
															<span style='float:left;'><a href='sched_edit.php?id=$id1' class='edit' title='Editar'>Edit</a></span>
																<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>Borrar</a></span>
														</li>";

											echo "<li class='showme'>";		
											echo "<li class='$displayc'>CURSO: $row1[subject_title]</li>";			
											// echo $row1['subject_code'];
											echo "</li>";

											echo "<li class='$displayc'>CICLO: $row1[cys]</li>";
											echo "<li class='$displaym'>$row1[member_last], $row1[member_first]</li>";											
											echo "<li class='$displayr'>SALON: $row1[room], SECCION $row1[sec]</li>";
											echo $displayrm;
											echo "</ul>";
										}	
									?>
								</td>  
								<td><?php 
									if ($member<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='v' and schedule.member_id='$member' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($room<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='v' and schedule.room='$room' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								elseif ($class<>"")
								{
									$query2=mysqli_query($con,"select * from schedule natural join member  NATURAL JOIN  subject where day='v' and schedule.cys='$class' and time_id='$id' and settings_id='$sid'")or die(mysqli_error($con));
								}
								
										$row1=mysqli_fetch_array($query2);
										$count=mysqli_num_rows($query2);
										$id1=$row1['sched_id'];
										//$count=mysqli_num_rows($query1);
										$encode=$row1['encoded_by'];
										$mid=$_SESSION['id'];
										if ($row1['remarks']<>"")
											$displayrm= "<li>$row1[remarks]</li>";
											
										
										if($mid==$encode)
										{
											$options="";
										}
										else
											$options="none";
										if ($count==0)
										{
											//echo "<td></td>";
										}
										else
										{
											
											echo "<div class='show'>";	
											echo "<ul>
														<li class='options' style='display:$options'>
															<span style='float:left;'><a href='sched_edit.php?id=$id1' class='edit' title='Edit'>Editar</a></span>
																<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>Borrar</a></span>
														</li>";

											echo "<li class='showme'>";		
											echo "<li class='$displayc'>CURSO: $row1[subject_title]</li>";			
											// echo $row1['subject_code'];
											echo "</li>";

											echo "<li class='$displayc'>CICLO: $row1[cys]</li>";
											echo "<li class='$displaym'>$row1[member_last], $row1[member_first]</li>";											
											echo "<li class='$displayr'>SALON: $row1[room], SECCION $row1[sec]</li>";
											echo $displayrm;
											echo "</ul>";
										}	
									?>
								</td>
							
		<?php }?>					  
		</table>    

			<table style="width:45%;float:right">
					
								
			<?php
					
					$query=mysqli_query($con,"select * from time where days='tth' order by time_start")or die(mysqli_error());
						
					while($row=mysqli_fetch_array($query)){
							$id=$row['time_id'];
							$start=date("h:i a",strtotime($row['time_start']));
							$end=date("h:i a",strtotime($row['time_end']));
			?>
								
								
			<?php }?>					  
			</table> 