<h2>1) Bu dosyadaki kodu inceleyin. Aşağıdaki 3 olası durumu işlemek için bir if - elseif - else ifadesi kullanın.</h2>
<h2>2) Renk anahtarı varsa ve 'multiple' olarak ayarlanmışsa, "Birden Çok Renk" yazdırın.</h2>
<h2>3) Renk anahtarı yoksa, "renk yok" yazdırın.</h2>
<h3>4) Aksi takdirde, gerçek renk değerini yazdırın.</h3>
<hr>
<?php
$contents = file_get_contents('toys1.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4>
        <?php
        if (array_key_exists('color', $toy)) {
            echo $toy['color'];
        }
        ?>
    </h4>
<?php } ?>