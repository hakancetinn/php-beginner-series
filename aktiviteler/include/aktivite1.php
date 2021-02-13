<h2>Bu dosyadaki kodları inceleyin. get_great_pet_toys () fonksiyonunu yeni bir functions.php dosyasına taşıyın, böylece onu daha sonra yeniden kullanabiliriz.</h2>
<hr>
<?php
function get_great_pet_toys()
{
    $contents = file_get_contents('toys.json');
    $toys = json_decode($contents, true);

    return $toys;
}

$toys = get_great_pet_toys();
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>