<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

if($_POST)
{
include('../dist/includes/dbcon.php');

	$room = $_POST['room'];
	$id = $_SESSION['id'];
	$add = $_SESSION['id'];			
					
	// $query=mysqli_query($con,"select * from room where room='$room , '")or die(mysqli_error());
	// $query=mysqli_query($con,"select * from room where room='$room'")or die(mysqli_error());
	$query=mysqli_query($con,"select * from room where room = $room AND prog_code = $id and prog_id = $add ")or die(mysqli_error());

	
			$count=mysqli_num_rows($query);		
			if ($count>0)
			{
				echo "<script type='text/javascript'>alert('Salon Existe en la facultad!');</script>";	
				echo "<script>document.location='room.php'</script>";  
			}
			else
			{	
		
			mysqli_query($con,"INSERT INTO room(room,prog_code,prog_id)
				VALUES('$room','$id','$add')")or die(mysqli_error());
			}			
				echo "<script type='text/javascript'>alert('Agregado con Exito nuevo Salon!');</script>";	
				echo "<script>document.location='room.php'</script>";  
	
}					  
	
?>