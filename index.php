<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Curriculum Vitae de Fernando M. Labrador B. realizado en curso de Php Polotic Misiones" />
    <meta name="author" content="Labrador Brazda, Fernando Martin" />
    <link rel="shortcut icon" href="img/planta.png" />
    <title>Fernando Martin Porfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/46980279e5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-1.js"></script>
    <script src="js/NavBar.js"></script>



</head>
<header>
    <!-- ---------- Barra navegacion ----------- -->
    <nav>
        <div class="logo_space">
            <a href="#inicio" id="inicio" class="logo">Fernando <span class="sin-m">M.</span> Labrador</a>
        </div>
        <div class="iconNav">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times" style="display: none;"></i>
        </div>
        <ul>
            <li><a class="li-col" href="#sobremi"><i class="fas fa-angle-right"></i> Acerca</a></li>
            <li><a class="li-col" href="#certificado"><i class="fas fa-angle-right"></i> Galeria</a></li>
            <li><a class="li-col" href="#contacto"><i class="fas fa-angle-right"></i> Contacto</a></li>
        </ul>
    </nav>
</header>

<body>
    <!-- Proyecto: agregar algunos efectos y un poco de diseño en esta parte -->


    <!-- ---------- Un poco de mi ----------- -->
    <section class="sobre-mi" id="sobremi">
        <div class="container container-sobre-mi">
            <div class="img-sobre-mi">
                <img src="img/Fernando.jpg" alt="">
            </div>
            <div class="info-sobre-mi">
                <h1>Un poco de mi</h1>
                <p>¡Hola! soy <strong>Fernando Martin Labrador Brazda</strong> estudiante de Desarrollo Web.</p>
                <p>La
                    computación me interesa desde pequeño, encarta 2000, conexión dial up y Windows 98se. Mis primeros
                    pasos en el desarrollo web fueron con una página que había encontrado en ese entonces <a
                        href="https://comocreartuweb.com/">comocreartuweb.com</a>, recuerdo era puro html y lo más
                    impresionante en estilo eran los menú desplegables/transparente jaja. Soy ex-estudiante
                    de Locución Nacional, tengo 27 años y me fascinan las posibilidades de la informatica, asi tambien
                    como la accesibilidad de información que la misma ofrece.</p>
                <p>Estudio medio tiempo y trabajo la otra mitad. Mis estudios actualmente son parcialmente autodidactas,
                    los cuales se nutren de la <strong>Facultad de Ciencias Exactas y Tegnologia U.N.T</strong> y cursos
                    a los cuales asisto.</p>
                <p>Me gusta la naturaleza, la música y el deporte. Soy Nacido en la provincia de <strong>Misiones
                        Argentina</strong> y actualmente resido en <strong>San Miguel de Tucumán</strong>.</p>
                <p>Estoy abierto a realizar proyectos, pruebas; a compartir conocimiento y armar grupos de desarrollo.
                    No
                    dudes en comunicarte 👨‍💻, lo que más me interesa del desarollo web es el diálogo con la
                    comunidad.</p>
            </div>
        </div>
        <!------ Lenguajes ------>

        <div class="lenguajes">
            <h3 class="text-center">Lenguajes en aprendizaje</h3>
            <div class="container box-lenguajes">
                <div class="bx html">
                    <i class="fab fa-html5 zoom"></i>
                    <span>HTML5</span>
                </div>
                <div class="bx css">
                    <i class="fab fa-css3-alt zoom"></i>
                    <span>CSS3</span>
                </div>
                <div class="bx js">
                    <i class="fab fa-js zoom"></i>
                    <span>JavaScript</span>
                </div>
                <div class="bx php">
                    <i class="fab fa-php zoom"></i>
                    <span>PHP</span>
                </div>
                <div class="bx py">
                    <i class="fab fa-python zoom"></i>
                    <span>Python</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyecto en construccion, proyectos y trabajos practicos construidos- 
                Galeria modal para poder ver bien los certificados -->

    <!-- ---------- Certificados ----------- -->
    <section class="sections">
        <section class="section section-certificado" id="certificado">
            <div class="sc-certificado-cont">
                <h3 class="text-center">Certificados</h3>

                <div class="cer-cont-cards">
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/certificado google html 2_11024_1.jpg"
                                alt="certificado Google HTML 1/2" class="cards-logo">
                            <figcaption>Certificado curso Google HTML 1/2</figcaption>
                        </figure>
                    </div>
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/FT AR - Diseño Web con HTML5 + CSS_page-0001.jpg"
                                alt="Certificado FT AR - Diseño Web con HTML5 + CSS" class="cards-logo">
                            <figcaption>Certificado curso Diseño Web con HTML5 + CSS</figcaption>
                        </figure>
                    </div>
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/FT AR - Introducción a la Programación_page-0001.jpg"
                                alt="Certificado FT AR - Introducción a la Programación" class="cards-logo">
                            <figcaption>Certificado curso Introducción a la Programación</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="cer-cont-cards">
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/FT AR - Programación con JavaScript_page-0001.jpg"
                                alt="Certificado FT AR - Programación con JavaScript" class="cards-logo">
                            <figcaption>Certificado curso Programacion con JavaScript</figcaption>
                        </figure>
                    </div>
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/Certificadodigitalphp.jpg" alt="Certificado Programacion Web PHP Polotic"
                                class="cards-logo">
                            <figcaption>Certificado curso Programacion web PHP</figcaption>
                        </figure>
                    </div>
                    <div class="card cards-certificado">
                        <figure><img src="Certificados/Certificadodigitaljavascript.jpg" alt="Certificado Full Stack + Python + JavaScript Polotic" class="cards-logo">
                            <figcaption>Certificado curso Full stack + Python + JavaScript</figcaption>
                        </figure>
                    </div>
                </div>


            </div>
        </section>
    </section>

    <!-- ---------- Formulario Boostrap 4.4.1 ----------- -->

    <section class="container-fluid" id="contacto">
        <h2 class="text-center">Contacto</h2>
        <div class="row mt-5 justify-content-center">
            <div class="col-xl-6 col-lg-6 col-xs-12">
                <form action="enviar.php" method="POST">
                    <div class="form-group">
                        <label for="nc">Nombre completo <span class="text-danger"> *</span></label>
                        <input type="text" name="nombre" id="nc" class="form-control" placeholder="Nombre completo"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="mail">Correo electronico <span class="text-danger">*</span></label>
                        <input id="mail" type="email" class="form-control" name="correo"
                            placeholder="ejemplo@correo.com.ar" required />
                    </div>

                    <div class="form-group">
                        <label for="comentario">Comentario <span class="text-danger">*</span></label>
                        <textarea id="comentario" class="form-control" name="mensaje" required
                            placeholder="Comentario"></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-secondary btn-block">Enviar 📦</button>
                </form>
            </div>
        </div>

        <!-- <a href="#inicio" class="inicio" title="Inicio"><i class="fas fa-angle-double-up"></i></a> -->
    </section>

    <!-- ---------- Footer Boostrap 4.4.1 ----------- -->

    <footer class="container-fluid mt-5 footer">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-3 col-12">
                <address>
                    <p>San Miguel de Tucumán, Tucumán, Argentina🧉</p>
                </address>
                <p>Gracias por tu visita!</p>

                <a href="https://www.linkedin.com/in/fernandolabradorbrazda/" target="_blank" ><i
                        class="fab fa-linkedin fa-3x lnkd icono" alt="LinkedIn"></i></a>
                               
                <a href="https://github.com/FernandoLabrador" target="_blank" ><i class="fa-brands fa-github" alt="GitHub"></i></a>
                
                <a href="mailto:flabradormb@gmail.com" target="_blank" ><i class="fa-solid fa-at" alt="flabradormb@gmail.com"></i></a>

            </div>
            <div class="col-lg-3 col-md-3 col-12 text-center">
                <p>Copyright © 2021 <br><strong>Fernando M. Labrador B.</strong></p>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <iframe class="mapin"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113927.15309576457!2d-65.29263395675282!3d-26.832841656760422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94223792d6c56903%3A0xf88d5b92b5c56527!2sSan%20Miguel%20de%20Tucum%C3%A1n%2C%20Tucum%C3%A1n!5e0!3m2!1ses-419!2sar!4v1641836554876!5m2!1ses-419!2sar"
                    width="100%" height="200px" frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </footer>

</body>

</html>
