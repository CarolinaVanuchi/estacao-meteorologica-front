  <div id="header"> <?php include("../layout/header.html"); ?> </div> 

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

          <h5 class="card-title" style="margin-top: 35; ">Intensidade de Chuva (mm)</h5>
          <div class="row">
          
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/intensidade_chuva.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_intensidade_chuva.php"); ?>
              <div id="chart_chuva"></div>
            </div>
          </div>

          <h5 class="card-title" style="margin-top: 35; ">Incidência Solar (W/m<sup>2</sup>)</h5>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <div id="table"> <?php include("../../config/index/incidencia_solar.php"); ?></div> 
            </div>
            
            <div class="col col-lg-8 col-md-8 col-sm-8">
              <?php include("../../config/index/grafico_incidencia_solar.php"); ?>
              <div id="chart_solar"></div>
            </div>
          </div>

        </div>
             
           

         
      </div>
    </main>

    <div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
