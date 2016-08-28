 

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
                    <div class="row">
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
                    <button type="submit" style="float: left; color: black" name="btnRegistrarIncapacidad" class="btn btn-primary" data-toggle="modal" data-target="#verincapacidades" onclick="" id=""> Incapacidades Por Enfermedad</button>
                    <button type="submit" style="float: right; color: black" name="btnRegistrarIncapacidad" class="btn btn-primary" data-toggle="modal" data-target="#verincapacidad" onclick="" id=""> Incapacidades Por Accidentes</button>
             </div>
             <br>
             <br>
            <div class="row">
                <table class="table table-striped">
  <thead>
    <tr>
      <th>Identificación</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Profesión</th>
      <th>Cargo</th>
      <th>Salario</th>
      <th>Nivel de Riesgo</th>
      <th>Registrar Incapacidad</th>
      <th>Ver Ficha de Riesgo</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($listarEmp as $value): ?>
    <tr>

        <td><?= $value['identificacion'] ?></td>
        <td><?= $value['nombre'] ?></td>
        <td><?= $value['direccion'] ?></td>
        <td><?= $value['profesion'] ?></td>
        <td><?= $value['cargo'] ?></td>
        <td><?= $value['salario'] ?></td>
        <td><?= $value['nivel_riesgo'] ?></td>
        <td><button type="button" class="btn btn-info btn-circle btn-md" data-identi = "<?= $value['identificacion'] ?>" data-salario = "<?= $value['salario'] ?>" data-niv = "<?= $value['nivel_riesgo'] ?>" title="Ver Ficha" onclick="mostrar('<?= $value['identificacion'] ?>',this)"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
        <td><button type="button" class="btn btn-primary btn-circle btn-md" title="Ver Ficha" data-tipo = "<?= $value['nombre'] ?>" onclick="editar('<?= $value['cargo'] ?>',this)"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
          
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

<div class="modal fade" id="verincapacidades" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">

  <div class="modal-dialog" role="document" style="width: 80% !important">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Incapacidades Por Enfermedad</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                <table class="table table-striped">
  <thead>
    <tr>
      <th>Identificación</th>
      <th>Nombre</th>
      <th>Tipo de Incapacidad</th>
      <th>Nombre de Enfermedad</th>
      <th>Descripción</th>
      <th>Nivel de Riesgo</th>
      <th>Fecha</th>
      <th>Valor a Pagar Empresa</th>
      <th>Valor a Pagar EPS</th>
      <th>Valor Total Incapacidad</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($listarIncaEnfer as $va): ?>
    <tr>

    <td><?= $va['identificacion'] ?></td>
        <td><?= $va['nombre'] ?></td>
        <td><?= $va['nombre_tipo_incapacidad'] ?></td>
        <td><?= $va['nombre_enfermedad'] ?></td>
        <td><?= $va['descripcion_incapacidad'] ?></td>
        <td><?= $va['nivel_riesgo'] ?></td>
        <td><?= $va['fecha'] ?></td>
        <td><?= $va['valor_total_empresa'] ?></td>
        <td><?= $va['valor_total_eps'] ?></td>
        <td><?= $va['valor_total_incapacidad'] ?></td>        
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="aceptar()">Aceptar</button>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="verincapacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">

  <div class="modal-dialog" role="document" style="width: 80% !important">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Incapacidades Por Accidente</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                <table class="table table-striped">
  <thead>
    <tr>
      <th>Identificación</th>
      <th>Nombre</th>
      <th>Tipo de Incapacidad</th>
      <th>Nombre del Accidente</th>
      <th>Descripción</th>
      <th>Nivel de Riesgo</th>
      <th>Fecha</th>
      <th>Valor a Pagar Empresa</th>
      <th>Valor a Pagar EPS</th>
      <th>Valor Total Incapacidad</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($listarIncaAcci as $valu): ?>
    <tr>

        <td><?= $valu['identificacion'] ?></td>
        <td><?= $valu['nombre'] ?></td>
        <td><?= $valu['nombre_tipo_incapacidad'] ?></td>
        <td><?= $valu['nombre_accidente'] ?></td>
        <td><?= $valu['descripcion_incapacidad'] ?></td>
        <td><?= $valu['nivel_riesgo'] ?></td>
        <td><?= $valu['fecha'] ?></td>
        <td><?= $valu['valor_total_empresa'] ?></td>
        <td><?= $valu['valor_total_eps'] ?></td>
        <td><?= $valu['valor_total_incapacidad'] ?></td>        
    </tr>
      <?php endforeach ?>
  </tbody>
