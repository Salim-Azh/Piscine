<?php

require_once("jpgraph/src/jpgraph.php");
require_once("jpgraph/src/jpgraph_pie.php");


$donnees = array(5,2,3);
$legends = array("Legende", "Là", "Ici");


$graph = new PieGraph(500,500,'auto');
//$graph->SetScale('linlin');
$graph->title->Set("Coucou");
$graph->SetBackgroundCountryFlag("5");
$pieplot = new PiePlot($donnees);
$pieplot->SetLegends($legends);
//$pieplot->SetColor('red');
//$pieplot->SetTheme('water');
$graph->Add($pieplot);
$graph->Stroke();

?>