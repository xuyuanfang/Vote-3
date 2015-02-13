<?php
include ("src/jpgraph.php");
include ("src/jpgraph_pie.php");
include ("src/jpgraph_pie3d.php");

// Some data
$data = array(20,27,45,75,90);

// Create the Pie Graph.
$graph = new PieGraph(500,400,"auto");
$graph->SetShadow();

// Set A title for the plot
$graph->title->Set(iconv('utf-8','gbk',"2011年图书销量"));
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,18);
$graph->title->SetColor("darkblue");
$graph->legend->Pos(0.1,0.2);

// Create 3D pie plot
$p1 = new PiePlot3d($data);
$p1->SetTheme("sand");
$p1->SetCenter(0.4);
$p1->SetSize(80);

// Adjust projection angle
$p1->SetAngle(45);

// Adjsut angle for first slice
$p1->SetStartAngle(45);

// As a shortcut you can easily explode one numbered slice with
$p1->ExplodeSlice(3);

// Setup slice values
$p1->value->SetFont(FF_ARIAL,FS_BOLD,11);
$p1->value->SetColor("navy");


$p1->SetLegends(array(iconv('utf-8','gbk',"1月"),iconv('utf-8','gbk',"2月"),iconv('utf-8','gbk',"3月"),iconv('utf-8','gbk',"4月"),iconv('utf-8','gbk',"5月"),iconv('utf-8','gbk',"6月"),iconv('utf-8','gbk',"7月"),iconv('utf-8','gbk',"8月"),iconv('utf-8','gbk',"9月"),iconv('utf-8','gbk',"10月")));
$graph->legend->SetFont(FF_SIMSUN,FS_BOLD);


$graph->Add($p1);
$graph->Stroke();

?>


