<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>Ingresar Empleado</title>

  <link rel="icon" type="image/png" href="/img/logo.png" />

  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- estilo para el template -->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!--estilo para la pagina -->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- este es el Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - la marca -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Prueba Gobernacion</div>
      </a>

      <!-- Divis or-->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divisor -->
      <hr class="sidebar-divider">

      <!-- Cabecera -->
      <div class="sidebar-heading">
        Ingreso  empleados
      </div>
      
      <!-- Divisor -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler-->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- fin de Sidebar -->

    <!--contenedor de wrappers-->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- mantenedor de contenedores -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscando para..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->

            <li class="nav-item dropdown no-arrow mx-1">
             
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Informacion de Usuario -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="fas fa-list fa-sm fa-fw mr-2 text-gray-400 img-profile rounded-circle"></div>
                 </a>
              <!-- Dropdown - Informacion de Usuario -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Session
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- fin de Topbar -->

        <!-- inicio de pagina de contenidos -->
        <div class="container-fluid">

          <!-- cabecera de pagina-->
          <h1 class="h3 mb-2 text-gray-800">Ingresar Empleado</h1>
          <p class="mb-4">
            <a href="#" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#registrarNuevoModal">
                  Nueva Empleado
                </a>
            <a href="/salarioMayo" class="btn btn-primary btn-user btn-block" >
                  empleado con mayor salario
            </a> 
            <a href="/MismoSalario" class="btn btn-primary btn-user btn-block" >
                  numero de empleados con un mismo salario
            </a>
            <a href="/edadEmpleadoFechNac" class="btn btn-primary btn-user btn-block" >
                  edad de empleados segun fecha de nacimiento
            </a>
            <a href="/salarioMenor" class="btn btn-primary btn-user btn-block" >
                  cargo de empleado con menor salario
            </a>

            Puedes agregar , eliminarla o actualizarla.</p>

          <!-- DataTales ejemplo -->
         
            @include('tabledata')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- fin del principal Contenido -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; abelino jimenez 2020</span>
          </div>
        </div>
      </footer>
      <!-- fin del Footer -->

    </div>
    <!-- fin de contenedor Wrapper -->

  </div>
  <!-- fin de la pagina Wrapper -->

  <!-- boton de Scroll hacia ariba -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Estas seguro que quieres salir de la Session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="/logout">Salir</a>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="registrarNuevoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar Nuevo</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">@
          Ingresando nueva empleado.
          <form class="user" method="POST" action="/add">
                <!-- grupo de controles input-->
                  <div class="form-group">
                      <input type="text" name="primernombre" class="form-control form-control-user" id="primerNombre" aria-describedby="ingresa primer nombre" placeholder="primer nombre...">
                 </div>
                  <div class="form-group"> 
                      <input type="text" name="segundonombre" class="form-control form-control-user" id="segundoNombre" aria-describedby="ingresa segundo nombre" placeholder="segundo nombre...">
                  </div>
                  <div class="form-group">
                      <input type="text" name="primerapellido" class="form-control form-control-user" id="primerApellido" aria-describedby="ingresa primer apellido" placeholder="primer apellido...">
                  </div>
                  <div class="form-group">
                      <input type="text" name="segundoapellido" class="form-control form-control-user" id="segundoApellido" aria-describedby="ingresa segundo Apellido" placeholder="segundo apellido...">
                  </div>
                  <div class="form-group">
                      <input type="text" name="salario" class="form-control form-control-user" id="salario" aria-describedby="ingresa el salario" placeholder="salario...">
                  </div>
                  <div class="form-group">
                      <input type="text" name="cargo" class="form-control form-control-user" id="cargo" aria-describedby="ingresa el cargo" placeholder="Cargo...">
                  </div>
                  <div class="form-group">
                      <input type="date" name="fecha_nacimiento" class="form-control form-control-user" id="fecha_nacimiento" aria-describedby="ingresa fecha de nacimiento" placeholder="fecha Nacimiento...">
                </div>
                     @csrf
                    
                    <!--a href="#" class="btn btn-primary btn-user btn-block"-->
                      <input type="submit"  class="btn btn-primary btn-user btn-block" value="Registrar"/>
                     
                    <!--/a-->
                    <hr>
              </form>


        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <!--a class="btn btn-primary" href="login.html">Registrar</a-->
        </div>
      </div>
    </div>
  </div>
  
  <!-- javascript para para atender el evento de actualizacion de modaltoggle-->
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- modificaciones de script de todas las paginas-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!--  plugins de nivel de pagina -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!--  scripts  modificable de nivel de pagina-->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
   <script src="{{asset('js/eventClickUpdate.js') }}"></script>

</body>

</html>
