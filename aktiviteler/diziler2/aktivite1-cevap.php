<?php
$waggyPig = [
    'name' => 'Waggy Pig',
    'weight' => 10,
    'age' => 7,
    'bio' => 'Beyaz tüylü köpek'
];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div>Yaş: <?php echo $waggyPig['age']; ?></div>
<div>Ağırlık: <?php echo $waggyPig['weight']; ?></div>
<p><?php echo $waggyPig['bio']; ?></p>