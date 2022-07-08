<!--PÁGINA DE LOS PACKS-->
    <body class="menu-video">
    <?php 
        //Incluyo la cabecera.
        include 'modulos/cabecera.php';
    ?>
    <main>
       
        <section class="video-container">
            
            <div class="video-pack">
                <video class="videoss" src="../public/videos/FOTOS WEB principal (1).mp4" autoplay muted loop ></video>  
            </div>
           <div class="video-overlay"></div>
            <div class="text-overvideo">
                <h1>
                    <strong>TU PACK DE LOGOPEDIA</strong>
                </h1>
            </div>               
        </section>
        <div class="lineal"></div>

        <section class="video-content-container">

            <div class="text-content">
                <h1>Diseñado para adaptarse a ti</h1>
                <p>Especialmente indicado para bebés que comienzan a producir sus primeras palabras
                     y niños/as que presentan dificultades de comunicación. <br>Nuestro pack de logopedia contiene todo lo necesario para
                      enseñar y rehabilitar de un modo exitoso.<br> Nuestras logopedas y psicólogas especialistas en la comunicación,<br>
                       crearán un plan de intervención logopédica individualizado.
                </p>                

            </div>
        </section>
        
        <section class="table-packs">
            <div class="packs">
                <div class="pack-titulo">
                   <img src="../public/images/logo ni pio  circulo turquesa.png" width="100px" height="100px">
                   <?php
                        /*Llamo al método de mostrar los packs para poderle cambiar el precio y el nombre, para cuando
                         se editen se muestren aquí.*/
                        include '../model/model_Productos.php';
                        echo '<h4>'.(new Productos)->mostrarPack(1)['Nombre'].'</h4>';
                    ?>
                   
                </div>
                <div class="image1"><img src="../public/images/mujerNina.png" width="45%" height="12%"></div>

                <div class="pack-list">
                    <ul>
                        <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Estudio del caso +</li>
                        <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Plan de Intervención Logopédica</li>
                        <?php
                        echo '<li class="list-pack1">'.(new Productos)->mostrarPack(1)['Precio'].'€</li>';
                        ?>
                        <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Sesión de seguimiento</li>
                        <li class="list-pack2">15€ (mín. 4)</li>
                    </ul>
                </div>
                <div class="include-text"><p>Incluye:</p></div>
                <div class="include-list">
                    <ul>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Estudio del caso: Cuestionario inicial y registro fonológico.
                        </li>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Videoconsulta telefónica de 1 hora para revisar, valorar y evaluar las necesidades del pequeño/a y la familia. 
                        </li>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Plan de Intervención Logopédica Individualizado.
                        </li>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Guía con pautas y estrategias para favorecer la comunicación y el lenguaje.
                        </li>
                    </ul>
                </div>
                   
                <div class="include-text"><p>Sesiones de seguimiento:</p></div>
                <div class="include-list">
                    <ul>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Registros diarios para valorar la evolución.
                        </li>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Videollamadas de seguimiento. 
                        </li>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Servicio de email para resolver dudas y recibir feedback de la especialista.
                        </li>
                    </ul>
                </div>
                <div class="enlace-price">
                    <a href="packPremium.php">Más información</a>
                </div>
                
                
            </div>
            

            <div class="packs">
                <div class="pack-price">
                    <div class="pack-titulo">
                        <img src="../public/images/logo ni pio  circulo turquesa.png" width="100px" height="100px">
                        <?php
                        echo '<h4>'.(new Productos)->mostrarPack(2)['Nombre'].'</h4>';
                    ?>
                    </div>


                    <div class="image1"><img src="../public/images/nino-beso.png" width="45%" height="12%"></div>
                    <div class="pack-list">
                        <ul>
                            <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Estudio del caso +</li>
                            <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Plan de Intervención Logopédica</li>
                            <?php
                            echo '<li class="list-pack1">'.(new Productos)->mostrarPack(2)['Precio'].'€</li>';
                            ?>
                            <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Sin seguimiento</li>
                        </ul>
                    </div>
                </div>
                <div class="espacio"></div>

                <div class="include-text"><p>Incluye:</p></div>
                    <div class="include-list">
                        <ul>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Estudio del caso: Cuestionario inicial y registro fonológico.
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Videoconsulta telefónica de 1 hora para revisar, valorar y evaluar las necesidades del pequeño/a y la familia. 
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Plan de Intervención Logopédica Individualizado.
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Guía con pautas y estrategias para favorecer la comunicación y el lenguaje.
                            </li>
                        </ul>
                    </div>

                <div class="include-list">
                    <ul>
                        <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                            Podrán contratar las consultas que consideren necesarias para resolver dudas o hacer ajustes.
                        </li>  
                    </ul>
                </div>
                
                <div class="espacio-boton"></div>
                
                <div class="enlace-price">
                    <a href="packFlexible.php">Más información</a>
                </div>      
                
            </div> 
            
        </section>
    </main>

    <?php 
        //Inlcuyo el pie de página.
        include 'modulos/footer.php';
    ?>
    
    <script src="../public/js/hamburguerMenu.js"></script>
    </body>
</html>