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
    <link rel="stylesheet" type="text/css" href="{{asset("\book.css")}}">
    <link rel="stylesheet" type="text/scss" href="{{asset("\card.scss")}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:white;">
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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/perfume.jpg')}}" alt="libro 01" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El perfume</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Misterio
                    </div>
                    <a href="http://www.daemcopiapo.cl/Biblioteca/Archivos/7_5150.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>
            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/diario.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body" >
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El diario de ana frank</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Biografia
                    </div>
                    <br>
                    <br>
                               <a href="https://www.secst.cl/upfiles/documentos/29082016_1042am_57c465f3719b0.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>
            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/soledad.jpg')}}" alt="libro 03" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>Cien años de soledad</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Novela
                    </div>
                    <br>
                    <br>
                    <br>
                    <a href="http://www.secst.cl/upfiles/documentos/19072016_1207am_578dc39115fe9.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>
            <br>
            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/alquimista.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El alquimista</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Drama
                    </div>
                    <br>
                    <br>
                    <a href="http://190.186.233.212/filebiblioteca/Literatura%20General/Paulo%20Coelho%20-%20El%20Alquimista.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/dick.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>Moby dick</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Novela epica
                    </div>
                    <br>
                    <br>

                    <a href="http://www.librosdearena.es/Biblioteca_pdf/Melville_Herman_Moby%20Dick_Ed%20perdidas_ilustraciones%20Fernando%20Gallego_jul2010.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/anillo.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El señor de los anillos</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Literatura fantástica
                    </div>
                       <br>
                    <br>
                       <br>
                    <a href="http://web.seducoahuila.gob.mx/biblioweb/upload/J.R.R.%20Tolkien%20La%20Comunidad%20del%20anillo%20I.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/CODIGO.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El codigo da vinci</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Misterio
                    </div>
                    <a href="http://www.anffos.cl/Descargas/BIBLIOTECA/Dan%20Brown%20-%20El%20C%C3%B3digo%20Da%20Vinci.pdf"  class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/principito.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>El principito</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Literatura infantil
                    </div>
                     <br>
                    <br>
                       <br>
                       <br>
                    <a href="http://bibliotecadigital.ilce.edu.mx/Colecciones/ObrasClasicas/_docs/ElPrincipito.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/mancha.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>Don Quijote de la Mancha</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Sátira
                    </div>
                    <a href="http://www.daemcopiapo.cl/Biblioteca/Archivos/7_6253.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>

            <div class="col-md-3 text-center mt-5">
                <div class="card card-01 ">
                    <img class="card-img-top" src="{{asset('images/potter.jpg')}}" alt="libro 02" width="150px">
                    <div class="card-body">
                        <span class="badge-box">
                            <i class="fa fa-check" style="background:#C0355D; color:#fff; border-radius: 50%; width:50px; height:50px;
    line-height: 50px; text-align:center;font-size: 20px;"></i>
                        </span>
                        <div class="card-title">
                            <h4>Harry Potter y la piedra filosofal</h4>
                        </div>
                        <hr>
                        <div class="badge badge-danger badge-cat"></div>
                        Literatura fantástica
                    </div>
                    <br>
                    <a href="http://www.alconet.com.ar/varios/libros/e-book_h/Harry_Potter_y_la_Piedra_Filosofal_01.pdf" class="nav-link" id="p"> More information</a>
                </div>
            </div>


        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
