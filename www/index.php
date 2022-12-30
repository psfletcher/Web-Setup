<!-- sudo chown -R psfletcher /var/www/html/ -->
<!-- set PATH=C:\path\to\putty\directory;%PATH% -->
<!-- https://divtable.com/table-styler/ -->


<!DOCTYPE html>
<html>
<body>

<head>

<?php
$SCHEME = $_SERVER['REQUEST_SCHEME'];
switch ($SCHEME) {
    case "http";
			define('CSS_PATH', 'css/blue.css');
		break;
    case "https":
			define('CSS_PATH', 'css/red.css');
		break;
    default:

	break;
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>">

<style>
//body {background-color: powderblue;}
h1   {color: black; font-size: 15px;}
p    {color: red;}
b 	 {color: red;}

#body {
#  background-color: lightblue;
#}

<?php
$HostName = gethostname();
switch ($HostName) {
    case "pedro-web-01":
		echo "h1 {";
		echo "  color: Blue;";
		echo "  text-align: center;";
		echo "  line-height: 0.8;";
		echo "  font-size: 40px;";
		echo "}";
		break;
    case "pedro-web-02":
		echo "h1 {";
		echo "  color: Red;";
		echo "  text-align: center;";
		echo "  line-height: 0.8;";
		echo "  font-size: 40px;";
		echo "}";
		break;
    case "pedro-web-03":
		echo "h1 {";
		echo "  color: Green;";
		echo "  text-align: center;;";
		echo "  line-height: 0.8;";
		echo "  font-size: 40px;";
		echo "}";
		break;
	case "swebserver01":
		echo "h1 {";
		echo "  color: Red;";
		echo "  text-align: center;;";
		echo "  line-height: 0.8;";
		echo "  font-size: 40px;";
		echo "}";
		break;
    default:
		echo "h1 {";
		echo "  color: black;";
		echo "  text-align: left;";
		echo "}";
		break;
}
?>

</style>

</head>

<?php
$HostName = gethostname();
echo "<h1> $HostName</h1>";
?>


<?php

$gethost=gethostname();

echo '<table style="width:100%">';
	echo "<thead>";
		echo "<tr>";
		echo "<th>SERVER DETAILS</th>";
		echo "<th>CONTENT</th>";
		echo "</tr>";	
	echo "</thead>";
	echo "<tr>";
	  echo "<td>Host Name Is</td>";
	  echo "<td>$gethost;</td>";
	echo "</tr>";

   while (list($var,$value) = each ($_SERVER)) {
      echo "<tr>";
	  echo "<td>$var</td>";
	  echo "<td>$value</td>";
	  echo "</tr>";
   }
echo "</table>";  
?>

</body>
</html>