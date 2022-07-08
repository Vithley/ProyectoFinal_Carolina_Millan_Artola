    <!--PÁGINA DE CONTACTO-->
    <body class="contact__body">

    <?php   
        //Incluyo la cabecera.
        include 'modulos/cabecera.php';
        //Inicio la sesión para mostrar los datos del usuario si esta registrado.
        session_start();

        if(isset($_SESSION['nombre'])){
            $nombre = $_SESSION['nombre'];
            $apellidos = $_SESSION['apellidos'];
            $correo = $_SESSION['correo'];           
        }
        //Si no lo está aparecen los campos en blanco.
        else{
            $nombre = "";
            $apellidos = "";
            $correo = "";           
        }

        
    ?>
        <main>
            <section class="contact">
                <div class="contac-body">
                    <div class="with-me">
                        <h4>Contacta con nosotros</h4>
                    </div>
                    <div class="contact-title">
                        <h1>¿Necesitas ayuda?</h1>
                    </div>
                    <div class="contact-parrafo">
                        <p>Contacta con nosotros si tenéis alguna duda o pregunta especial en 
                            cuanto a los <a href="pack.php">Packs</a> disponibles; si no sabéis qué Pack os vendría
                             mejor o si queréis concertar <a href="consultation.php">cita</a> con una de nuestras logopedas.
                        </p>
                    </div>
                    <strong class="contact-parrf">
                        Rellena este formulario con vuestra consulta y nos pondremos
                         en contacto con vosotros en las próximas 24 horas.
                    </strong>
                    <div class="contact-email">
                        <div>
                            <a href="mailto:nipiologopedia@gmail.com" target="_blank"><img src="../public/images/email.png" width="70px" height="40px"/></a>
                        </div>
                        <div class="link-mail">
                            <a href="mailto:nipiologopedia@gmail.com" target="_blank">Email Ni Pio_Logopedia</a>
                            <p>nipiologopedia@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-whats">
                        <div class="icon-whats">
                            <a href="https://api.whatsapp.com/send/?phone=351913557223&text=hola+me+gustar%C3%ADa+recibir+infomaci%C3%B3n+de+logopedia+online&app_absent=0" target="_blank"><img src="../public/images/whatsapp.png" width="70px" height="40px"/></a>
                        </div>
                        <div class="link-whats">
                            <a href="https://api.whatsapp.com/send/?phone=351913557223&text=hola+me+gustar%C3%ADa+recibir+infomaci%C3%B3n+de+logopedia+online&app_absent=0" target="_blank">¿Hablamos?</a>
                        </div>
                    </div>
                     <div class="contact-whats">
                        <div class="icon-whats">
                            <a href="siguenos.php"><img src="../public/images/redes.png" width="80px" height="50px"/></a>
                        </div>
                        <div class="link-whats">
                            <a href="siguenos.php">Síguenos</a>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="contact-form">
                    <div class="title-form">
                        <h2>Rellena este formulario</h2>
                    </div>
                    <div class="body-contact-form">
                        <form action="" method="POST" class="form-contact" id="form-contact">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"/>
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos ?>"/>
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>"/>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $correo ?>"/>
                            <label for="mensaje">¿Qué necesitas?</label>
                            <textarea name="mensaje" id="mensaje" cols="40" rows="10"></textarea>
                            <button type="submit">Enviar</button>
                            <p id="msj-contacto"></p>
                        </form>
                    </div>
                </div>

            </section>

            <section class="necesitas">
                <div class="imagen-nec">
                    <img src="../public/images/foto contacto.png">
                </div>
                <div class="text-necesitas">
                    <h2>Nos necesitáis si…</h2>
                    <ul>
                        <li>
                            Si vuestro hijo/a tiene más de 24 meses y notáis
                            que presenta un retraso en la aparición del lenguaje.
                        </li>
                        <li>
                            Si produce muchos errores de articulación de fonemas y palabras.
                        </li>
                        <li>
                            Si su vocabulario es muy escaso.
                        </li>
                        <li>
                            Si no consigue construir frases coherentes acordes con su edad.
                        </li>
                        <li>
                            Si no presenta intención comunicativa y/o presenta dificultades
                             para comunicarse con otras personas
                        </li>
                    </ul>
                </div>
            </section>

            <div class="contact-acordeon">
                <div class="paraquien tratamos">
                    <h1>¿Qué tratamos en Ni Pío_Logopedia?</h1>
                </div>
                <details>
                    <summary>Trastornos del Lenguaje Infantil</summary>
                    <div class="list-acordeon">
                        <ul>
                            <h4>Alteraciones del lenguaje oral</h4>
                            <li>Retraso Simple del Lenguaje.</li>
                            <li>Disfasia y la Afasia.</li>
                            <li>TEL Trastorno Específico del Lenguaje.</li>
                            <h4>Alteraciones del lenguaje escrito</h4>
                            <li>Dislexia.</li>
                            <li>Disgrafía.</li>
                            <li>Discalculia.</li>
                        </ul>

                    </div>    
                </details>
                <details>
                    <summary>Trastornos del Habla en Niños</summary>
                    <div class="list-acordeon">
                        <ul>
                            <h4>Alteraciones en la articulación</h4>
                            <li>Dislalias.</li>
                            <li>Trastorno Fonológico.</li>
                            <li>Disglosia.</li>
                            <li>Disartria.</li>
                            <li>Dispraxia Verbal.</li>
                            <li>Disgrafía.</li>
                            <li>Alteraciones en la fluidez verbal.</li>
                        </ul>

                    </div>    
                </details>

                <details>
                    <summary>Atención Temprana 0-6 años</summary>
                    <div class="list-acordeon">
                        <ul>
                            <h4>Interviene en la</h4>
                            <li>Estimulación del lenguaje oral, gestual y/o visual preverbal y verbal.</li>
                            <li>Estimulación pragmática, favoreciendo la interacción social.</li>
                            <li>Estimulación del habla para la adquisición de nuevos fonemas.</li>
                            <li>Estimulación semántica, adquisición de vocabulario.</li>
                            <li>Estimulación morfosintáctica, adquisición de estructura gramatical.</li>
                        </ul>
                    </div>    
                </details>

                <details>
                    <summary>Trastornos del Neurodesarrollo</summary>
                    <div class="list-acordeon">
                        <ul>
                            <li>Trastornos del Espectro autista TEA.</li>
                            <li>Trastornos del Desarrollo Intelectual.</li>
                            <li>Trastornos por Déficit de Atención con Hiperactividad TDAH.</li>
                            <li>Trastornos por Déficit de atención TDA.</li>
                        </ul>
                    </div>    
                </details>

                <details>
                    <summary>Trastornos de la Voz en Niños</summary>
                    <div class="list-acordeon">
                        <ul>
                            <li>Disfonía Infantil.</li>
                        </ul>
                    </div>    
                </details>

                <details>
                    <summary>Problemas Auditivos en Niños</summary>
                    <div class="list-acordeon">
                        <ul>
                            <li>Hipoacusia Infantil Conductiva.</li>
                            <li>Hipoacusia Infantil Neurosensorial.</li>
                            <li>Implantados Cocleares.</li>
                        </ul>
                    </div>    
                </details>
            </div>
        </main>

        <?php 
            //Inlcuyo el pie de página.
            include 'modulos/footer.php';
        ?>
        
        <script src="../controllers/controller_contacto.js"></script>
        <script src="../public/js/hamburguerMenu.js"></script>
    </body>
</html>