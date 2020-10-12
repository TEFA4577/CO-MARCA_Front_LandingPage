<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CO MARCA Academy!</title>
    <link rel="icon" href="img/Iconos/iconoA final.png" type="image.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css/main.css">

    <!--Firestore-->
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>
    <script src="app.js"></script>
</head>

<body>

    <!--NAVIGATOR-->
    <!--border-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white">
        <a class="navbar-brand" href="">
            <img src="img/Iconos/logo jpg de alta resolucion.png" width="155" height="65" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  js-scroll-trigger col" align="center" href="#sec1">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger col" align="center" href="#sec2">¿A quienes <br> nos dirigimos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger col" align="center" href="#sec3">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger col" align="center" href="#sec4">Ventajas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger col" align="center" href="#sec5">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--END NAVIGATION-->

    <!--MAIN HEADER-->
    <header class="main-header" id="sec1">
        <div class="text-white py-3 header">
            <div class=" container">
                <div class="row">
                    <div class="col-md-6 justify-content-center align-self-center">
                        <div class="card bg-transparent border-0">
                            <div class="card-body bg-transparent text-center">
                                <h2 class="display-4 text-secondary ">¿Quienes somos?</h2>
                                <p class="lead text-secondary " align="justify  ">
                                    <b>Academia Co Marca es una plataforma de aprendizaje en línea, pensada en el desarrollo de habilidades, aprendizaje continuo y actualizado desde el lugar que se encuentre cada usuario, con posibilidad de crecimiento orgánico y extenso, optimizando sus recursos
                                    en todas las áreas que empujan al emprendimiento propio fortalecido y de desarrollo integral.</b>
                                </p>
                                <a href="#subsec1" class="btn btn-info text-white btn-lg">Continua...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center align-self-center">
                        <img src="img/Standar-image/e_learning academia (2).png" alt="imagen1" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END MAIN HEADER-->

    <!--WHO ARE US?-->
    <section>
        <br id="subsec1">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="img/Slides-image/4 (1).png" alt="imagen2" class="img-fluid">
                </div>
                <div class="col-md-5 align-self-center">
                    <div class="card bg-transparent border-0">
                        <div class="card-body text-center text-secondary">
                            <p class="lead" align="justify">
                                La Academia es una iniciativa que nace del trabajo de emprendedores bolivianos como parte de la adaptabilidad que influye la coyuntura a la transformación digital, como el mayor canal de oportunidad a continuar y avanzar, sin dejar que las circunstancias
                                nos lo impidan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--END WHO ARE US?-->

    <!--OUR PEOPLE-->
    <section id="sec2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h2 class="display-4 text-secondary lead">
                        ¿A quiénes nos dirigimos?
                    </h2>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
                        <img src="img/Slides-image/Aprendizaje.png" class="img-fluid" alt=" ">
                        <div class="card-body">
                            <h5 class="card-title lead">Personas amantes del aprendizaje continuo</h5>
                            <p class="card-text lead" align="justify">Personas como tú que dedican mucho tiempo de su día a explorar el mundo, aprender, profundizar y ampliar habilidades, así como buscar nuevos desafíos a través del desarrollo integral continuo.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card text-center">
                        <img src="img/Slides-image/Profesor.png" class="img-fluid" alt=" ">
                        <div class="card-body">
                            <h5 class="card-title lead">Apasionados por enseñar</h5>
                            <p class="card-text lead" align="justify">Especialistas en su área que les apasiona compartir conocimiento, dispuestos a ingresar a un formato digital, disruptivo y con posibilidades de expandir sus saberes al mundo, así como crear una nueva cultura y comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END OUR PEOPLE-->

    <!--CAROUSEL-->
    <section id="sec3">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 100%">
                    <img src="img/Slides-image/Crema Negro Blanco Ventas Presentación.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 100%">
                    <img src="img/Slides-image/10 (1).png " class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 100%">
                    <img src="img/Slides-image/12.png " class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 100%">
                    <img src="img/Slides-image/11.png " class="d-block w-100" alt="...">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only ">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only ">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--END CAROUSEL-->

    <!--BENEFITS-->
    <section id="sec4">
        <div class="benefits text-center">
            <div class="container py-5">
                <br>
                <div class="row justify-content-center">
                    <div class="text-center">
                        <h2 class="display-4 text-white lead">
                            Ventajas de la Academia CO MARCA
                        </h2>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <!--VENTAJAS ACA-->
                    <div class=" col-md-4">
                        <div class="card">
                            <img src="img/Standar-image/1.png" class="img-fluid" alt=" ">
                            <div class="card-body ">
                                <h5 class="card-title ">Contenido Especializado</h5>
                                <p class="card-text lead " align="justify ">En La Academia encontrarás contenido especializado y complementario enfocado a distintas áreas estratégicas que permitan potenciarte con ventajas competitivas en tu dinamismo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/Standar-image/4.png" class="img-fluid" alt=" ">
                            <div class="card-body">
                                <h5 class="card-title">Enfocada al Emprendimiento</h5>
                                <p class="card-text lead" align="justify">En Co Marca Cowork somos parte activa del ecosistema emprendedor boliviano, esa experiencia nos motiva a reflejarla en La Academia, especializando cada disciplina al desarrollo del sector.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/Standar-image/2.png" class="img-fluid" alt=" ">
                            <div class="card-body">
                                <h5 class="card-title">Ser parte de La Academia</h5>
                                <p class="card-text lead" align="justify">Ser integrante te da oportunidad de ingresar a una comunidad, interactuar en ella, así como posibilidades de tutoría y mentoría. Compartir tus conocimientos y crear empleabilidad orgánica.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br id="sec5">
            </div>
    </section>
    <!--END BENEFITS-->

    <!--UPDATE FORM-->
    <?php
            /*require "conexion.php";

            if(isset($_POST['submit'])) {

                $new_email = array(
                    "email" => $_POST['email']
                );//

                $sql = "INSERT INTO lms_email_informaciones (id_inf, email) VALUES (NULL,:email)";

                $header = 'De: '. $_POST['email'] ."\r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                $header .= "Mime-Version: 1.0 \r\n";

                $mensaje .= "Contactate con este correo: " . $_POST['email'] . " \r\n";
                $mensaje .= "Para mas informacion acerca de la Academia" . " \r\n";
                $mensaje .= "Enviado el " .date('d/m/Y' , time()); 

                $para = 'carla.valencia@comarca-cowork.com';
                $asunto = 'Mensaje de Academia Co Marca';   
                
                mail($para, $asunto, $mensaje, $header);

                header("Location: index.php");

                try{
                    $statement = $conexion->prepare($sql);
                    $statement->execute($new_email);
                }catch(PDOException $error){ 
                    echo $error->getMessage();
                }
            }*/
        ?>

        <!--END UPDATE FORM-->

        <!--CONTACTS-->
        <section class="bg-dark text-white py-5">
            <br>
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="lead text-center">¿Necesitas más información?
                                <br> Comunícate con nosotros.</h3>
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="col-md-4">
                            <input id="btn-email" onclick="guardar()" value="Enviar" class="btn btn-info btn-lg btn-block">
                        </div>
                    </div>
                </form>
            </div>
            <br>
        </section>
        <!--END CONTACTS-->

        <!--UPDATE FORM-->
        <?php
        /*require "conexion.php";

            if(isset($_POST['submit2'])){

                $new_form = array(
                    "educacion_distancia" => $_POST['educacion_distancia'],
                    "aprender_linea" => $_POST['aprender_linea'],
                    "cursos_interes" => $_POST['cursos_interes']
                );

                $sql = "INSERT INTO lms_encuestas (id_form, educacion_distancia, aprender_linea, cursos_interes) 
                        VALUES (NULL,:educacion_distancia, :aprender_linea, :cursos_interes)";

                try{
                    $statement = $conexion->prepare($sql);
                    $statement->execute($new_form);
                }catch(PDOException $error){    
                    echo $error->getMessage();
                }
            }*/
        ?>

            <!--END UPDATE FORM-->

            <!--FORMULARIO-->
            <section class="bg-light py-5">
                <div class="container">
                    <div class="card">
                        <h3 class="card-header text-center">Realiza esta pequeña encuesta</h3>
                        <div class="card-body justify-content-center align-self-center">
                            <form>
                                <fieldset class="form-group">
                                    <div class="row">
                                            <!-- ID que recibimos de firebase-->
                                            <legend class="col-form-label col-sm-8">
                                                1.¿Conoces la educación a distancia?</legend>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="educacion_distancia" id="educacion_distancia1" value="Si" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                      Sí
                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="educacion_distancia" id="educacion_distancia2" value="No">
                                                    <label class="form-check-label" for="gridRadios2">
                                      No
                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-8 ">2.¿Estuvieras dispuest@ a aprender en línea?</legend>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="aprender_linea" id="aprender_linea1" value="Si" checked>
                                                <label class="form-check-label" for="gridRadios">
                                      Sí
                                    </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="aprender_linea" id="aprender_linea2" value="No">
                                                <label class="form-check-label" for="gridRadios">
                                      No
                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row">
                                    <label for="inputTextCurso" class=" col-sm-8 col-form-label ">3.¿Qué tipos de cursos te interesarían?</label>
                                    <div class="col-sm-4 ">
                                        <input type="text" name="cursos_interes" id="cursos_interes" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class=" form-group row ">
                                    <div class="col-sm-12 ">
                                        <input type="submit" id="btnGuardarEncuesta" class="btn btn-info btn-lg btn-block" value="Envía tu respuesta!">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--END FORMULARIO-->

            <!--FOOTER AND SOCIAL MEDIA-->
            <footer class="bg-dark ">
                <div class="container py-5 text-white text-center ">
                    <div class=" row ">
                        <div class="col-md-4"><br></div>
                        <div class="col-md-4"><img src="img/Iconos/facebook.png " width="40">
                            <img src="img/Iconos/twitter.png " width="40">
                            <img src="img/Iconos/instagram.jpg " width="40"></i>
                        </div>
                        <div class="col-md-4 "><br></div>
                    </div><br><br>
                    <p class="lead ">De emprededores para emprendedores...
                        <br> Avenida Montenegro, edificio Emporio Nro.1017
                        <br>Teléfono: (591) 71520591
                        <br>(591) 77582306
                    </p>
                </div>
            </footer>
            <!--END FOOTER AND SOCIAL MEDIA-->

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>


</body>

<!---END FOOTER AND SOCIAL MEDIA-->

</html>