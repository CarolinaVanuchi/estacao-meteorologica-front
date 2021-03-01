
<?php
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $url = "http://192.168.0.150:5505/api/historic?date1=".$date1."&date2=".$date2."";
    $json_str = json_decode(file_get_contents($url));

?>
 <div id="header"> <?php include("../layout/header.php"); ?> </div> 
 
  <main role="main" class="container-fluid">
  <div class="card text-white bg-info mb-12">  
       
       <div class="card-header text-center">
         <h1>Pesquisa</h1>
       </div>
     
       </div>

    <div class="table-responsive-md table-responsive-lg table-responsive-sm">
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Temperatura (ºC)</th>
                    <th scope="col">Incidência Solar (W/m<sup>2</sup>)</th>
                    <th scope="col">Humidade (%)</th>
                    <th scope="col">Precipitação (mm)</th>
                    <th scope="col">Ponto de Orvalho (ºC)</th>
                    <th scope="col">Sensação Térmica (ºC)</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($json_str->data as $e) { ?>
                    <tr>   
                        <td><?php echo $e->req_date ?> </td>
                        <td><?php echo $e->req_time ?> </td>
                        <td><?php echo $e->temp ?> </td>
                        <td><?php echo $e->incidency_sun ?> </td>
                        <td><?php echo $e->humidity ?> </td>
                        <td><?php echo $e->precipitation ?> </td>
                        <td><?php echo $e->dew_point ?> </td>
                        <td><?php echo $e->heat_index ?> </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

      
   
      </div>
       
        
  </main>
 
 
  <div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