</table>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="aceptar()">Aceptar</button>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="myincapacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard ="false" data-backdrop = "static">
  <div class="modal-dialog" role="document" style="width: 50% !important">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Registrar Incapacidad</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="Otro/index">
            <div class="row">
                <div class="col-md-4">
                    <label>Tipo de Incapacidad</label>
                    <select class="form-control" name="txttipo" id="selectTipo"  style="width: 100%" onclick="quitar()">
                        <option onclick="quitar()"></option>  
                    <?php foreach ($listartipoIncapacidad as  $val): ?> 
                        <option value="<?= $val['id_tipo_incapacidad'] ?>" onclick="quitar()"><?= $val['nombre_tipo_incapacidad'] ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-4" id= "divtipoenfe">
                    <label>Tipo de Enfermedad</label>
                    <select class="form-control" name="txttipoenfermedad" id="selectTipoenfermedad"  style="width: 100%">
                        <option></option>  
                    <?php foreach ($listarEnfermedades as  $valor): ?> 
                        <option value="<?= $valor['id_enfermedad'] ?>"><?= $valor['nombre_enfermedad'] ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-4" id="tipoacci">
                    <label>Tipo de Accidente</label>
                    <select class="form-control" name="txttipoaccidente" id="selectTipoaccidente"  style="width: 100%">
                        <option></option>  
                    <?php foreach ($listaraccidentes as  $value): ?> 
                        <option value="<?= $value['id_accidente'] ?>"><?= $value['nombre_accidente'] ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>
            <br>
                <input type="hidden" name="txtvalordia" id="idvalordia">
                <input type="hidden" name="txtvalorhora" id="idvalorhora">
                 
                <div class="row">
                   <div class="col-xs-12 col-md-4" id="dividenti">
                        <label >Identificacion</label><br>       
                        <input type="text" class="form-control" name="txtIdentificacion" placeholder="Identificacion" value="" id="ididentificacion" readonly="">
                    </div>
                    <div class="col-xs-12 col-md-4" id="divfecha">
                        <label >Fecha</label><br>       
                       <input type="text" class="form-control pull-right" name="txtfecha" min="2016-07-02" step="1"  value="<?php echo date("d-m-Y");?>" readonly="">
                    </div>
                    <div class="col-xs-12 col-md-4" id="divsalario">
                        <label >Salario</label><br>       
                        <input type="text" class="form-control" name="txtsalario" value="<?= $value['salario'] ?>" id="idsalario" readonly="">
                    </div>              
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-md-4" id="divdiasincapacidad">
                        <label >Dias de Incapacidad</label><br>       
                        <input type="number" class="form-control" name="txtdiasincapacidad" placeholder="Dias de Incapacidad" value="" id="iddiasincapacidad">
                    </div>
                    <div class="col-xs-12 col-md-4" id="divnivelriesgo">
                        <label >Nivel de Riesgo Según Cargo</label><br>       
                        <input type="number" class="form-control" name="txtnivelderiesgo" value="" id="idnivriesgo">
                    </div>                     
                </div>
                <br>
                <div class="row">   
                    <div class="col-xs-12 col-md-8" id="divdefinicion">
                        <label>Definición</label>
                        <textarea class="form-control" rows="3" name="txtdefinicion"></textarea>
                    </div> 
                </div>
                <br>
                <div class="row">           
                    <div class="col-xs-12 col-md-4" id="divempresa" style="display: none">
                        <label >Total a Pagar Empresa</label><br>       
                        <input type="text" class="form-control" name="txtempres" value="" id="idempresa">
                    </div>
                    <div class="col-xs-12 col-md-4" id="diveps" style="display: none">
                        <label >Total a Pagar EPS</label><br>       
                        <input type="text" class="form-control" name="txteps"  value="" id="ideps">
                    </div>
                </div>
                <br>
                <div class="row">
                    <br>
                    <div class="col-xs-12 col-md-8" style="margin-top: 5px;" id="divPagoTotal">
                        <div class="panel panel-default">
                            <div class="panel-body" id="detalle"> 
                                <div class="panel-footer">
                                    <h3>Total:<input type="hidden" id="txttotal" name="txttotal" value=""> <span id="total">0</span></h3>
                                </div>                                   
                                <button onclick="calcularSalario()" id="calcularEnfermedad" type="button" class="btn btn-primary pull-right" style="margin-top: 10px;"><i class="fa fa-plus plus"></i>   Calcular</button>
                                <button onclick="calcularTemporal()" id="CalcularAccidente" type="button" class="btn btn-primary pull-right" style="margin-top: 10px; display: none"><i class="fa fa-plus plus"></i>   Calcular</button>
                            </div> 
                        </div>
                    </div> 
                </div>
        <button type="submit" style="float: left" name="btnRegistrarInca" class="btn btn-success" onclick="" id="idboton1">Registrar</button>
        <button type="submit" style="float: left" name="btnRegistrarIncapacidad" class="btn btn-success" onclick="" id="idboton2">Registrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="aceptar()">Cerrar</button>
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
        window.location="http://localhost/Sistema-de-Informaci-n-Salud-en-el-Trabajo/";
    }
