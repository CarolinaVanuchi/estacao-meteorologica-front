<?php
  $url = "http://192.168.0.150:5505/api/today";
  $json_str = json_decode(file_get_contents($url));
  
  if (count((array($json_str))) > 1) { 
    
    require('../../lib/phplot-6.2.0/phplot.php');
    require_once 'gera_grafico_temp.php';
    require_once 'gera_grafico_incidency_sun.php';
    require_once 'gera_grafico_humidity.php';
    require_once 'gera_grafico_precipitation.php';
    require_once 'gera_grafico_dew_point.php';
    require_once 'gera_grafico_heat.php';
  }
?>
<div id="header"> <?php include("../layout/header.html");?> </div> 

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
          <h5 class="card-title " style="margin-top: 35; ">Temperatura (ºC)</h5>
          <div class="row">
         
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <div id="table"> <?php include("../../config/index/temperatura.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/temperatura.png" >
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Incidência Solar (W/m<sup>2</sup>)</h5>
          <div class="row">
          
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <div id="table"> <?php include("../../config/index/incidency_sun.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/incidency_sun.png" >
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Humidade (%) </h5>
          <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <div id="table"> <?php include("../../config/index/humidity.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/humidity.png" >
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Precipitação (mm)</h5>
          <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <div id="table"> <?php include("../../config/index/precipitation.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/precipitation.png" >
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Ponto de Orvalho (ºC)</h5>
          <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <div id="table"> <?php include("../../config/index/dew_point.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/dew_point.png" >
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Sensação Térmica (ºC)</h5>
          <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-46">
              <div id="table"> <?php include("../../config/index/heat_index.php"); ?></div> 
            </div>
            
            <div class="col col-lg-6 col-md-6 col-sm-6">
              <img src="../../assets/imgs/heat_index.png" >
            </div>
          </div>

        </div>
             
           

         
      </div>
    </main>

    <div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
