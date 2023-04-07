<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<style>
	span{
		font-size: 11px!important;
	}
	table td,th{
		/* border: 1px solid black; */
		border: 2px solid blue;
		
	}
	table{
		border-collapse:collapse;
		text-align:center;
		font-size:9px;
	}
	tr{
		height:45px;
	}
	thead tr {
		height:6px!important;
	}
	.logo{
		float:left;
		margin-left:100px
	}
	.logo2{
		float:right;
		margin-right:100px
	}
	.wrapper_print{
		width:100%;
		margin:auto;
	}
	.first{
		width:50px
	}
	.action a{
		float:right;
		color:#ff0000;
		text-decoration:none;
		font-weight:bolder;
	}
	th{
		/* width:15% */
		width:18%
	}
	.sec{
		width:30%;
	}
	.hideme{
		display:none;
	}
	.showme{
		font-size: 10px!important;
	}
	ul li{
		list-style-type:none;
		display:block;
		text-align: center;
		margin-left:-40px;

	}
	ul{
		margin-bottom: 0px;
	}
	.options{
		
	}
</style>
<h5 align = "center">

<?php
	
	if($member<>"")
	{
		$room="";
		$class="";	
		$text="Docente";
		$value=$row['member_first']." ".$row['member_last'];  
		echo "Universidad Nacional del Altiplano";
		$displaym="hideme";
		$displayr="showme";
		$displayc="showme";

		$room="";
		$class="";	
		$text1="Programa";
		$value1=$row1['prog_title'];  
		// $value=$row['member_salut']." ".$row['member_first']." ".$row['member_last']; 

		
		
		
	}
	elseif($room<>"")
	{
		$member="";
		$class="";
		$text="Salon";
		$value=$room;
		echo "UNIVERSIDAD NACIONAL DEL ATLTIPLANO PUNO - - ";
		echo " HORARIO POR SALON";
		$displayr="hideme";
		$displayc="showme";
		$displaym="showme";
	}
	elseif($class<>"")
	{
		$room="";
		$member="";
		$text="Class";
		$value=$class;
		echo "Universidad Nacional del Altiplano";
		$displayc="hideme";
		$displaym="showme";
		$displayr="showme";
	}
?>

</h5>
<h5 align="center" style="margin-top: -15px;margin-bottom: 10px">

<span style="margin-right: 5px"><?php echo $text;?>: </span>
<span style="color: blue;margin-right: 15px">
	<?php echo $value;?>
</span>


<span style="margin-right: 5px"><?php echo $text1;?>: </span>
<span style="color: blue;margin-right: 15px">
	<?php echo $value1;?>
</span>


<span style="margin-right: 5px">Año Academico</span>
<span style="color: blue;margin-right: 15px">
	<?php echo $rows['sy']. " - ". $rows['sem']; ?>
</span>

<?php 
?>





</h5>