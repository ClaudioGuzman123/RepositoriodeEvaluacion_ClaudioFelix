<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$empleados=[
["nombre" =>'juancho',  "sueldo"=> '2100'],
["nombre" =>'juan',     "sueldo"=> '2000'],
["nombre" =>'valeria',  "sueldo"=> '1900'],
["nombre" =>'alondra',  "sueldo"=> '2300'],
["nombre"=>'gabriel',  "sueldo"=> '1950'],
];
uasort($empleados,function($a,$b){
return$a['sueldo'] <=> $b['sueldo'];
});

echo "<br>";
foreach ($empleados as $empleado) {
echo "El empleado ". $empleado['nombre']. " tiene un sueldo de :". $empleado['sueldo'];
echo "<pre>";
}
echo "Empleados ordenados por sueldo";
echo "<br>";

array_push($empleados, ["nombre" =>'Mahoraga' , "sueldo"=>'20400']);
array_push($empleados, ["nombre" =>'Aarón' , "sueldo"=>'50400']);
foreach ($empleados as $empleado) {
echo "El empleado ". $empleado['nombre']. " tiene un sueldo de :". $empleado['sueldo'];
echo "<pre>";
}
?>
</body>
</html>