</script>
<script type="text/javascript">
     function mostrar(ididentificacion, listarEmp)
      {
        // var tipo = $(listarE).attr("data-tipo-empleado");
        // alert(tipo);

        var campos = $(listarEmp).parent().parent().parent();
        $('#ididentificacion').val(campos.find("td").eq(0).text());
        $('#idsalario').val(campos.find("td").eq(5).text());
        $('#idnivriesgo').val(campos.find("td").eq(6).text());

        $('#myincapacidad').modal("show");
           setTimeout(function(){

            var identidad = $(listarEmp).attr("data-identi");
            var salario = $(listarEmp).attr("data-salario");
            var nivel = $(listarEmp).attr("data-nivel");
                var identidad = $('#ididentificacion').val(identidad);
                var salario = $('#idsalario').val(salario);
                var nivel =$('idnivriesgo').val(nivel);
                var tipoInca = $("#selectTipo").val();

                $("#idboton1").hide();
                $("#idboton2").hide();
           },500);

      }
    
</script>
<script type="text/javascript">

    function quitar() {
        var id = $("#selectTipo").val();
        if (id == 1){
            $("#divnivelriesgo").hide();
            $("#tipoacci").hide();
            $("#divtipoenfe").slideDown();
            $("#idboton2").hide();
            $("#idboton1").slideDown();
        }
        else if(id == 2)
        {
            $("#divnivelriesgo").slideDown();
            $("#divtipoenfe").hide();
            $("#tipoacci").slideDown();
            $("#idboton2").slideDown();
            $("#idboton1").hide();
        }
    }

</script>
<script type="text/javascript">
    function calcularSalario(){


               var salario = $("#idsalario").val();
               var dias = parseInt($("#iddiasincapacidad").val());
               var valorhora = (salario /30 * 28)/180;
               var valorDia = valorhora * 8;
               var vdeps = parseInt(valorDia * 0.66);
               var vempresa = parseInt(dias * salario/30);
               var veps = parseInt(dias * vdeps);
               var tot = parseInt(vempresa * vdeps);
               var total1 = parseInt(vempresa - veps)
               var vdi = parseInt($("#idvalordia").val());
               var vho = parseInt($("#idvalorhora").val());
               var vdi = $("#idvalordia").val(valorDia);
               $("#idempresa").val(vempresa);
               $("#ideps").val(total1);
               $("#idvalorhora").val(valorhora);
               if (dias<=3) {
                    $("#divempresa").removeAttr('style');
                    $("#diveps").hide();
                    $("#ideps").val(0);
               }
               else if(dias>3)
               {
                    $("#diveps").removeAttr('style');
                    $("#divempresa").removeAttr('style');
                    $("#idempresa").val(vempresa - total1);
                    $("#ideps").val(total1);

               }

               
               var html = '<div class="row"><div class="col-md-9 cta-contents">';
                   html += '        <div class="cta-desc">';
                   html += '           <p data-valor="'+dias * salario/30 +'"></p>';
                   html += '    </div>';
                   html += '<input type="hidden" name="total" value="'+total+'">';
                   html += ' </div>';
                   html += '  </div>';
                   html += '</div>';

                $("#detalle").append(html);
                    calcularTotal();
                  
                  
                }
    function calcularTotal(){
      
               var total = 0;
               var salarioBase = $("#idsalario").val();
               var valordia = $("idvalordia").val();
               var dias = $("#iddiasincapacidad").val();
               var tot = dias * valordia;

               $("[data-valor]").each(function(key, value){
                
                 total = parseInt($(value).attr("data-valor"));

               }); 
                $("#total").html(total);
                $("#txttotal").val(total);
                $("#total").priceFormat(
                {
                centsLimit: 3,
                clearPrefix: true
                }
                );
             }
</script>
