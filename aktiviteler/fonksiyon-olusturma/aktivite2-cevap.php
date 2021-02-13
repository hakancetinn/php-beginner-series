<?php
function get_great_pet_toys()
{
    $contents = file_get_contents('toys.json');
    return json_decode($contents, true);
}

$toys = get_great_pet_toys();
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>