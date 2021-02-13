<?php
$toys = [];
$toys[] = ['name' => 'Bacon Bone', 'color' => 'Bacon-colored'];
$toys[] = ['name' => 'Tennis Ball', 'color' => 'Yellow'];
$toys[] = ['name' => 'Frisbee', 'color' => 'Red'];
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>
