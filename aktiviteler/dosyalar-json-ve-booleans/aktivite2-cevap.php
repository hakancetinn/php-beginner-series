<?php
$toysJson = file_get_contents('toys.json');
$toys = json_decode($toysJson, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>