    <!--PÁGINA DE CONSULTAS-->
    <body class="menu-video">

    <?php 
        //Incluyo la cabecera.
        include 'modulos/cabecera.php';
    ?>

        <main id="main">
        
            <section class="video-container">
                
                <div class="video-pack">
                    <video class="videoss" src="../public/videos/videoConsultas.mp4" autoplay muted loop ></video>  
                </div>
            <div class="video-overlay-consulta"></div>
                <div class="text-overvideo">
                    <h1>
                        <strong>SERVICIO DE CONSULTA</strong>
                    </h1>
                </div>               
            </section>
            <div class="lineal"></div>

            <section class="video-content-container-consultas">

                <div class="text-content-consultas">
                    <h1>Consultas adaptadas a tus necesidades</h1>
                    <p>Solicita cita con una de nuestras especialistas, para resolver todas tus dudas. Este es tu servicio si tienes dudas sobre:
                    si tú pequeño/pequeña necesita acudir al logopeda, si consideras que para su edad ya debería de hablar más, o tener más fluidez en el habla,
                    te gustaría ayudarlo pero no sabes por dónde empezar, necesitas consejo o pautas para un tema concreto. También si has hecho un Plan de Intervención
                    Logopédica previamente con nosotros u otro profesional y necesitas que lo reajustemos. Resolveremos todas tus dudas y te daremos pautas para mejorar la situación.
                    Nuestro equipo especializado en Logopedia está a tu servicio.
                    </p>                

                </div>
            </section>
            
            <section class="table-packs">
                <div class="packs">
                    <div class="pack-titulo1">
                    <img src="../public/images/logo ni pio  circulo turquesa.png" width="100px" height="100px">
                    <?php
                        /*Llamo al método para mostrar la información del precio y nombre desde la base de datos.
                        Una vez que editemos en la tabla la información se mostrará aquí los cambios.
                        */
                        include '../model/model_Productos.php';
                        echo '<h4>'.(new Productos)->mostrarPack(3)['Nombre'].'</h4>';
                    ?>
                    </div>
                    <div class="image1"><img src="../public/images/packFlexible1.png" width="45%" height="18%"></div>

                    <div class="pack-list-consulta">
                        <ul>
                        <?php
                        echo '<li class="list-pack1">'.(new Productos)->mostrarPack(3)['Precio'].'€</li>';
                        ?>
                            <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Consulta de asesoría logopédica</li>
                        </ul>
                    </div>
                    
                    <div class="include-list">
                        <ul>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Videoconsulta de 45 min de duración. Te ayudaremos y daremos las pautas para tu caso particular.
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Pautas y estrategias personalizadas, Videollamada en tu horario y día preferido.
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Incluye servicio de email con la especialista durante 14 días después de la consulta, para compartir feedback y resolver dudas.
                            </li>
                        
                        </ul>
                    </div>
                    <div class="espacio-boton-cons"></div>
                    <div class="enlace-price">
                        <a href="reservas.php">Haz tu reserva</a>
                    </div>
                    
                    
                </div>
                

                <div class="packs">
                    <div class="pack-price">
                        <div class="pack-titulo1">
                            <img src="../public/images/logo ni pio  circulo turquesa.png" width="100px" height="100px">
                            <?php
                            echo '<h4>'.(new Productos)->mostrarPack(4)['Nombre'].'</h4>';
                            ?>
                        </div>


                        <div class="image1"><img src="../public/images/packFlexible2.png" width="45%" height="18%"></div>
                        <div class="pack-list-consulta">
                            <ul>
                            <?php
                            echo '<li class="list-pack1">'.(new Productos)->mostrarPack(4)['Precio'].'€</li>';
                            ?>
                                <li class="list-pack"><ion-icon name="checkmark-outline"></ion-icon>Consulta de seguimiento ocasional para familias con 
                                    Pack flexible contratado
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                    <div class="include-list">
                        <ul>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Videoconsulta de 45min de duración. Te ayudaremos a resolver dudas o hacer ajustes del Plan de Intervención Logopédica previamente elaborado por nuestras especialistas. 
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Las consultas son totalmente flexibles y respetan el ritmo de cada familia, ajustándose a los horarios y  rutinas familiares. 
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Plan de Intervención Logopédica Individualizado.
                            </li>
                            <li class="pack-include"><ion-icon name="checkmark-outline"></ion-icon>
                                Se pueden reservar consultas conforme la familia lo necesite.
                            </li>
                        </ul>
                    </div>
                    
                    <div class="enlace-price">
                        <a href="reservas.php">Haz tu reserva</a>
                    </div>      
                    
                </div> 
                
            </section>
            <section class="description-pack">
                <div class="paraquien">
                    <h1>¿PARA QUIÉN ES ESTE PACK?</h1>
                </div>
                <div class="explicacion">
                    <p>
                        Si vuestro hijo tiene más de 24 meses y notáis que presenta un retraso en la aparición del lenguaje; 
                        o produce muchos errores de articulación de fonemas y palabras; si su vocabulario es muy escaso; si 
                        no consigue construir frases coherentes acordes con su edad; si no presenta intención comunicativa y/o 
                        presenta dificultades para comunicarse con otras personas; pero, no necesitáis que una de nuestras 
                        especialistas os guíe en la Intervención del Plan y preferís hacerlo a vuestro ritmo, este pack es para vosotros.


                    </p>
                    
                    <p>
                        Nuestro equipo de logopedas diseñará un Plan de Intervención Logopédica adaptado a las necesidades de vuestro 
                        pequeño/a y a su edad. La especialista os presentará el Plan y resolverá todas vuestras dudas para que podáis 
                        ponerlo en práctica vosotros mismos sin nuestra supervisión. Además os entregará vuestro Plan de Intervención 
                        Logopédica con pautas paso a paso para que os resulte muy sencillo de aplicar. 

                    </p>

                    <p>
                        Si a la hora de aplicar el Plan de Intervención tenéis dudas, podréis contratar Consultas  de Seguimiento Ocasional 
                        (link) de 45 minutos para que vuestra especialista revise el proceso y os ayude a continuar. Estas video-llamadas 
                        podrán ser agendadas durante los 6 meses posteriores a la presentación del plan de sueño. 

                    </p>

                    <p>
                        Ni Pío_Logopedia nace con la intención de empoderar a las familias, instruyéndolas y guiándolas para ayudar a sus pequeños. 
                        Tenemos la certeza que nadie conoce mejor a los niños/as que los propios padres y por eso, es fundamental incluir a la 
                        familia en la terapia. 

                    </p>

                    <p>
                        Conociendo los objetivos de trabajo, las estrategias y actividades necesarias para llevarlos a cabo, podréis acompañar 
                        de cerca la evolución de vuestro hijo/a. También, tendréis la oportunidad de escoger las situaciones familiares idóneas 
                        para sacar el máximo partido de las actividades, respetando siempre el ritmo de vida de cada familia.
                    </p>
                </div>
                <div class="paraquien">
                    <h1>¿QUÉ INCLUYE?</h1>
                </div>
                <div class="explicacion">
                    <p>
                        Evaluación del caso mediante un cuestionario y un registro fonológico. Videoconsulta de una hora con una de nuestras 
                        especialistas para revisar las necesidades del pequeño/a, esbozar el Plan de Intervención Logopédica personalizado y 
                        resolver todas vuestras dudas. Envío del Plan de Intervención con pautas paso a paso para poder aplicarlo a vuestro ritmo. 
                        Posibilidad de contratar Consultas de Seguimiento Ocasional (link) durante los 6 meses posteriores a la presentación del Plan, 
                        para resolver dudas o ajustar el Plan.*Estas consultas de seguimiento ocasional tienen un coste de 22€, deben contratarse a 
                        parte y no están incluidas en el pack.

                    </p>
                    
                </div>
            </section>

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

            
        </main>

        <?php 
            //Incluyo el pie de página.
            include 'modulos/footer.php';
        ?>
    
    <script src="../public/js/hamburguerMenu.js"></script>
    </body>
</html>