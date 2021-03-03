<?php

	$output_file = '../../assets/imgs/humidity.png';
	
	$data = array();
	
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
	
?>