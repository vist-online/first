Если я прожил 943 миллиона секунд, то мой возраст -
<br>
<?php

function convertSecToTime($sec) {
 $date1 = new DateTime("@0");
 $date2 = new DateTime("@$sec");
 $interval =  date_diff($date1, $date2);
 return $interval->format('%y Лет, %m Месяцев, %d дней, %h часов, %i минут и %s секунд');
 }

if(isset($_GET['seconds'])) { $test = $_GET['seconds']; } else { $test = '0'; } 

$result = convertSecToTime(943000000 + $test);

echo $result;

echo '<br>';

?>

<form action="" method="get">
<input type="text" name="seconds">
<input type="submit" value="Добавить секунд">
<form>



