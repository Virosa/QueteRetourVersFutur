<?php
/*$date = new DateTime;
var_dump($date);
echo $date->format('dS M Y');*/


$datestring = '07-24-2024';

$destinationTime = DateTime::createFromFormat('m-d-Y', $datestring);
$destinationTime->setTime(16, 30); 

echo $destinationTime->format('m d Y A h:i') . "<br>";
echo "Destination Time" . "<br>";


$presentTime = new DateTime('now');
echo $presentTime->format('m d Y A h:i') . "<br>";
echo "Present Time". "<br>";

$presentTime = new DateTime('now');
$destinationTime = new DateTimeImmutable('2024-07-24');
$interval = $presentTime->diff($destinationTime);

$years = $interval->format('%y');
$months = $interval->format('%m');
$days = $interval->format('%d');
$hours = $interval->format('%h');
$minutes = $interval->format('%i');

echo "intervalle entre les 2 dates : $years années, $months mois, $days jours, $hours heures et $minutes minutes." . "<br>";

$presentTime = strtotime('2023-11-03');
$destinationTime = strtotime('2024-07-24');
$diffInMinutes = ($destinationTime - $presentTime) / 60;

echo "nombre de minutes : " . "$diffInMinutes" . "<br>";

$petrolNeeded = intval($diffInMinutes / 10000);

echo " litres de carburant : " . "$petrolNeeded"."L";


