
<?php
  
 
  $date1 = $_POST['date1'];
  $date2 = $_POST['date2'];

  $url = "http://192.168.0.150:5505/api/historic?date1=".$date1."&date2=".$date2."";
  $json_str = json_decode(file_get_contents($url));
  
  $fp = fopen('arquivo.csv', 'w');
  $lista = array("Data", "Hora", "Temperatura", "Incidência Solar", "Humidade", "Precipitação", "Ponto de Orvalho", "Sensação Térmica");
  fputcsv($fp, $lista);
  foreach($json_str->data as $e){
      $lista = array($e->req_date, $e->req_time, $e->temp, $e->incidency_sun, $e->humidity, $e->precipitation, $e->dew_point, $e->heat_index);
      fputcsv($fp, $lista);
  }
  
  fclose($fp);

  $file = 'arquivo.csv';

  if (file_exists($file)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="'.basename($file).'"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      readfile($file);
     
  }

?>
