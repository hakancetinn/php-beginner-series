<?php
$contents = file_get_contents('toys2.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4>
        <?php
        if (array_key_exists('color', $toy) && $toy['color'] = 'surprise') {
            echo 'Surprise Color!';
        } elseif !array_key_exists('color', $toy) {
            echo 'no color';
        } else {
            echo $toy['color'];
        }
        ?>
    </h4>
<?php } ?>