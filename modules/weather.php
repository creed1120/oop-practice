<?php
require_once('classes/Weather.php');

// print_r(Weather::celiusToFarenhieght(40));

    $theWeather = Weather::getCurrentTempCondition(30);

?>

<div style="display: block; border: 1px solid #333333; padding: 30px; width: 500px; margin: 50px;">
    <h3>This is the "Weather Module Block"</h3>
    <p>Current Condition: <?php echo $theWeather ?></p>
</div>