<?php

	$output_file = '../../assets/imgs/incidency_sun.png';
	
	$data = array();

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
	$plot_sun->SetTitle(utf8_decode('Incidência Solar'));
	$plot_sun->SetPlotAreaWorld(NULL, 0, NULL, NULL);
	$plot_sun->SetIsInline(1);
	$plot_sun->SetOutputFile($output_file);
	$plot_sun->DrawGraph();
	
?>