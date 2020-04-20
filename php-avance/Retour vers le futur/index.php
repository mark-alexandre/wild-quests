<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php

// Departure
$presentTime = new DateTime();
clone($presentTime);

// Parts separation
$day = date_format( $presentTime, 'd');
$month = date_format( $presentTime, 'M');
$year = date_format( $presentTime, 'Y');

$hourFormat = date_format( $presentTime, 'A');
$hour = date_format( $presentTime, 'h');
$min = date_format( $presentTime, 'i');
$presentTime = $presentTime->format('M-d-Y - A h:i');


// Arrival
$destinationTime = (new DateTime())->setDate('2020', '07', '31');

// Parts separation
$Aday = date_format( $destinationTime, 'd');
$Amonth = date_format( $destinationTime, 'M');
$Ayear = date_format( $destinationTime, 'Y');

$AhourFormat = date_format( $destinationTime, 'A');
$Ahour = date_format( $destinationTime, 'h');
$Amin = date_format( $destinationTime, 'i');
$ApresentTime = $destinationTime->format('M-d-Y - A h:i');

// HTML for CSS bonus quest
$destinationTime = $destinationTime->format('M-d-Y - A h:i');
?>

<!-- CSS Bonus -->
<div class="container fixed-size bg-dark">
    <div class="row">
        <div class="col-2">
            <div class="bg-red text-white text-center">MONTH</div>
            <div class="color-orange big-font-size text-center"><?php echo $month ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">DAY</div>
            <div class="color-orange big-font-size"><?php echo $day ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">YEAR</div>
            <div class="color-orange big-font-size text-center"><?php echo $year ;?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center p-0">AM</div>
            <div class="activate text-secondary text-center">&diams;</div>
            <div class="text-white bg-red text-center p-0">PM</div>
            <div class="not-activate text-success text-center">&diams;</div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">HOUR</div>
            <div class="color-orange big-font-size"><?php echo $hour ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">MIN</div>
            <div class="color-orange big-font-size"><?php echo $min ;?></div>
        </div>
    </div>
    <div class="row">
        <div class="destination bg-black mx-auto text-white px-3 py-0">
            <div class="destination-title text-center">
                DESTINATION TIME
            </div>
        </div>
        <div class="border-bottom w-100"></div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="bg-red text-white text-center">MONTH</div>
            <div class="color-green big-font-size text-center"><?php echo $Amonth ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">DAY</div>
            <div class="color-green big-font-size text-center"><?php echo $Aday ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">YEAR</div>
            <div class="color-green big-font-size text-center"><?php echo $Ayear ;?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">AM</div>
            <div class="activate text-secondary text-center">&diams;</div>
            <div class="text-white bg-red text-center text-center">PM</div>
            <div class="not-activate text-success text-center">&diams;</div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">HOUR</div>
            <div class="color-green big-font-size text-center"><?php echo $Ahour ;?></div>
        </div>
        <div class="col-2">
            <div class="bg-red text-white text-center">MIN</div>
            <div class="color-green big-font-size text-center"><?php echo $Amin ;?></div>
        </div>
    </div>
    <div class="row">
        <div class="destination bg-black mx-auto text-white px-3 py-0">
            <div class="destination-title text-center">
                PRESENT TIME
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous">
</script>
</body>
</html>