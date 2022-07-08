<?php   

    //Inicio la sesión para ver si existe el usuario.
    session_start();
    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
    }
    else{
        $nombre = "";
    }

?>
<!--PARTE SUPERIOR DEL DASHBOARD  BARRA LATERAL-->
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Nipio</title>

    <!-- Custom fonts for this template-->
    <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Estilos CSS-->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/sb-admin-2.css">
    <link rel="stylesheet" href="../public/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="../public/css/colores_custom.css">
    
    <!--Cógio Jquery-->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    

    <!--Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   

    <!--Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../public/images/logo ni pio  circulo turquesa.png" width="60px" height="60px">
                </div>
                <div class="sidebar-brand-text mx-3">Nipio</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            

        <?php
        //Si existe el usuario se muestra esta página.
        if(isset($_SESSION['nombre'])){

            echo '
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Mi perfil</span></a>
            </li>';
            //Si es el admin se muestran estos enlaces.
            if($_SESSION['admin'] == 'true'){
                 echo '<!-- Divider -->
                 <hr class="sidebar-divider">

                 <!-- Heading -->
                 <div class="sidebar-heading">
                     
                 </div>

                 <!-- Nav Item - Tables -->
                 
                 <li class="nav-item">
                     <a class="nav-link" href="usuarios.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Usuarios</span></a>
                 </li>

             
                 <!-- Divider -->
                 <hr class="sidebar-divider">

                 <!-- Heading -->
                 <div class="sidebar-heading">
                     
                 </div>

                 <!-- Nav Item - Tables -->
                 
             
                <li class="nav-item">
                     <a class="nav-link" href="productos.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Servicios</span></a>
                 </li>
                 

                 <li class="nav-item">
                     <a class="nav-link" href="contacto_tabla.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Consultas</span></a>
                 </li>

         
         


                 <!-- Divider -->
                 <hr class="sidebar-divider">

                 <!-- Heading -->
                 <div class="sidebar-heading">
                     
                 </div>';
            }
         }
     ?>



            <!-- Nav Item - Tables -->
            <?php
            //Si es el admin se muestra estos tabla de reservas.
            if(isset($_SESSION['nombre'])){

                if($_SESSION['admin'] == 'true'){
                
                    echo '<li class="nav-item">
                            <a class="nav-link" href="reservas_tabla.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Reservas</span></a>
                        </li>';
                    echo '<li class="nav-item">
                    <a class="nav-link" href="citas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Citas</span></a>
                    </li>';
                        
                //Si no es el admin se muestra este otro enlace.
                }else if($_SESSION['admin'] == 'false'){
                    echo '<li class="nav-item">
                        <a class="nav-link" href="reservas_tablausu.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Reserva</span></a>
                    </li>';
                    echo '<li class="nav-item">
                            <a class="nav-link" href="cita_usu.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Mi Cita</span></a>
                        </li>';

                }            
            
                echo '
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>';
            }
            
            ?>
            



            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


            <?php
            // Si el usuario está registrado se mostrará su nombre en la página.          
                if(isset($_SESSION['nombre'])){

                    echo '<!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <p class="nomusu" id="nombreUsu">Bienvenido/a '.$nombre.'</p>
                        
                        
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                    
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="nombreUsu"></span>
                                
                                    <ion-icon name="log-out-outline"></ion-icon>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                

                            <div class="dropdown-divider"></div>
                            <form action="../view/session.php" method="post">
                                <input type="submit" name="logout" value="Cerrar sesión" class="dropdown-item">
                            </form>

                            </div>
                        </li>

                        </ul>

                    </nav>
                    
                    <!-- End of Topbar -->
                    '; 
                }
            ?>

        
                