

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Developer Jhoan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Registrar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio Empleados</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo URL ?>decreto_1477_del_5_de_agosto_de_2014.pdf" target="_blank">Decreto 1477</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo URL ?>marcoLegal.pdf" target="_blank" >Marco Legal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo URL ?>Evaluación de Riesgos.pdf" target="_blank">Evaluación Riesgos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading">Bienvenido!</div>
                <a href="#services" class="page-scroll btn btn-xl">Comenzar</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registro Empleado</h2>
                </div>
            </div>
            <div class="row text-center">
                <form role="form" method="POST">
                      <div class="form-group" style="width: 20%; margin: 0px auto;">
                        <label for="email">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="txtnombre" placeholder="Ingrese Nombre">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="pwd">Identificación:</label>
                        <input type="text" class="form-control" id="identi" name="txtidentificacion" placeholder="Ingrese Identificación">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="pwd">Profesión:</label>
                        <input type="text" class="form-control" id="profesion" name="txtprofesion" placeholder="Ingrese Profesión">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="pwd">Cargo:</label>
                        <input type="text" class="form-control" id="cargo" name="txtcargo" placeholder="Ingrese Cargo">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="pwd">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="txtdireccion" placeholder="Ingrese Dirección">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="pwd">Salario:</label>
                        <input type="text" class="form-control" id="salario" name="txtsalario" placeholder="Ingrese Salario">
                      </div>
                      <p></p>
                      <div class="form-group" style="width: 20%; margin: 0px auto">
                        <label for="sel1">Nivel de Riesgo</label>
                        <select class="form-control" id="sel1" name="txtnivelriesgo">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                      </div>
                      <p></p>
                      <button type="submit" class="btn btn-primary" name="btnregistrar" style="width: 20%; margin: 0px auto">Registrar</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portafolio de Empleados</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Identificación</th>
      <th>Dirección</th>
      <th>Profesión</th>
      <th>Cargo</th>
      <th>Salario</th>
      <th>Nivel de Riesgo</th>
      <th>Ver Ficha de Riesgo</th>
      <th>Registrar Incapacidad</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($listarEmp as $value): ?>
    <tr>

        <td><?= $value['nombre'] ?></td>
        <td><?= $value['identificacion'] ?></td>
        <td><?= $value['direccion'] ?></td>
        <td><?= $value['profesion'] ?></td>
        <td><?= $value['cargo'] ?></td>
        <td><?= $value['salario'] ?></td>
        <td><?= $value['nivel_riesgo'] ?></td>
        <td><button type="button" class="btn btn-primary btn-circle btn-md" title="Ver Ficha" data-tipo = "<?= $value['nombre'] ?>" onclick="editar('<?= $value['cargo'] ?>',this)"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
        <td><button type="button" class="btn btn-info btn-circle btn-md" data-target="#myincapacidad" data-toggle= "modal" title="Ver Ficha" data-tipo = "<?= $value['nombre'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
          
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
            </div>
        </div>

    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Equipo de Desarrollo</h2>
                    <h3 class="section-subheading text-muted">SENA 2016</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/jhoan.jpg" class="img-responsive img-circle" alt="" style="width: 50%">
                        <h4>Jhoan López</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/jhoanlt19" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/JholoLopez" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/JhoanLT" target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/juan.jpg" class="img-responsive img-circle" alt="" style="width: 49%">
                        <h4>Juan David Vargas</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/johnatan.jpg" class="img-responsive img-circle" alt="" style="width: 43%">
                        <h4>Johnatan Ramirez</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cristian.jpg" class="img-responsive img-circle" alt="" style="width: 50%">
                        <h4>Cristian Rojas</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/diego.jpg" class="img-responsive img-circle" alt="" style="width: 50%">
                        <h4>Diego Alexander Lopez</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Sena Regional Antioquia 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
  <div class="modal-dialog" role="document" style="width: 55% !important">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Ficha de Riesgo</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo URL ?>img/Fichas/AlfonsoRojas.png" alt="" id="alfonso" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/AlfonsoRojas2.png" alt="" id="alfonso2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/AngelVasquez.png" alt="" id="angel" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/AngelVasquez2.png" alt="" id="angel2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/BlancaHelena.png" alt="" id="blanca" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/BlancaHelena2.png" alt="" id="blanca2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/CarlosAlberto.png" alt="" id="carlos" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/CarlosAlberto2.png" alt="" id="carlos2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/EdgarFernando.png" alt="" id="edgar" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/EdgarFernando2.png" alt="" id="edgar2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/GermanAugusto.png" alt="" id="german" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/GermanAugusto2.png" alt="" id="german2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/JoseHurtado.png" alt="" id="jose" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/JoseHurtado2.png" alt="" id="jose2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/JulioValdez.png" alt="" id="julio" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/JulioValdez2.png" alt="" id="julio2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/LuisaQuintanilla.png" alt="" id="luisa" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/LuisaQuintanilla2.png" alt="" id="luisa2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/MarcelaArias.png" alt="" id="marcela" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/MarcelaArias2.png" alt="" id="marcela2" style="display: none" >
        <img src="<?php echo URL ?>img/Fichas/PedroRamirez.png" alt="" id="pedro" style="display: none"><p></p>
        <img src="<?php echo URL ?>img/Fichas/PedroRamirez2.png" alt="" id="pedro2" style="display: none" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="aceptar()">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myincapacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
  <div class="modal-dialog" role="document" style="width: 55% !important">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Registrar Incapacidad</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="aceptar()">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function editar(nombre, listarEmp)
      {
        // var tipo = $(listarE).attr("data-tipo-empleado");
        // alert(tipo);

        var campos = $(listarEmp).parent().parent().parent();
        // $('#identi').val(campos.find("td").eq(0).text());
        // $('#tipoEmpleado').val(campos.find("td").eq(3).text());

        $('#myModal').modal("show");
           setTimeout(function(){
            var nombre = $(listarEmp).attr("data-tipo");
                    
                    if (nombre == "Alfonso Rojas Ortiz"){
                      
                      $("#alfonso").css('display','inline');
                      $("#alfonso2").css('display','inline');
                    }
                    if (nombre == "Angel Vasquez Oviedo") {

                      $("#angel").css('display','inline');
                      $("#angel2").css('display','inline');
                    }
                    if (nombre == "Blanca Helena Martinez") {

                      $("#blanca").css('display','inline');
                      $("#blanca2").css('display','inline');
                    };
                    if (nombre == "Carlos Alberto Cardenas") {

                      $("#carlos").css('display','inline');
                      $("#carlos2").css('display','inline');
                    };
                    if (nombre == "Edgar Fernando Mora Alarcon") {

                      $("#edgar").css('display','inline');
                      $("#edgar2").css('display','inline');
                    };
                    if (nombre == "German Augusto Calderon") {

                      $("#german").css('display','inline');
                      $("#german2").css('display','inline');
                    };
                    if (nombre == "Jose Hurtado") {
                      $("#jose").css('display','inline');
                      $("#jose2").css('display','inline');
                    };
                    if (nombre == "Julio Valdez") {

                      $("#julio").css('display','inline');
                      $("#julio2").css('display','inline');
                    };
                    if (nombre == "Luisa Quintanilla") {

                      $("#luisa").css('display','inline');
                      $("#luisa2").css('display','inline');
                    };
                    if (nombre == "Marcela Arias Guzman") {

                      $("#marcela").css('display','inline');
                      $("#marcela2").css('display','inline');
                    };
                    if (nombre == "Pedro Ramirez Carranza") {

                      $("#pedro").css('display','inline');
                      $("#pedro2").css('display','inline');
                    };

           },500);

      }
    
</script>
<script type="text/javascript">
    function aceptar () {
        window.location="http://localhost/sistemasalud/";
    }
</script>

