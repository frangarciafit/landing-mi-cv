<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5599a92486.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Fran</title>
</head>
<body>
<!-- INGRESO PHP -->

<?php 

$con = new mysqli("localhost", "root", "", "sistema");

function obtener_listado($id_categoria){
  global $con;
  $sql = "SELECT * FROM entradas WHERE id_categoria = ?";

  $stmt = $con->prepare($sql);
  $stmt->bind_param("i", $id_categoria);
  
  $stmt->execute();
  $resultado = $stmt->get_result();

  return $resultado;
}

function obtener_informacion(){
  global $con;
  $id_informacion = 1;
  $sql = "SELECT * FROM informacion_web WHERE id = ?";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("i", $id_informacion);

  $stmt->execute();
  $resultado = $stmt ->get_result();

  return $resultado;
}

$informacion_web = obtener_informacion();
$informacion_web = $informacion_web->fetch_object();

?>
    <!--header   -->
    <section id="sobre-mi">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12 div-left">
                    <h2>Garcia Fitzsimons Francisco</h2>
                    <br>
                    <h4>Programssador Junior/Trainee</h4>
                    <p>
                        <a href="#mi-tarjeta">Sobre mi</a>
                        <br>
                        <a href="#presentacion">Estudios</a>
                        <br>
                        <a href="#cursos">Cursos y proyectos</a>
                        <br>
                        <a href="#contact">Contacto</a>
                        <!-- <a href="/images/profile.jpeg">Contacto</a> -->
                    </p>
                </div>
                <div class="col-2 col-xs-12"></div>
                <div class="col-4 col-xs-12 img-principal">
                    <div class="imagen-principal"></div>
                    <!-- <img src="D:\estudiop\prog utn\utnfree\proyecto-cv\images\profile.jpeg" alt="foto perfil" > -->
                </div>
            <div>
        </div>
    </section>
    <header>
        <nav>
            <div class="container-nav">
                <p class="logo"> <a href="#sobre-mi">Garcia Fitzsimons Francisco</a></p>
                <nav>
                    <a href="#mi-tarjeta">Sobre mi</a>
                    <a href="#presentacion">Estudios</a>
                    <a href="#cursos">Cursos y proyectos</a>
                    <a href="#contact">Contacto</a>
                </nav>
            </div>
        </nav>
    </header>
    <!-- contenido principal -->
    <main>
        <section>
            <div class="mi-tarjeta" id="mi-tarjeta">
                <div class="mi-tarjeta-information">
                    <h2 class="mi-tarjeta-information-title">¿Quien soy?</h2>
                    <p class="mi-tarjeta-information-description">Un joven de 21 en busca de su primera experiencia laboral con mucha motivacion y predisposicion</p>
                    <h2 class="mi-tarjeta-information-title">¿Que busco?</h2>
                    <p class="mi-tarjeta-information-description">Continuar aprendiendo y capacitandome <br> Formar parte de un agradable ambiente laboral</p>

                </div>
                <img src="/images/profile.jpeg" alt="" class="mi-tarjeta-image">
            </div>
        </section>
        <!-- section sobre mi -->
        <section id="presentacion" class="sobre-mi">
            <div class="container">
                <div class="row estudios">
                    <h2 class="subtitulo-tarjetas">Estudios</h2>
                    <div class="col-md-6 col-sm-12">
                        <div class="tarjeta-estudio">
                            <h3>Tencicatura en programacion</h3>
                            <img src="/imgs/coding.png" alt="cargandp">
                            <h5>Universidad Tecnologica Nacional</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="tarjeta-estudio">
                            <h3>Tencicatura en marketing Digital</h3>
                            <img src="/imgs/marketingbullhorn.png" alt="cargandp">
                            <h5>Universidad Tecnologica Nacional</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="tarjeta-estudio">
                            <h3>Ingles</h3>
                            <img src="/imgs/united-kingdom.png" alt="cargandp">
                            <h5>Intermedio - B2 Cursado </h5>
                        </div>
                    </div>
                </div>
                <div class="row lenguajes">
                    <h2 class="subtitulo-tarjetas">Lenguajes</h2>
                    <?php $resultado = obtener_listado(5) ?>
                    <?php while ($data = $resultado->fetch_object()) { ?>
                        <div class="col-md-4 col-sm-6">
                        <div class="tarjeta-lenguaje">
                            <img src='<?php echo $data->path?>' alt="cargandp">
                            <h3><?php echo $data->titulo; ?></h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="row" id="cursos">
                    <h2 class="subtitulo-tarjetas">Cursos y Proyectos realizaados</h2>
                    <div class="col-md-4 col-xs-12">
                        <div class="tarjeta-cursos">
                            <p class="titulo">FreeCodeCamp</p>
                            <img class="image" src="https://play-lh.googleusercontent.com/MoaYYQjGtmGLhG9HbjCDKyj44kwHj1HfbCI2Am70elRm35vJ-u4y4X5uEJjP97MAAsU" alt="cargando-imagen-free.code">
                            <p>Diseño web responsive</p>
                            <p><a href="https://www.freecodecamp.org/learn/2022/responsive-web-design/">Link al curso.</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="tarjeta-cursos">
                            <p class="titulo">Paint con canvas y JS</p>
                            <img class="image" src="#" alt="cargando-imagen">
                            <div class="tarjeta-cursos-footer">
                                <p>Espacio para dibujar usando canvas y JavaScript</p>
                                <p><a href="#">Link al proyecto.</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- section para form de contacto -->
        <section id="contact">
            <!-- <div class="container contacto">
                <h1> Contactate conmigo</h1>
                <P>Llena el formulario a continuacion y me pondre en contacto cuanto antes</P>
                <div class="contact">
                    <div class="contact-form">                         
                        <form action="">
                            <h4> Form: </h4>
                            <br>
                            <p>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name">
                            </p>
                            <p>
                                <label for="mail">Email: </label>
                                <input type="email" id="mail" name="mail">
                            </p>
                            <p class="block">
                                <label for="subject">Subject:</label>
                                <input type="text" id="subject" name="subject" placeholder="Ingrese el asunto">
                            </p>
                            <p class="block">
                                <label>Messagge</label>
                                <textarea name="messagge" rows="2" placeholder="Ingrese el mensaje"></textarea>
                            </p>
                            <p class="block">  
                                <button type="submit">
                                    Send
                                </button>
                            </p>
                        </form> 
                    </div>
                    <div class="contact-info"> 
                        <h4>More contacts</h4>
                        <ul>
                            <li><i class="fa fa-instagram"></i> Instagram </li>
                            <li> <i class="fa fa-linkedin"></i> Linkedin </li>
                            <li><i class="fa fa-github"></i> GitHub</li>
                        </ul>
                    </div>
                </div>
            </div>  -->
            <div id="mi-contacto">
                <form class="mi-formulario">
                    <h3>Contacto</h3>
                    <p type="Nombre: "><input placeholder="Indique su nombre"></p>
                    <p type="Email: "><input type="text" placeholder="Indique su email"></p>
                    <p type="Mensaje"><input type="text" placeholder="Escriba su consulta"></p>
                    <button> Enviar </button>
                    <div class="bajo-formulario">
                        <span class="fa fa-phone"></span>2346-587658
                        <span class="fa fa-envelope-o"> </span>frangarciafit@hotmail.com
                    </div>
                </form>
                <!-- <div class="contact-info"> 
                        <h4>Tambien estoy en las redes</h4>
                        <ul>
                            <li><i class="fa fa-instagram"></i> <a href="#"> Instagram</a></li>
                            <li> <i class="fa fa-linkedin"></i> <a href="#"> Linkedin</a> </li>
                            <li><i class="fa fa-github"></i> <a href="#"> GitHub</a></li>
                        </ul>
                </div> -->
            </div> 
        </section>

        <!-- <section class="curriculum">
            <h1>¡Descarga mi CV!</h1>
            <form action="/CV-Francisco-Garcia.pdf" target="_blank">
                <button><i class="fa fa-dowload"></i> Click Aqui</button>
            </form>
        </section> -->

    </main>
    <!-- footer -->
    <footer>
        <div class="row footer-cv">
            <div class="col-md-4">
                <section id="hero">
                    <h1>¡Escribime para hablar conmigo!</h1>
                    <form action="https://wa.me/542346587658" target="_blank">
                        <button><i class="fa fa-whatsapp"></i> Mensaje</button>
                    </form>
                </section>
            </div>
            <div class="col-md-4">
                <section class="curriculum">
                    <h1>¡Descarga mi CV!</h1>
                    <form action="/CV-Francisco-Garcia.pdf" target="_blank">
                        <button><i class="fa fa-dowload"></i> Click Aqui</button>
                    </form>
                </section>
            </div>
            <div class="col-md-4">
                <div class="contact-info"> 
                    <h4>Tambien estoy en las redes</h4>
                    <ul>
                        <li><i class="fa fa-instagram"></i> <a href="#"> Instagram</a></li>
                        <li> <i class="fa fa-linkedin"></i> <a href="#"> Linkedin</a> </li>
                        <li><i class="fa fa-github"></i> <a href="#"> GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <section id="hero">
            <h1>¡Escribime para hablar conmigo!</h1>
            <form action="https://wa.me/542346587658" target="_blank">
                <button><i class="fa fa-whatsapp"></i> Mensaje</button>
            </form>
        </section> -->
        <section>
            <div class="container copy">
                <p>&copy; Garcia Francisco </p>
            </div>
        </section>
    </footer>
</body>
</html>