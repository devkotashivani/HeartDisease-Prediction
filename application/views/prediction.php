<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swastha Mutu: Prediction of Heart Disease</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url()?>img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url()?>img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?=base_url()?>img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?=base_url()?>img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?=base_url()?>img/favicons/manifest.json">
	<link rel="shortcut icon" href="<?=base_url()?>img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/cardio.css">
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/foo.css">
	
</head>



<body style="background-color: grey">


<div align = 'center' class='panel panel-default'>
<div class="panel-heading">
<h3 style="text-align:center">Your Heart Disease risk is:</h3>


<?php  
$age=$_POST['age'];
$bp=$_POST['bp'];
if($_POST['bp']==-1)
{
	$bp=0.25;
}  
else if($_POST['bp']==1)
{
	$bp=0.75;
}

$bc=$_POST['bc'];
if($_POST['bc']==-1)
{
	$bc=0.25;
}  
else if($_POST['bc']==1)
{
	$bc=0.75;
}



$pa=$_POST['pa'];  
if($_POST['pa']==-1)
{
	$pa=0.25;
}  
else if($_POST['pa']==1)
{
	$pa=0.75;
}

$diet=$_POST['diet'];
if($_POST['diet']==-1)
{
	$diet=0.25;
}  
else if($_POST['diet']==1)
{
	$diet=0.75;
}  

$stress=$_POST['stress'];
if($_POST['stress']==1)
{
	$stress=0.50;
} 
$sex=$_POST['sex'];  
$heriditary=$_POST['heriditary'];
if($_POST['heriditary']==1)
{
	$heriditary=0.50;
} 
$smoke=$_POST['smoke'];  
if($_POST['smoke']==1)
{
	$smoke=0.50;
} 
$alcohol=$_POST['alcohol'];
if($_POST['alcohol']==1)
{
	$alcohol=0.50;
}
$obesity=$_POST['obesity']; 
if($_POST['obesity']==1)
{
	$obesity=0.50;
}

$diabetes=$_POST['diabetes'];
if($_POST['diabetes']==1)
{
	$diabetes=0.50;
}



$s=exec('"C:\Program Files\R\R-3.3.0\bin\x64\Rscript.exe" "E:\SSS.R" 0 '.$sex.' '.$age.' '.$bc.
	' '.$bp.' '.$heriditary.' '.$smoke.' '.$alcohol.' '.$pa.
	' '.$diabetes.' '.$diet.' '.$obesity.' '.$stress.' 2>&1', $output);

if($s<0){
	$p=0;
}
else if($s>1)
{
	$p=100;
}
else
{
	$p=$s*100;
	$p=round($p,2);
}

$q=100.0-$p;

echo "<div style=text-align:center>".$p . '%'."</div>" ;
echo "<br/>";
echo "<br/>";
echo "</div>";

echo "<div class='panel-body'>";




$s=exec('"C:\Program Files\R\R-3.3.0\bin\x64\Rscript.exe" "E:\SS.R" '.$p.' '.$q.' 2>&1', $output1);


?>


<div  style="text-align:center"><img src="<?=base_url()?>img/abcd.jpeg" height='500px' width='500px'></div>
<?php

echo "<div class='panel-footer'>";
echo "Your risk factor";
echo "<br/>";
echo "<br/>";
if ($bp == -1)
	echo "Blood Pressure: Low";
else if ($bp == 0)
	echo "Blood Pressure: Normal";
else 
	echo "Blood Pressure: High";

echo "</br>";
echo "</br>";

if ($bc == -1)
	echo "Blood Cholestrol: Low";
else if ($bc == 0)
	echo "Blood Cholestrol: Normal";
else
	echo "Blood Cholestrol: High";

echo "</br>";
echo "</br>";

if ($pa == -1)
	echo "Physical Activity: Low";
else if ($pa == 0)
	echo "Physical Activity: Normal";
else
	echo "Physical Activity: High";

echo "</br>";
echo "</br>";

if ($diet == -1)
	echo "Diet: Poor";
else if ($diet == 0)
	echo "Diet: Normal";
else
	echo "Diet: Good";

echo "</br>";
echo "</br>";

if ($stress == 1)
	echo "Stress: Yes ";
else 
	echo "Stress: No";

echo "</br>";
echo "</br>";

if ($sex == 1)
	echo "Sex: Male";
else 
	echo "Sex: Female";

echo "</br>";
echo "</br>";

if ($heriditary == 1)
	echo "Heriditary: Yes";
else 
	echo "Heriditary: No";

echo "</br>";
echo "</br>";

if ($smoke == 1)
	echo "Smoke: Yes";
else 
	echo "Smoke: No";

echo "</br>";
echo "</br>";

if ($alcohol == 1)
	echo "Alcohol: Yes";
else 
	echo "Alcohol: No";

echo "</br>";
echo "</br>";

if ($obesity == 1)
	echo "Obesity: Yes";
else 
	echo "Obesity: No";

echo "</br>";
echo "</br>";

if ($diabetes == 1)
	echo "Diabetes: Yes";
else 
	echo "Diabetes: No";

echo "</div></div>";

?>
</div>
</body>



