<?php
$walker1 = 'Ahmet';
$walker2 = 'Mehmet';
$walker3 = 'Baran';

$dogWalkers = array($walker1, $walker2, $walker3);

foreach ($dogWalkers as $walker) {
    echo '<h3>';
    echo $walker;
    echo ' <button> Planla </button>';
    echo '</h3>';
}
?>