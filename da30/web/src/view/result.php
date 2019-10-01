<?php

/*
require_once './TCPDF-master/tcpdf.php';$pdf = new TCPDF("P", "mm", "A4", true, "UTF-8" );
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetFont('kozgopromedium' , '', 14);
$pdf->SetMargins(20, 10, true);

//css
$css = '<style>
  	table {
  		text-align: left;
  		width: 100%;"
  	}
	th {
		vertical-align: middle;
		background-color: rgb(153, 153, 153);
		text-align: center;"
	}
	th.num {
		vertical-align: middle;
		background-color: rgb(153, 153, 153);
		text-align: right;"
	}
	td {
		vertical-align: middle;
		text-align: center;"
	}
	td.num {
		vertical-align: middle;
  		text-align: right;
	}
   </style>';
//html content


require_once("bootstrap.php");

use \{
	pColor,
	pDraw,
	pRadar
};

$myPicture = new pDraw(700,230);

$myPicture->myData->addPoints([40,20,15,10,8,4],"ScoreA");
$myPicture->myData->setSerieDescription("ScoreA","Application A");

$myPicture->myData->addPoints(["Size","Speed","Reliability","Functionalities","Ease of use","Weight"],"Labels");
$myPicture->myData->setAbscissa("Labels");

$myPicture->drawFilledRectangle(0,0,700,230,["Color"=>new pColor(179,217,91), "Dash"=>TRUE, "DashColor"=>new pColor(199,237,111)]);

$Settings =
$myPicture->drawGradientArea(0,0,700,230,DIRECTION_VERTICAL,["StartColor"=>new pColor(194,231,44,50),"EndColor"=>new pColor(43,107,58,50)]);
$myPicture->drawGradientArea(0,0,700,20, DIRECTION_VERTICAL,["StartColor"=>new pColor(0,0,0,100),"EndColor"=>new pColor(50,50,50,100)]);

$myPicture->drawRectangle(0,0,699,229,["Color"=>new pColor(0,0,0)]);

$myPicture->setFontProperties(array("FontName"=>"/fonts/Silkscreen.ttf","FontSize"=>6));
$myPicture->drawText(10,13,"pRadar - Draw radar charts",["Color"=>new pColor(255,255,255)]);

$myPicture->setFontProperties(array("FontName"=>"/fonts/Forgotte.ttf","FontSize"=>10,"Color"=>new pColor(80,80,80)));

$myPicture->setShadow(TRUE,["X"=>1,"Y"=>1,"Color"=>new pColor(0,0,0,10)]);

$SplitChart = new pRadar($myPicture);

$myPicture->setGraphArea(0,25,690,225);
$Options = [
	"Layout"=>RADAR_LAYOUT_CIRCLE,
	"LabelPos"=>RADAR_LABELS_HORIZONTAL,
	"BackgroundGradient"=>["StartColor"=>new pColor(255,255,255,50),"EndColor"=>new pColor(32,109,174,30)],
	"FontName"=>"/fonts/pf_arma_five.ttf","FontSize"=>9
];
$SplitChart->drawRadar($Options);
$myPicture->setFontProperties(["FontName"=>"/fonts/pf_arma_five.ttf","FontSize"=>6]);

// 画像をレンダリングする
$myPicture->render("mypic.png");


$html = '適当'
$pdf->writeHTML($css . $html, true, 0, true, 0);
$pdf->Output("test.pdf", "I");

*/

?>