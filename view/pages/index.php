  <div id="header"> <?php include("../layout/header.html"); ?> </div> 
  <?php
    $url = "http://192.168.0.150:5505/api/today";
    $json_str = json_decode(file_get_contents($url));
  ?>

    <main role="main" class="container-fluid">
      <div class="card text-white bg-info mb-12">  
       
        <div class="card-header text-center">
          <h1>Dados do Dia <?php
          date_default_timezone_set('America/Sao_Paulo');
          $date = date('d-m-Y');
          echo $date;
          ?></h1>
        </div>
          
        <div class="card-body text-dark bg-white">
          <h5 class="card-title " style="margin-top: 35; ">Temperatura Ambiente (ºC)</h5>
          <div class="row">
         
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/temperatura.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_temperatura.php"); ?>
              <div id="chart_temp"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Incidência Solar (W/m<sup>2</sup>)</h5>
          <div class="row">
          
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/incidency_sun.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_incidency_sun.php"); ?>
              <div id="chart_chuva"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Humidade (%) </h5>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/humidity.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_humidity.php"); ?>
              <div id="chart_solar"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Precipitação (mm)</h5>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/precipitation.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_precipitation.php"); ?>
              <div id="chart_precipitation"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Ponto de Orvalho (ºC)</h5>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/dew_point.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_dew_point.php"); ?>
              <div id="chart_dew_point"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Sensação Térmica (ºC)</h5>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/heat_index.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_heat_index.php"); ?>
              <div id="chart_heat_index"></div>
            </div>
          </div>

        </div>
             
           

         
      </div>
    </main>

    <div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
