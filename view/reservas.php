<?php
//Incluyo la cabecera y el archivo de controller_productos para pintar los productos del select
include '../view/modulos/cabecera.php';
require_once '../controllers/controller_producto.php';
session_start();
?>
    <body class="reserva__body">
      
        <main>
            <section class="reserva">
                    
                <?php
                    //Compruebo si el usuario existe y no le muestro el formulariío de registro ni de reservas.
                    if(!isset($_SESSION['nombre'])){
                        echo' <section class="reserva">
                        <div class="reserva-body">
                            <div class="reserva-title">
                                <h1>RESERVAS</h1>
                            </div>
                    
                            <div class="reserva-parrafo">
                                <p>
                                    Una vez recibida vuestra reserva nos pondremos en contacto con vosotros a través del correo, para confirmaros
                                    la disponibilidad del día y registrar la hora de la cita.  
                                </p>
                                <p>
                                    Sabemos que con los peques hay cambios todo el tiempo, por lo que, si lo necesitáis tenéis
                                    hasta 24h antes para cambiarla o cancelarla. (puedes ver las condiciones antes de hacer el pago)
                                </p>  
                                <p>
                                    El día a día de una familia está lleno de actividades por eso, recibiréis un recordatorio por
                                    correo antes de la cita para que podáis actuar con margen!
                                </p>
                                <strong>Muchas Gracias!</strong>
                            </div>
                            
                            
                        </div>
                        <div class="reserva-form">
                        <div class="title-reserva">
                            <h2>Formulario de Reserva</h2>
                        </div>
                        <div class="body-reserva-form">
                            <form action="#"  class="form-registro" id="form_registro"><label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre"/>
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos"/>
                                <label for="phone">Teléfono</label>
                                <input type="phone" name="phone" id="phone"/>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"/>
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password"/>
                                <label for="sonname">Nombre del hijo</label>
                                <input type="text" name="sonname" id="sonname"/>
                                <label for="date">Fecha de Registro</label>
                                <input type="date" name="date" id="date" value="'.date('Y-m-d').'"/>
                                <label for="servicio">Servicio que desea contratar</label>
                                <select name="servicio" id="servicio">
                                    <option value="">Seleccionar Servicio</option>';
                                
                                    //Pintamos los productos del select.
                                    foreach($productos as $producto) {
                                        echo'<option value="'.$producto['idProductos'].'">'.$producto['Nombre'].'</option>';
                                    }

                                echo '</select>
                                <p id="msj-registro"></p>
                                <button type="submit" name="btn-guardar" id="btn-guardar">Reservar</button>
                            </form>
                        </div>';
                    }else {
                        //Si el usuario no existe le mostramos el formulario de registro y reservas para que pueda registrarse.
                        echo '<div class="reserva-body">
                        <div class="reserva-title">
                            <h1>RESERVA REALIZADA</h1>
                        </div>
                
                        <div class="reserva-parrafo_log">
                            <p>
                                Una vez recibida vuestra reserva nos pondremos en contacto con vosotros a través del correo, para confirmaros
                                la disponibilidad del día y registrar la hora de la cita.  
                            
                            
                                Sabemos que con los peques hay cambios todo el tiempo, por lo que, si lo necesitáis tenéis
                                hasta 24h antes para cambiarla o cancelarla. (puedes ver las condiciones antes de hacer el pago)
                            
                            
                                El día a día de una familia está lleno de actividades por eso, recibiréis un recordatorio por
                                correo antes de la cita para que podáis actuar con margen!
                            </p>
                        
                            <p>Para cualquier duda pueden ponerse en contacto con nosotros a través el enlace de <a href="contacto.php">Contacto.<a></p>
                            <strong>Muchas Gracias!</strong>
                        </div>
                        
                        
                    </div>';
                    }
                            
                ?>
                         
                           

            </section>
        </main>

        <?php 
            //Muestro el pie de página.
            include 'modulos/footer.php';
        ?>
        <!--Llamamos al controlador del js para realizar el registro-->
        <script src="../controllers/Controller_Users.js"></script>   

    </body>
</html>