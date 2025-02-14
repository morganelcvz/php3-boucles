<?php 

$month = "Février";
$totalDays = 28;
$specialDay = 14;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="datepicker">
	<div class="datepicker-top">
		<div class="month-selector">
			<button class="arrow"><i class="material-icons"><</i></button>
			<span class="month-name"><?= $month ?></span>
			<button class="arrow"><i class="material-icons">></i></button>
		</div>
	</div>
	<div class="datepicker-calendar">
		<span class="day">L</span>
		<span class="day">M</span>
		<span class="day">M</span>
		<span class="day">J</span>
		<span class="day">V</span>
		<span class="day">S</span>
		<span class="day">D</span>

        <?php
        for ($x = 1; $x <= $totalDays; $x++) {
            if ($x == $specialDay) {
                echo "<button class='date current-day'>$x</button>";
            }
            elseif ($x % 7 == 6 || $x % 7 == 0) {
                echo "<button class='date faded'>$x</button>";
            }
            else {
            echo "<button class='date'>$x</button>";
            }
          }
        ?>

	</div>
</div>
    
</body>
</html>

<!-- TEMPLATE : https://codepen.io/havardob/pen/eYdbewq -->