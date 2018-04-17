<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

$directory="IMGG";
$dirint = dir($directory);
$i = 0;
$a= 0;



?>
<table>
<?php
while (($archivo = $dirint->read()) !== false)	{
	if ($archivo == '.' || $archivo == '..') {
		continue;
	}
	if ($i == 0 ) {
		echo '<tr>';
	}
		
?>
   <td><img src="IMGG/<?php echo $archivo ?>" style="width: 250px; height: 250px"></td> 
<?php

    $i++;		 
	if ($i == 4 || $i == ($a + 4)) {
		 $a = $i; 
		echo '</tr><tr>';
	}	
}	

?>


 </table>

</body>
</html>