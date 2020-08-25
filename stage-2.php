<?php
$number = $_SESSION['number'] + 1;
$second_number = $number + 100;
?>
Ваше любимое число - <?= htmlentities($_SESSION['number'] + 1 ) ?> 
<br>
Число <?php echo rand($number , $second_number); ?> Больше и лучше !
