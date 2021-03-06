<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BibliotecaSoft</title>
<link rel="shortcut icon" href="{{asset('images/letra-b.png')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("\welcome.css")}}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row">
                <a class="navbar-brand" href="/welcome"><img src="{{asset('images/logo.png')}}" class="img-fluid" width="35px" alt=""> Biblioteca-Soft</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/Book">Libros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">Registro/Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section >
        <div class="portada">
            <img src="{{asset('images/bibi.jpg')}}" alt="Portada" width="1343px" height="419px">
            <div class="portada-text">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-7 aling-self-center"></div>
                        <h1 class=" text-white font-weight-bold">
                            Descubre interesantes contenidos en<br>
                            Biblioteca-Soft
                        </h1>
                        <p class="text-white lead"> En Biblioteca-Soft encontrarás libros y artículos que te ayudarán a
                            <br>
                            mejorar tus conocimientos y convertirte en un profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid ">
        <div class="row justify-content-center" style="height: 800px; background-color:white">
            <div class="col-12 text-center mt-5">
                <h2>Articulos interesantes</h2>
                <hr>
            </div>
            <div class="col-4 text-center mt-5">
                <a class="nav-link" href="https://www.bbvaopenmind.com/articulos/la-robotica-los-materiales-inteligentes-y-su-impacto-futuro-para-la-humanidad/">
                    <img src="{{asset('images/robots.png')}}" class="img-fluid" width="300px" alt="robots">
                    <p>La robótica, los materiales inteligentes y su impacto futuro para la humanidad</p>
                </a>
            </div>
            <div class="col-4 text-center mt-5">
                <a class="nav-link" href="https://www.eltiempo.com/economia/sector-financiero/que-pasaria-si-se-empieza-a-usar-dolar-en-colombia-panorama-de-otros-paises-545881">
                    <img src="{{asset('images/economia.png')}}" class="img-fluid" width="250px" alt="economia">
                    <p>Lo bueno, lo malo y lo feo de dolarizar la economía del país.</p>
                </a>
            </div>
            <div class="col-4 text-center mt-5">
                <a class="nav-link" href="https://nuso.org/articulo/big-data-y-politica/">
                    <img src="{{asset('images/politica.png')}}" class="img-fluid" width="237px" alt="politica">
                    <p>Big data y política, el poder de los algoritmos.</p>
                </a>
            </div>
            <div class="col-4 text-center mt-5">
                <a class="nav-link" href="https://www.eltiempo.com/contenido-comercial/vivir-de-la-cultura-si-es-posible-casos-de-exito-402698">
                    <img src="{{asset('images/cultura.png')}}" class="img-fluid" width="230px" alt="cultura">
                    <p>Vivir de la cultura sí es posible.</p>
                </a>
            </div>
            <div class="col-4 text-center mt-5">
                <a class="nav-link" href="https://es.calameo.com/read/0057171068922f98d92d8">
                    <img src="{{asset('images/videojuegos.png')}}" class="img-fluid" width="350px" alt="videojuegos">
                    <p>Los videojuegos estimulan la creatividad en adolescentes.</p>
                </a>
            </div>
        </div>
    </section>
    <section class="container-fluid mt-5">
        <div class="row justify-content-center" style=" background-color:#F8FAFC">
            <div class="col-12 text-center mt-5 mb-4">
                <h2>About us</h2>
                <hr>
            </div>
            <div class="col-4">
                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
            </div>
            <div class="col-4">
                <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo Contenido aquí, contenido aquí. Estos textos hacen parecerlo un español que se puede leer.</p>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row justify-content-center" style="height: 550px; background-color: black">
            <div class="col-12 align-self-center text-center">
                <img src="{{asset('images/letra.png')}}" class="img-fluid" width="90px" alt="">
                <h2 style="color:white">Biblioteca-Soft</h2>
                <hr style="width: 200px; border:2px solid white; ">
            </div>
            <div class="col-4">
                <p style="color:white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
            </div>
            <div class="col-4">
                <p style="color:white">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo Contenido aquí, contenido aquí. Estos textos hacen parecerlo un español que se puede leer.</p>
            </div>
            <div class="col-4 ">
                <p style="color:white">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
                <div class="container-fluid">
                <h3 style="color:white">SIGUENOS</h3>
                <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="30px" alt="">
                <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="30px" alt="">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="30px" alt="">
                </div>
            </div>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
