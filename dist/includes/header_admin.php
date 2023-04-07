<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Tasks Menu -->
                 <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="home.php" class="" style="font-size:14px"><i class="glyphicon glyphicon-star-empty"></i>Horario de clase</a>
                  </li>
                  <!-- Tasks Menu -->
                  <!-- Tasks Menu -->


                        <li class="dropdown notifications-menu">
                          <!-- Menu toggle button -->
                          <a href="programas.php" style="color:#fff;" class="dropdown-toggle">
                            <i class="glyphicon glyphicon-th text-red"></i> Programas
                          </a>
                        </li>
                        <!-- Tasks Menu -->

                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="glyphicon glyphicon-file"></i> Entrada
                            </a>
                            <ul class="dropdown-menu">
                              <li>

                      
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">


                        <li><!-- start notification -->
                            <a href="teacher.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Docente
                            </a>
                          </li><!-- end notification -->

                          <li><!-- start notification -->
                            <a href="subject.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Cursos
                            </a>
                          </li><!-- end notification -->

                          <li><!-- start notification -->
                            <a href="room.php">
                              <i class="glyphicon glyphicon-scale text-green"></i> Numero de aula
                            </a>
                          </li><!-- end notification -->


						            <li><!-- start notification -->
                            <a href="class.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Ciclo
                            </a>
                          </li><!-- end notification -->


                          <li><!-- start notification -->
                            <a href="grupo.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Grupo
                            </a>
                          </li><!-- end notification -->


                          <!-- <li>
                            <a href="turno.php">
                              <i class="glyphicon glyphicon-scale text-green"></i> turno
                            </a>
                          </li> -->

						              <li><!-- start notification -->
                            <a href="signatories.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Firmantes
                            </a>
                          </li><!-- end notification -->

                        </ul>
                      </li>

                    </ul>
                  </li>
				  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-wrench"></i> Mantenimiento

                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">

						  <li><!-- start notification -->
                            <a href="department.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Departamento
                            </a>
                          </li><!-- end notification -->
						  <li><!-- start notification -->
                            <a href="designation.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Designacion
                            </a>
                          </li><!-- end notification -->
              <li><!-- start notification -->
                            <a href="program.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Programa
                            </a>
                          </li><!-- end notification -->

						  <li><!-- start notification -->
                            <a href="rank.php">
                              <i class="glyphicon glyphicon-send text-green"></i> Rango
                            </a>
                          </li><!-- end notification -->

						  <li><!-- start notification -->
                            <a href="salut.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Saludo
                            </a>
                          </li><!-- end notification -->

						  <li><!-- start notification -->
                            <a href="sy.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Año escolar
                            </a>
                          </li><!-- end notification -->

						  <li><!-- start notification -->
                            <a href="time.php">
                              <i class="glyphicon glyphicon-calendar text-green"></i> Tiempo
                            </a>
                          </li><!-- end notification -->

                        </ul>
                      </li>

                    </ul>
                  </li>
                  <!-- Tasks Menu -->
					       <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="settings.php" style="color:#fff;" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-cog text-red"></i>Configuraciones


                    </a>
                  </li>
                  <!-- Tasks Menu -->
				  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="profile.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-user text-orange"></i>
                      <?php echo $_SESSION['name'];?>
                    </a>
                  </li>
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off text-red"></i>

                    </a>
                  </li>

                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>