<h2>1) Bu dosyadaki kodu inceleyin ve aynı dizinde toys.json dosyası bulunuyor. toys.json dosyasını okuyun ve onu bir diziye dönüştürmek için <code>json_decode</code> kullanın.</h2>
<h2>2) foreach döngüsü içinde oyuncağın ayrıntılarının doğru şekilde yazdırıldığından emin olun. </h2>
<h2>3) toys.json'daki anahtarların yazdırdığınızla eşleştiğinden emin olun.</h2>

<!-- toys.json dosyasını okuyun ve $toys değişkenini ayarlayın -->

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>
