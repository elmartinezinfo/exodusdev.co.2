<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>svg</title>
</head>

<body>
<?php 
$request    = $_GET[svg];
$newsvg     = (isset($_GET[svg]));
$svgpath    = '../../svg/';
$svgdefault = "../../svg/approved.svg.php" ;
//-----------------------------------------------------
$svg = "";
switch($newsvg){
    case true:
    $svg = $svgpath.''.$request;
    break;
    
    case false:
    $svg = $svgdefault; 
    break;
}
if($svg != ""){
    require_once($svg); 
} else {
    echo "svg is not set";
    echo "debug:$request: ";
    echo $request;
    echo "<br>";
    echo "debug:$newsvg: ";
    echo $newsvg;
    echo "<br>";
    echo "debug:$svgpath: ";
    echo $svgpath;
    echo "<br>";
    echo "debug:$svgdefault: ";
    echo $svgdefault;
    echo "<br>";
    echo "debug:$svg: ";
    echo $svg;  
}
?>
</body>
</html>