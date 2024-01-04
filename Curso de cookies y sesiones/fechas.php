<?php


// //Obtener la fecha actual:
// $fecha_actual = date('Y-m-d'); // Retorna la fecha actual en formato 'año-mes-día'

// //Obtener la hora actual:
// $hora_actual = date('H:i:s'); // Retorna la hora actual en formato 'hora:minuto:segundo'

// //Convertir una fecha de texto a formato de fecha:
// $fecha_texto = '19-04-2023';
// $fecha = date_create_from_format('d-m-Y', $fecha_texto); // Retorna un objeto fecha

// //Sumar días a una fecha:
// $fecha = date_create('2023-04-19');
// $fecha->modify('+7 days'); // Suma 7 días a la fecha
// echo $fecha->format('Y-m-d'); // Retorna '2023-04-26'

// //Restar días a una fecha:
// $fecha = date_create('2023-04-19');
// $fecha->modify('-7 days'); // Resta 7 días a la fecha
// echo $fecha->format('Y-m-d'); // Retorna '2023-04-12'

// //Obtener el número de días entre dos fechas:
// $fecha1 = date_create('2023-04-19');
// $fecha2 = date_create('2023-05-01');
// $intervalo = date_diff($fecha1, $fecha2); // Retorna un objeto intervalo
// echo $intervalo->format('%R%a días'); // Retorna '+12 días'

// //Obtener el nombre del día de la semana:
// $fecha = date_create('2023-04-19');
// $nombre_dia = date_format($fecha, 'l'); // Retorna el nombre del día de la semana en inglés
// echo $nombre_dia; // Retorna 'Tuesday'

// //Obtener el nombre del mes:
// $fecha = date_create('2023-04-19');
// $nombre_mes = date_format($fecha, 'F'); // Retorna el nombre del mes completo
// echo $nombre_mes; // Retorna 'April'

//Por procedimientos / estruturada / funciones
$fechaActual=date_create();
$Intervalo=date_interval_create_from_date_string("5 days");
date_add($fechaActual,$Intervalo);
echo date_format($fechaActual,"Y-m-d");

echo "<br>";

//Procedimiento mediante POO
$_fechaActual=new DateTime();
$_intervalo=DateInterval::createFromDateString("5 days");
$_fechaActual->add($_intervalo);
echo $_fechaActual->format("Y-m-d");