<h2>1) Bu dosyadaki kodu inceleyin ve $waggyPig dizisine tür alanı için 'breed' anahtarını ekleyin ve 'bichon' değerini verin. </h2>
<h2>2) Yeni bilgiyi yazdırın.</h2>
<hr>
<?php
$waggyPig = [
    'name' => 'Waggy Pig',
    'weight' => 10,
    'age' => 7,
    'bio' => 'Beyaz tüylü köpek'
];
?>

<h2><?php echo $waggyPig['name']; ?></h2>
<div class="age"><?php echo $waggyPig['age']; ?></div>
<div class="weight"><?php echo $waggyPig['weight']; ?></div>
<div class="breed">
    <!-- Türü burada yazdırın -->
</div>
<p><?php echo $waggyPig['bio']; ?></p>
