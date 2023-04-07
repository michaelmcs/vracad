<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
error_reporting(0);
if($_POST)
{
include('../dist/includes/dbcon.php');

	$member = $_POST['teacher'];
	$subject = $_POST['subject'];
	$room = $_POST['room'];
	$cys = $_POST['cys'];
	$remarks = $_POST['remarks'];
	$m = $_POST['m'];
	$w = $_POST['w'];
	$f = $_POST['f'];
	$j = $_POST['j'];
	$v = $_POST['v'];
	$alum = $_POST['alum'];
	$hteo = $_POST['hteo'];
	$hprac = $_POST['hprac'];
	$th = $hteo + $hprac;
	$cr = $hteo + ($hprac/2);
	$grupo = $_POST['sec'];
	$designation = $_POST['designation']; 
					
	$set_id=$_SESSION['settings'];
	$program=$_SESSION['id'];
	$prog_code=$_SESSION['id'];

	//Lunes sched
	foreach ($m as $daym){ // Lunes a daym
		//check conflict for member docente y hoario restriccion
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where member_id='$member' and schedule.time_id='$daym' and day='m'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$member1=$row['member_last'].", ".$row['member_first'];
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>Lunes</td>
					<td>$time1</td> 
					<td>$member1</td> 

					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
				</span>
			</table>";

			//din docentes condicion 
		
	
		//inicio flitro numero de salon restriccion por salon
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where room='$room' and schedule.time_id='$daym' and schedule.sec ='$grupo' and day='m' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$roomr=$rowr['room'];
			//recctriccon solo por salon
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Lunes</td>
					<td>Salon $roomr</td>
					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
				</span>
			</table>";
		//finflitro numero de salon
			//check conflict for class

		//semestre	
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where cys='$cys' and schedule.time_id='$daym' and schedule.sec='$grupo' and day='m' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$cysc=$rowc['cys'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			// restriccion solo por semestre
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
			
					<td>Lunes</td>
					<td>$timec</td> 
					<td>Semestre $cysc </td>
					<td class='text-danger'><b>No valido</b>	</td>					
				</tr>
			</table></span>";	


           //solo por grupo
			$query_grupo=mysqli_query($con,"select *,COUNT(*) as count from schedule 
			natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'")or die(mysqli_error($con));
		
		// select *,COUNT(*) as count from schedule 
		// 		natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'
		$rowg=mysqli_fetch_array($query_grupo);
			$count_g=$rowg['count'];
			$gruposeg=$rowg['sec'];
			$prog_codeg=$rowg['prog_code'];
			$timeg=date("h:i a",strtotime($rowg['time_start']))."-".date("h:i a",strtotime($rowg['time_end']));
			$error_g="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Lunes</td>
					<td>$timeg</td> 
					<td>grupo $gruposeg</td>
					<td>>Existe Grupo en el Programa $prog_codeg</td>
					<td class='text-danger'><b>No valido</b></td>					
				</tr>
			</table></span>";	
		
		
				
		$queryt=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$membert=$rowt['member_last'].", ".$rowt['member_first'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0) and ($count_g==0) )
		{
			mysqli_query($con,"INSERT INTO schedule(time_id, day ,member_id,subject_code,cys,room,remarks,settings_id,encoded_by,alum,hteo,hprac,cr,th,sec,designation,prog_code) 
				VALUES('$daym','m','$member','$subject','$cys','$room','$remarks','$set_id','$program','$alum','$hteo','$hprac','$cr','$th','$grupo','$designation','$prog_code')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>Lunes</td>
					<td>$timet</td> 
					<td>Agregado exitoso</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
		
		//echo "</table>";
	}
	//------------------------------------------------

	//Martes
	foreach ($w as $daym){
		//check conflict for membe docente y horario restriccion
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where member_id='$member' and schedule.time_id='$daym' and day='w'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$member1=$row['member_last'].", ".$row['member_first'];
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>Martes</td>
					<td>$time1</td> 
					<td>$member1</td>
					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
				</span>
			</table>";
		
		//restriccio  salon
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where room='$room' and schedule.time_id='$daym'  and schedule.sec ='$grupo' and day='w' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
		
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$roomr=$rowr['room'];
			// <td>$timer</td>  
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Martes</td>
					<td>Salon $roomr</td>
					<td class='text-danger'><b>horario no valido</b></td>					
				</tr>
				</span>
			</table>";
			//check conflict for class

			//filtro por semestre
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where cys='$cys' and schedule.time_id='$daym'  and schedule.sec='$grupo' and day='w' AND prog_code = '$prog_code' ")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$cysc=$rowc['cys'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Martes</td>
					<td>$timec</td> 
					<td>Semestre $cysc</td>
					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
			</table></span>";	

	     //solo por grupo
		 $query_grupo=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		 natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='w' AND prog_code = '$prog_code'")or die(mysqli_error($con));
	 
	 // select *,COUNT(*) as count from schedule 
	 // 		natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'
	 $rowg=mysqli_fetch_array($query_grupo);
		 $count_g=$rowg['count'];
		 $gruposeg=$rowg['sec'];
		 $prog_codeg=$rowg['prog_code'];
		 $timeg=date("h:i a",strtotime($rowg['time_start']))."-".date("h:i a",strtotime($rowg['time_end']));
		 $error_g="<span class='text-danger'>
		 <table width='100%'>
			 <tr>
				 <td>Lunes</td>
				 <td>$timeg</td> 
				 <td>grupo $gruposeg</td>
				 <td>>Existe Grupo en el Programa $prog_codeg</td>
				 <td class='text-danger'><b>No valido</b></td>					
			 </tr>
		 </table></span>";	
	 

				
		$queryt=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$membert=$rowt['member_last'].", ".$rowt['member_first'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0) and ($count_g==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,member_id,subject_code,cys,room,remarks,settings_id,encoded_by,alum,hteo,hprac,cr,th,sec,designation,prog_code) 
				VALUES('$daym','w','$member','$subject','$cys','$room','$remarks','$set_id','$program','$alum','$hteo','$hprac','$cr','$th','$grupo','$designation','$prog_code')")or die(mysqli_error());
			
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>Martes</td>
					<td>$timet</td> 
	
					<td>Agregado Exitoso</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
		
		//echo "</table>";
	}
	
	//-------------------------------------------------------------
	//Miercoles sched
	foreach ($f as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where member_id='$member' and schedule.time_id='$daym' and day='f'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$member1=$row['member_last'].", ".$row['member_first'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>Miercoles</td>
					<td>Horario: $time1</td> 
					<td>Docente: $member1</td>
					<td class='text-danger'><b>Horario no Valido</b></td>					
				</tr>
				</span>
			</table>";
		
		//check conflict for salon
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where room='$room' and schedule.time_id='$daym'  and schedule.sec ='$grupo' and day='f' AND schedule.prog_code='$prog_code' ")or die(mysqli_error($con));

		$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$roomr=$rowr['room'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Miercoles</td>
					<td>Salon $roomr</td>
					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
				</span>
			</table>";
			//check conflict for class



         //restriccion por semestre
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where cys='$cys' and schedule.time_id='$daym' and schedule.sec='$grupo' and day='f' AND prog_code = '$prog_code' ")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$cysc=$rowc['cys'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>Miercoles</td>
					<td>$timec</td> 
					<td>Semestre $cysc</td>
					<td class='text-danger'><b>Horario no valido</b>	</td>					
				</tr>
			</table></span>";	
	
			  //solo por grupo
			  $query_grupo=mysqli_query($con,"select *,COUNT(*) as count from schedule 
			  natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='f' AND prog_code = '$prog_code'")or die(mysqli_error($con));
		  
		  // select *,COUNT(*) as count from schedule 
		  // 		natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'
		  $rowg=mysqli_fetch_array($query_grupo);
			  $count_g=$rowg['count'];
			  $gruposeg=$rowg['sec'];
			  $prog_codeg=$rowg['prog_code'];
			  $timeg=date("h:i a",strtotime($rowg['time_start']))."-".date("h:i a",strtotime($rowg['time_end']));
			  $error_g="<span class='text-danger'>
			  <table width='100%'>
				  <tr>
					  <td>Lunes</td>
					  <td>$timeg</td> 
					  <td>grupo $gruposeg</td>
					  <td>>Existe Grupo en el Programa $prog_codeg</td>
					  <td class='text-danger'><b>No valido</b></td>					
				  </tr>
			  </table></span>";	
				
		$queryt=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$membert=$rowt['member_last'].", ".$rowt['member_first'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0) and ($count_g==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,member_id,subject_code,cys,room,remarks,settings_id,encoded_by,alum,hteo,hprac,cr,th,sec,designation,prog_code) 
				VALUES('$daym','f','$member','$subject','$cys','$room','$remarks','$set_id','$program','$alum','$hteo','$hprac','$cr','$th','$grupo','$designation','$prog_code')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>Miercoles</td>
					<td>$timet</td> 
					
					<td>Agregado Exitoso</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
		
		//echo "</table>";
	}

	//jueves
	foreach ($j as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where member_id='$member' and schedule.time_id='$daym' and day='J' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$member1=$row['member_last'].", ".$row['member_first'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>jueves</td>
					<td>$time1</td> 
					<td>$member1</td>
					<td class='text-danger'><b>Horario no Valido</b></td>					
				</tr>
				</span>
			</table>";
		
		//check conflict for salon
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where room='$room' and schedule.time_id='$daym' and schedule.sec ='$grupo' and schedule.sec ='$grupo' and day='j' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$roomr=$rowr['room'];
			// <td>$timer</td>
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>jueves</td>
					 
					<td>Room $roomr</td>
					<td class='text-danger'><b>Horario no valido</b></td>					
				</tr>
				</span>
			</table>";
			//semestre restriccion
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where cys='$cys' and schedule.time_id='$daym' and schedule.sec='$grupo' and day='j' AND prog_code = '$prog_code' ")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$cysc=$rowc['cys'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>jueves</td>
					<td>$timec</td> 
					<td>Semestre $cysc</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	


			  //solo por grupo
			  $query_grupo=mysqli_query($con,"select *,COUNT(*) as count from schedule 
			  natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='j' AND prog_code = '$prog_code'")or die(mysqli_error($con));
		  
		  // select *,COUNT(*) as count from schedule 
		  // 		natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'
		  $rowg=mysqli_fetch_array($query_grupo);
			  $count_g=$rowg['count'];
			  $gruposeg=$rowg['sec'];
			  $prog_codeg=$rowg['prog_code'];
			  $timeg=date("h:i a",strtotime($rowg['time_start']))."-".date("h:i a",strtotime($rowg['time_end']));
			  $error_g="<span class='text-danger'>
			  <table width='100%'>
				  <tr>
					  <td>Lunes</td>
					  <td>$timeg</td> 
					  <td>grupo $gruposeg</td>
					  <td>>Existe Grupo en el Programa $prog_codeg</td>
					  <td class='text-danger'><b>No valido</b></td>					
				  </tr>
			  </table></span>";	
		
				
		$queryt=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$membert=$rowt['member_last'].", ".$rowt['member_first'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,member_id,subject_code,cys,room,remarks,settings_id,encoded_by,alum,hteo,hprac,cr,th,sec,designation,prog_code) 
				VALUES('$daym','j','$member','$subject','$cys','$room','$remarks','$set_id','$program','$alum','$hteo','$hprac','$cr','$th','$grupo','$designation','$prog_code')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>jueves</td>
					<td>$timet</td> 
					<td>Agregado Exitoso</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
		
		//echo "</table>";
	}
	//viernes fri
	foreach ($v as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where member_id='$member' and schedule.time_id='$daym' and day='v'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$member1=$row['member_last'].", ".$row['member_first'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>viernes</td>
					<td>$time1</td> 
					<td>$member1</td>
					<td class='text-danger'><b>horaio repetido</b></td>					
				</tr>
				</span>
			</table>";
		
		//check conflict for salon
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where room='$room' and schedule.time_id='$daym' and schedule.sec ='$grupo'  and day='v' AND schedule.prog_code='$prog_code'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$roomr=$rowr['room'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>viernes</td>
					<td>Numero de salon $roomr</td>
					<td class='text-danger'><b> horario en el salon ocupado</b></td>					
				</tr>
				</span>
			</table>";
			//check conflict for semestre
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join member natural join time where cys='$cys' and schedule.time_id='$daym' and schedule.sec='$grupo' and day='v' AND prog_code = '$prog_code'  ")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$cysc=$rowc['cys'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>viernes</td>
					<td>$timec</td> 
					<td>Semestre $cysc</td>
					<td class='text-danger'><b>Semestre y horario ocupado</b></td>					
				</tr>
			</table></span>";	

		
		  //solo por grupo
		  $query_grupo=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		  natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='v' AND prog_code = '$prog_code'")or die(mysqli_error($con));
	  
	  // select *,COUNT(*) as count from schedule 
	  // 		natural join member natural join time where sec='$grupo' and schedule.time_id='$daym' and day='m' AND prog_code = '$prog_code'
	  $rowg=mysqli_fetch_array($query_grupo);
		  $count_g=$rowg['count'];
		  $gruposeg=$rowg['sec'];
		  $prog_codeg=$rowg['prog_code'];
		  $timeg=date("h:i a",strtotime($rowg['time_start']))."-".date("h:i a",strtotime($rowg['time_end']));
		  $error_g="<span class='text-danger'>
		  <table width='100%'>
			  <tr>
				  <td>Lunes</td>
				  <td>$timeg</td> 
				  <td>grupo $gruposeg</td>
				  <td>>Existe Grupo en el Programa $prog_codeg</td>
				  <td class='text-danger'><b>No valido</b></td>					
			  </tr>
		  </table></span>";	
	
		
				
		$queryt=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$membert=$rowt['member_last'].", ".$rowt['member_first'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,member_id,subject_code,cys,room,remarks,settings_id,encoded_by,alum,hteo,hprac,cr,th,sec,designation,prog_code) 
				VALUES('$daym','v','$member','$subject','$cys','$room','$remarks','$set_id','$program','$alum','$hteo','$hprac','$cr','$th','$grupo','$designation','$prog_code')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>viernes</td>
					<td>$timet</td> 
					<td>Agregado Exitoso</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
		
		//echo "</table>";
	}

	

		
}					  
	
?>