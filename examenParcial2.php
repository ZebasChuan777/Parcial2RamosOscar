<!DOCTYPE html>
<html>
<head>
	<title>Examen Parcial 2</title>
</head>
<body>
 <?php
   $array_numerico_indexado = array(1, "iPhone 10", "4000",2,"iPhone 11", "5500",3, "iPhone 12", "6500", 4, "iPhone 12 Pro Max", "8000", 5, "iPhone 15 Pro Max Hiper Mega Ultra Skibidi Sigma giga Chad Pomni", "55000");

   foreach($array_numerico_indexado as $telefono){
      echo $telefono . " <BR>";
   }

   array_push($array_numerico_indexado, 6, "Motorola g30",  "3000", 7, "Xiaomi Max", "6000");

   foreach($array_numerico_indexado as $telefono){
      echo $telefono . " <BR>";
   }

?> 
</body>
</html>