 
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');

	$salut = $_POST['salut'];	
	$last = $_POST['last'];	
	$first = $_POST['first'];	
	$rank = $_POST['rank'];	
	$dept = $_POST['dept'];	
	// $designation = $_POST['designation'];	
	$prog=$_SESSION['id'];


					
		$query=mysqli_query($con,"select * from member where member_last='$last' and  member_first='$first'")or die(mysqli_error());
				$count=mysqli_num_rows($query);
				if ($count>0)
				{
					echo "<script type='text/javascript'>alert('El miembro ya existe');</script>";
					echo "<script>document.location='teacher.php'</script>";  
				}	
				else{
					mysqli_query($con,"INSERT INTO member(member_salut,member_last,member_first,member_rank,dept_name,designation_id,prog_code) 
					VALUES('$salut','$last','$first','$rank','$dept','$designation','$prog')")or die(mysqli_error());
				
					echo "<script type='text/javascript'>
				alert('Miembro nuevo con éxito agregado');</script>";	
				echo "<script>document.location='teacher.php'</script>";  
				}
				  
	
?>	