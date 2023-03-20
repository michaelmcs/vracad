 
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

if($_POST)
{
include('../dist/includes/dbcon.php');

	$start = $_POST['start'];
	$end = $_POST['end'];
	$day =$_POST['day'];
	$turno =$_POST['turno'];
	
	$query=mysqli_query($con,"select * from time where time_start='$start' and time_end='$end' and days='$day'and turno='$turno'")or die(mysqli_error());
          
          $count=mysqli_num_rows($query);
	
if ($count>0)
{
   echo "<script type='text/javascript'>alert('Tiempo ya agregado!');</script>";	
			echo "<script>document.location='time.php'</script>"; 
}
else
{			mysqli_query($con,"INSERT INTO time(time_start,time_end,days,turno) 
				VALUES('$start','$end','$day','$turno')")or die(mysqli_error());
				
			echo "<script type='text/javascript'>alert('Tiempo añadido con éxito!');</script>";	
			echo "<script>document.location='time.php'</script>";  
	
}}					  
	
?>	