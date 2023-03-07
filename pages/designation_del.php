
 
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
include("../dist/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM designation WHERE designation_id ='$id'")
	or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Eliminó una designación con éxito!');</script>";	
			
	echo "<script>document.location='designation.php'</script>";  
?>

 