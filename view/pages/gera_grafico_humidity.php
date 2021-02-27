<?php

	$output_file = '../../assets/imgs/humidity.png';
	$horas = array();
	$valores = array();
	$i = 0;
	foreach($json_str->data as $e) {
		$horas[$i]      = $e->req_time;
		$valores[$i]    = $e->humidity;
		$i = $i + 1;
	} 	
	$horas = array();
	$valores = array();
	$data = array();
	$i = 0;
	$y = 0;
	if ($json_str != null) {
		$n_points = count($json_str->data);	
		foreach($json_str->data as $e) {
			$date_time = $e->req_date . ' ' . $e->req_time;
			$valor	   = $e->humidity;
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
		$plot->SetTitle('Humidade');
		$plot->SetPlotAreaWorld(NULL, 0, NULL, NULL);
		$plot->SetIsInline(1);
		$plot->SetOutputFile($output_file);
		$plot->DrawGraph();
	}
?>