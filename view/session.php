

<?php 
//Incluyo la cabecera y el archivo de model_User e inicio la sesión.
include 'modulos/cabecera.php';
include '../model/model_User.php';
session_start();
//Compruebo si el usuario existe en la base de datos.
if(isset($_SESSION['nombre'])){
    header("Location: index.php");
}




//Si existe el botón cerrar sesión cerramos la sesión de los usuarios.
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: home.php');
}

?>
    <!--FORMULARIO LOGIN-->
    <body class="central">
       
        <main>
            <div class="line"></div>
            <div class="login">
                <div class="box">
                   
                    <!--Formulario Login-->
                    <form action="session.php" method="POST" class="input-group" id="formlogin">
                        <input type="email" class="input-field" placeholder="Email" required name="correo" id="correo">
                        <input type="password" class="input-field" placeholder="Contraseña" required name="pass" id="pass">
                        
                        <button type="submit" name="acceder" class="submit-btn" id="acceder">Acceder</button>
                        <?php
                        //Al pulsar en el botón acceder hacemos login.
                            if(isset($_POST['acceder'])){
                                (new Usuarios())->login();
                            }


                        ?>
                        

                    </form>
            

                </div>
            </div>

        </main>

        <?php 
            //Incluyo el pie de página.  
            include 'modulos/footer.php';


        ?>
    
    </body>
</html>

