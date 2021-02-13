<h2>1) Bu dosyadaki kodları inceleyin. toys.json dosyasını okuyan ve içeriğini uygun şekilde döndüren get_great_pet_toys() adında bir fonksiyon oluşturun</h2>
<h2>2) $toys dizisini oluşturmak için bu fonksiyonu kullanın.</h2>
<hr>
<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>

