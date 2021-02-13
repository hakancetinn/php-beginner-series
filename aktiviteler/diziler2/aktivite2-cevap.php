<?php
$waggyPig = [
    'name' => 'Waggy Pig',
    'weight' => 10,
    'age' => 7,
    'bio' => 'Beyaz tüylü köpek',
    'breed' => 'bichon'
];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<div class="breed">
    <?php echo $waggyPig['breed']; ?>
</div>
<p><?php echo $waggyPig['bio']; ?></p>