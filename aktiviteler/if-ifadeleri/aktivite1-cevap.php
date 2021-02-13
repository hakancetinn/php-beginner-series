<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <?php if (array_key_exists('color', $toy)) { ?>
        <h4><?php echo $toy['color']; ?></h4>
    <?php } ?>
<?php } ?>