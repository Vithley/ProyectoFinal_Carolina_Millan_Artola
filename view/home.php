
<?php 
    //Incluyo la cabecera de la página
    include 'modulos/cabecera.php'
?>

<!--PÁGINA PRINCIPAL-->
<main>
    <section class="body-menu">
        <div class="banner">
            <div class="teraphy">
                <h1>NI PÍO_LOGOPEDIA</h1>
                <h2>ESPECIALISTAS EN LA COMUNICACIÓN</h2>
            </div>
            
        </div>  
    </section>
    
    <section class="consiste">
        <div class="consiste-logopedia">
            <h2>¿En qué consiste la Logopedia Online?</h2>
        </div>
        <div class="parr-consiste">
            <p>Ni Pío Logopedia está diseñado para ofrecer Servicio de Logopedia Online,
                somos conscientes que los peques cuando están en su hogar y en familia,
                obtienen mejores resultados, que otros métodos de trabajos individuales. 

                Nuestro método se basa en la inclusión de la familia como motor de la terapia.
                
                Tras una entrevista inicial online y recogida de información. Valoramos el tipo
                de intervención que más se ajuste a cada peque. Y establecemos un horario de seguimiento
                que mejor se adapte a la rutina familiar.</p>
        </div>
    </section>
    
    <section class="index-photo">
        <div class="container-galery">
            <div class="pack">
                <img src="../public/images/nina.png" alt="niña">
                <div class="overlay">
                    <a href="pack.php">PACK DE LOGOPEDIA</a>
                </div>
            </div>
            <div class="pack">
                <img src="../public/images/familia.png">
                <div class="overlay">
                    <a href="consultation.php">CONSULTAS</a>
                </div>
            </div>
            <div class="pack">
                <img src="../public/images/siguenos.png">
                <div class="overlay">
                    <a href="siguenos.php">SÍGUENOS</a>
                </div>
            </div>
        </div>
    </section>
    <section class="beneficios">
        <div class="parr-ben">
            <ul>
                <li>Proximidad: No necesitas desplazarte a ningún centro físico, podemos intervenir desde casa.</li>
                <li>Adaptabilidad: Poseemos mayor flexibilidad horaria, sin necesidad de ser en horario extraescolar.</li>
                <li>Eficiencia: Las dudas se resuelven de forma rápida y satisfactoria</li>
                <li>Proximidad: La Logopeda tiene contacto directo con padres e hijos.</li>
                <li>Personalizado: Los objetivos y actividades de intervención son prácticos y lúdicos, teniendo siempre en cuenta los intereses de los peques.</li>
                <li>Comprensión: Esta intervención está basada en el apego y el respeto a los niños y sus familias.</li>
            </ul>
        </div>
        <div class="benef-logopedia">
            <h2>¿Qué  beneficios tiene la terapia online?</h2>
        </div>
    
    </section>
    
    <section class="galery">
        <div class="icons-galery">
            <div class="icons">
                <a href="quienesSomos.php"><img src="../public/images/QUIÉNES SOMOS.png"></a>
                <h2>Quienes Somos</h2>
                <p>Nuestro equipo está formado por logopedas y psicólogas especializadas en el habla, lenguaje y comunicación.
                Trabajamos de forma interdisciplinar para adaptarnos mejor a las necesidades de cada familia.</p>
            </div>
            
            <div class="icons">
                <a href="terapia.php"><img src="../public/images/TerapiaEnFamilia.png"></a>
                <h2>Terapia en familia</h2>
                <p>El objetivo principal de nuestra terapia es empoderar a las familias con instrucciones,
                estrategias y actividades para llevar a cabo los objetivos establecidos en el plan de intervención individualizado de cada peque.</p>
            </div>
            
            <div class="icons">
            <a href="juego.php"><img src="../public/images/LOGOPEDIA A TRAVÉS DEL JUEGO.png"></a>
            <h2>Logopedia a través del juego</h2>
                <p>El juego en familia es la clave de nuestra intervención, todos los objetivos de rehabilitación logopédica se abordarán de forma lúdica,
                teniendo muy en cuenta los intereses del peque.</p>
            </div>
            
        </div>
    </section>
    <section class="frase">
        <p>"Jugar es la forma favorita de nuestro cerebro para aprender"<br> Diane Ackerman.</p>
    </section>
    <section class="video-index">
        <video src="../public/videos/presentacion youtube Ni Pío_Logopedia.mp4" controls width="50%" height="50%"></video>
    </section>
    <section class="imagen-final">
        <a href="materiales.php"><img src="../public/images/FOTOS WEB principal.png" width="50%" height="50%"></a>
    </section>
    </section>

</main> 
    <!--Incluyo el menú hamburguesa para el diseño responsive-->
    <script src="../public/js/hamburguerMenu.js"></script>
    
    <?php
        //Incluyo el pie de página.
        include 'modulos/footer.php'
    ?>

    

