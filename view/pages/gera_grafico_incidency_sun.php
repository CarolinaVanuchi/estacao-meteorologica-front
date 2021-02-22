<?php
	// $url = "http://192.168.0.150:5505/api/today";
	$url = "http://9377dcd59f73.ngrok.io/api/historic?date1=2020-01-10&date2=2021-02-20";
	$json_str = json_decode(file_get_contents($url));

	$output_file = '../../assets/imgs/incidency_sun.png';
	$horas = array();
	$valores = array();
	$i = 0;
	foreach($json_str->data as $e) {
		$horas[$i]      = $e->req_time;
		$valores[$i]    = $e->incidency_sun;
		$i = $i + 1;
	} 	
	$horas = array();
	$valores = array();
	$data = array();
	$i = 0;
	$y = 0;
	$n_points = count($json_str->data);	
	foreach($json_str->data as $e) {
		$date_time = $e->req_date . ' ' . $e->req_time;
		$valor	   = $e->incidency_sun;
		array_push($data, array('', strtotime($date_time), $valor));
	}
	
    $plot_sun = new PHPlot();
    $plot_sun->SetImageBorderType('plain');
    $plot_sun->SetPlotType('lines');
    $plot_sun->SetDataType('data-data');
	$plot_sun->SetXLabelType('time', '%Y-%m-%d %H:%M:%S');
	$plot_sun->SetXDataLabelType('');
	$plot_sun->SetXLabelAngle(90);
    $plot_sun->SetDataValues($data);
    $plot_sun->SetTitle('Incidência Solar');
    $plot_sun->SetPlotAreaWorld(NULL, 0, NULL, NULL);
	$plot_sun->SetIsInline(1);
	$plot_sun->SetOutputFile($output_file);
    $plot_sun->DrawGraph();
?>