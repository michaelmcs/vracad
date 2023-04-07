 
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

if($_POST)
{
include('../dist/includes/dbcon.php');

	$code = $_POST['code'];			
	$title = $_POST['title'];		
	$nombre = $_POST['nombre'];
	$name_plan = $_POST['name_plan'];		
	$tcurso= $_POST['tcurso'];


	$prog = $_SESSION['id'];

	$query=mysqli_query($con,"select * from subject where subject_code='$code'")or die(mysqli_error());
			$count=mysqli_num_rows($query);		
			if ($count>0)
				{
					echo "<script type='text/javascript'>alert('Ya Existe el Curso!');</script>";	
				echo "<script>document.location='subject.php'</script>";  
				}
			else
			{	
				mysqli_query($con,"INSERT INTO subject(subject_code,subject_title,nombre,name_plan,tipo_cur, prog_id) 
				VALUES('$code','$title','$nombre','$name_plan','$tcurso','$prog')")or die(mysqli_error());
				
				echo "<script type='text/javascript'>alert('Curso Agregado Con Exito!');</script>";	
				echo "<script>document.location='subject.php'</script>";  
			}
}					  
	
?>