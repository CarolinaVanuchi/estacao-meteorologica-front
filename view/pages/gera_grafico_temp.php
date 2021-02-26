<?php
	
	$output_file = '../../assets/imgs/temperatura.png';
	$horas = array();
	$valores = array();
	$i = 0;
	foreach($json_str->data as $e) {
		$horas[$i]      = $e->req_time;
		$valores[$i]    = $e->temp;
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
		$valor	   = $e->temp;
		array_push($data, array('', strtotime($date_time), $valor));
	}
	
    $plot = new PHPlot();
    $plot->SetImageBorderType('plain');
    $plot->SetPlotType('lines');
    $plot->SetDataType('data-data');
	$plot->SetXLabelType('time', '%Y-%m-%d %H:%M:%S');
	$plot->SetXDataLabelType('');
	$plot->SetXLabelAngle(90);
    $plot->SetDataValues($data);
    $plot->SetTitle('Temperatura');
    $plot->SetPlotAreaWorld(NULL, 0, NULL, NULL);
	$plot->SetIsInline(1);
	$plot->SetOutputFile($output_file);
    $plot->DrawGraph();
?>