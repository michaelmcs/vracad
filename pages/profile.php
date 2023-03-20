<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');
      include('../dist/includes/dbcon.php');
      ?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">ATRAS</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
              <li class="active">detalles de la cuenta</li>
            </ol>
          </section>
<?php
		    $id=$_SESSION['id'];
		      $query=mysqli_query($con,"select * from program where prog_id='$id'")or die(mysqli_error());
				$row=mysqli_fetch_array($query);
		  ?>	
          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Actualizar detalles de la cuenta</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="profile_update.php">

				  <div class="form-group">
                    <label for="date">Nombre de usuario</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['username'];?>" name="username" placeholder="usuario" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Cambiar password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="date" name="password" placeholder="Escribie la nueva contraseña">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				
          <div class="form-group">
                    <label for="date">Confirmar nuevo Password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="date" name="new" placeholder="Escribie la nueva contraseña">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
          <hr>
					<div class="form-group">
                    <label for="date">Ingrese la contraseña anterior para confirmar los cambios</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="date" name="passwordold" placeholder="Escriba la antigua contraseña" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  
                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-primary" id="daterange-btn" name="">
                        Guardar
                      </button>
					  <button class="btn" id="daterange-btn">
                        Limpiar
                      </button>
                    </div>
                  </div><!-- /.form group -->
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
