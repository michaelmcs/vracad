<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../dist/css/css_final.css">
    <title>Tabla de Anexo 6</title>
</head>



<body>
    <div class="heading">
    <h1>Carga Acadecima Universidad Nacional Del altiplano - anexo 6</h1>
  </div>
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <table >
        <thead>

			<!-- <tr>

						<th></th>
						<th></th>
						<th></th>

						<th colspan="3">Anthony</th>

			</tr> -->

		
			<th scope="col">Codigo del Curso</th> 
			<th>Area Curricular</th>
            <th>Nombre del Curso</th>
			
			<!-- <th colspan="2">Ciclo </th> -->
			<th>Ciclo </th>
			<th>Tipo curso</th>
            <th>Grupo</th>
            <th>Turno</th>
            <th>Numero de Aula</th>
			<th>Numero de estudiantes</th>
			<th>Horas Teoricas</th>
			<th>Horas Practicas</th>
			<th>Total de horas</th>
			<!-- <th>Credito</th> -->
			<th>Docente de planta</th>
			<th>Docente de otra escuela  Prof.</th>
			<th>Esc. Prof. Procedencia</th>
			<th>Observacion</th>
			
        </thead>



		
        <tbody >


				<?php
				$prog=$_SESSION['id'];
				include('../dist/includes/dbcon.php');
				$id=$_REQUEST['id'];
				//$mostrar_id=$_REQUEST['id'];
				
				// $query=mysqli_query($con,"SELECT  `subject_code`,MAX(sched_id) sched_id ,MAX(th) th , MAX(room) room , MAX(alum) alum  , MAX(cr) cr,MAX(hteo) hteo ,MAX(member_id) member_id ,MAX(hprac) hprac FROM schedule GROUP BY subject_code")or die(mysqli_error());
				$query=mysqli_query($con,"SELECT c.prog_id , a.subject_code , c.nombre, c.subject_title, a.cys,	c.tipo_cur, a.sec, d.turno, a.room,  a.alum, a.hteo, a.hprac,
				a.th, a.cr, b.member_first, b.member_last, b.member_rank , a.remarks  FROM schedule a INNER JOIN member b ON  a.member_id =b.member_id  
				INNER JOIN subject c ON a.subject_code =c.subject_code
				INNER JOIN time d ON a.time_id = d.time_id Where c.prog_id = $id GROUP BY a.sched_id")or die(mysqli_error());	


						// $query=mysqli_query($con,"SELECT  a.* , b.* , c.* , d.turno FROM schedule a INNER JOIN member b ON  a.member_id =b.member_id  
						// INNER JOIN subject c ON a.subject_code =c.subject_code
						// INNER JOIN time d ON a.time_id = d.time_id
						// GROUP BY a.sched_id")or die(mysqli_error());	


					// SELECT  a.subject_code ,MAX(a.sched_id ) sched_id ,MAX(a.th) th , MAX(a.room) room , MAX(a.alum) alum  , 
					// MAX(a.cr) cr,MAX(a.hteo) hteo ,MAX(a.member_id) member_id ,MAX(hprac) hprac,b.member_last, member_first ,c.subject_title
					// FROM schedule a INNER JOIN member b ON  a.member_id =b.member_id  
					// INNER JOIN subject c ON a.subject_code =c.subject_code
					// GROUP BY a.subject_code

				while($row=mysqli_fetch_array($query)){
						$id=$row['sched_id'];
						$subject_code=$row['subject_code']; //codigo del curso
						$nombre=$row['nombre']; //arrea curricular
                        $subject_title=$row['subject_title']; //nombre del curso
						$cys=$row['cys'];//Ciclo
						$tipo_cur=$row['tipo_cur'];//tipo de curso
						$sec=$row['sec'];//grupo
						$turno=$row['turno'];//turno
                        $room=$row['room'];//numero de aula
                        $alum=$row['alum'];//numerode estudiantes
                        $hteo=$row['hteo'];//horas teoricas
						$hprac=$row['hprac'];//horas practicas
						$th=$row['th'];//thoras 
						$cr=$row['cr'];//credito
                        // $member_id=$row['member_id'];//

			
						$member_first=$row['member_first'];//docente
						$member_last=$row['member_last'];//docente
						$member_rank=$row['member_rank'];//categoria
						$remarks=$row['remarks'];//observaciones
						$mid=$row['prog_id'];
                         ?>
				<tr >

				<?php 
				if ($prog==$mid or $prog==44 or $prog == $id)  
					{
					?>
					<tr>
					<!-- style="background: rgba(255, 128, 0, 0.3); border: 1px solid rgba(200, 100, 0, 0.3);" -->
					<td class="first"><?php echo $subject_code?></td> <!-- Codigo del curso -->
					<td class="first"><?php echo $nombre?></td> <!-- Area Curricular -->
					<td class="first"><?php echo $subject_title ?> </td> <!-- nombre del curso -->
					<td class="first"><?php echo $cys ?> </td> <!-- Ciclo -->
					<td class="first"><?php echo $tipo_cur?> </td> <!-- tipo de curso -->
					<td class="first"><?php echo $sec?> </td> <!-- Grupo -->
					<td class="first"><?php echo $turno?> </td> <!-- turno -->
					<td class="frist"><?php echo $room?></td><!-- Numero de Aula -->
					<td class="frist"><?php echo $alum ?></td> <!-- Numero de Estudiantes-->
					<td class="frist"><?php echo $hteo?> </td> <!-- horas teoricas -->
					<td class="frist"><?php echo $hprac?> </td><!-- horas Practicas -->
					<td class="frist"><?php echo $th?></td><!-- Total de horas -->
					<td class="frist"><?php echo $cr?></td><!-- Total de credito -->
					<td class="frist"><?php echo $member_first, ", ", $member_last?></td><!-- Docente -->
					<td class="frist"><?php echo $member_rank?></td> <!-- Categoria -->
					<td class="frist"><?php echo $remarks?></td> <!-- Observacion -->
						<?php 	
						}
					?>
				</tr>
			<?php } ?>
            </tr>
        </tbody>
    </table>
</div>
</div>
</body>
