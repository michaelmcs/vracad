 
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if($_POST)
{
include('../dist/includes/dbcon.php');

	$id = $_POST['id'];
	$start =$_POST['start'];
	$end =$_POST['end'];
	$day =$_POST['day'];
	$turno =$_POST['turno'];
	
	mysqli_query($con,"update time set time_start='$start',time_end='$end',days='$day' ,turno='$turno' where time_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Tiempo actualizado con éxito!');</script>";	
			echo "<script>document.location='time.php'</script>";  
}	
	
?>
