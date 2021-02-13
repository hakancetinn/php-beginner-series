<?php
$contents = file_get_contents('toys1.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4>
        <?php
        if (!array_key_exists('color', $toy)) {
            echo 'Renk yok';
        } elseif ($toy['color'] == 'multiple') {
            echo 'Birden çok renk';
        } else {
            echo $toy['color'];
        }
        ?>
    </h4>
<?php } ?>