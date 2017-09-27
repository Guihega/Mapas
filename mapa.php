<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/estilos.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script type="text/javascript" src="js/principal.js"></script>
    <title>Mapas Here</title>
  </head>
  <body>
    <?php
      require ('funciones/datos.php');
    ?>
    <div class="container-fluid">
      <div class="col-md-3">
        <ul id="Opciones" class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#DivFecha">Dia</a></li>
          <li ><a data-toggle="tab"  href="#DivAños">Año</a></li>
          <li ><a data-toggle="tab"  href="#DivMeses">Mes</a></li>
          <li ><a data-toggle="tab"  href="#DivSemanas">Semana</a></li>
        </ul>
        <div class="tab-content">
          <div id="DivFecha" class="tab-pane animated fadeInUp active">
            <h5>Selecciona la sucursal.</h5>
            <form id="SucursalDia" name="SucursalDia" action="funciones/mapa_dia.php" method="POST">
              <label><input type="checkbox" id="SelectAll" name="SelectAll" onclick="SeleccionarDia();">Todas</label><br>
              <?php
              echo $sucursales.'<br>';
              ?>
              <label for="dtp_input1" class="control-label">Fecha Inicio</label><br>
              <div class="input-group date form_date" data-date="" data-date-format="dd/mm/yy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
                <input class="form-control" name="Fecha" size="12" type="text" value="" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
              </div>
              <input type="hidden" id="dtp_input1" value="" /><br/>
              <input type="submit" name="btnMapaFecha" value="Barras" class="btn btn-primary" role="button">
            </form>
          </div>
          <div id="DivAños" class="tab-pane animated fadeInUp">
            <h5>Selecciona la sucursal.</h5>
            <form id="SucursalAño" name="SucursalAño" action="funciones/mapa_anual.php" method="POST">
              <label><input type="checkbox" id="SelectAll" name="SelectAll" onclick="SeleccionarAño();">Todas</label><br>
              <?php
              echo $sucursales.'<br>';
              ?>
              <div id="ListaAños">
                <label for="Años" class="control-label">Elige el año:</label><br>
                <select class="form-control" name="Año">
                  <?php
                  echo $años.'<br>';
                  ?>
                  <!-- <script> MostrarAños();</script> -->
                </select>
              </div>
              <input type="submit" name="btnMapaAño" value="Barras" class="btn btn-primary" role="button">
            </form>
          </div>
          <div id="DivMeses" class="tab-pane animated fadeInUp">
            <h5>Selecciona la sucursal.</h5>
            <form id="SucursalMes" name="SucursalMes" action="funciones/mapa_mes.php" method="POST">
              <label><input type="checkbox" id="SelectAll" name="SelectAll" onclick="SeleccionarMes();">Todas</label><br>
              <?php
              echo $sucursales.'<br>';
              ?>
              <div id="ListaMesAños">
                <label for="dtp_input1" class="control-label">Elige el año:</label><br>
                <select class="form-control" name="Año">
                  <?php
                  echo $años.'<br>';
                  ?>
                </select>
              </div>
              <div id="ListaMeses">
                <label for="dtp_input1" class="control-label">Elige el mes:</label><br>
                <select class="form-control" name="Mes">
                  <?php
                  echo $meses.'<br>';
                  ?>
                </select>
              </div>
              <input type="submit" name="btnMapaMes" value="Barras" class="btn btn-primary" role="button">
            </form>
          </div>
          <div id="DivSemanas" class="tab-pane animated fadeInUp">
            <h5>Selecciona la sucursal.</h5>
            <form id="SucursalSemana" name="SucursalSemana" action="funciones/mapa_semana.php" method="POST">
              <label><input type="checkbox" id="SelectAll" name="SelectAll" onclick="SeleccionarSemana();">Todas</label><br>
              <?php
              echo $sucursales.'<br>';
              ?>
              <div id="ListaSemanaAños">
                <label for="dtp_input1" class="control-label">Elige el año:</label><br>
                <select class="form-control" name="Año">
                  <?php
                  echo $años.'<br>';
                  ?>
                </select>
              </div>
              <div id="ListaSemanas">
                <label for="dtp_input1" class="control-label">Elige la semana:</label><br>
                <select class="form-control" name="Semana">
                  <?php
                  echo $semanas.'<br>';
                  ?>
                </select>
              </div>
              <input type="submit" name="btnMapaSemana" value="Barras" class="btn btn-primary" role="button">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div id="mapContainer" style="width: 100%; height: 600px; background: grey" /></div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
    <script type="text/javascript">
      $('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
        });
    </script>
  </body>
</html>
