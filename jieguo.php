<?php
include_once("class/mysql_class.php");
include ("src/jpgraph.php");
include ("src/jpgraph_bar.php");

$id=$_GET['id'];
$sql="SELECT * FROM `vote_option` WHERE `theme_id`=".$id;
$result=$db->query($sql);
while($array=$db->arr_ay($result))
{
    $data[]=$array['count'];
    $datae[]=$array['option_name'];
    $name[]=$array['vote_title'];
}

//**********
function cbFmtPercentage($aVal) {
    return sprintf("%.1f%%",1*$aVal);
}

$graph = new Graph(600,300);
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(100);
$graph->img->SetMargin(40,30,30,40);
$graph->SetShadow();
$bar1 = new BarPlot($data);
$graph->title->Set($name[0]);
$graph->xaxis->SetTickLabels($datae);
$graph->title->SetFont(FF_SIMSUN_UTF8);
$graph->xaxis->SetFont(FF_SIMSUN_UTF8);
$bar1->value->SetFormatCallback("cbFmtPercentage");
$bar1->value->Show();

$graph->Add($bar1);

$graph->Stroke();




