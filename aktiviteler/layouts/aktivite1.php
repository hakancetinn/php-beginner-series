<h2>1) Tüm üst bilgi HTML'ini header.php'ye taşıyın ve tüm altbilgi HTML'ini footer.php'ye taşıyın.</h2>
<h2>2) Daha sonra, aktivite1.php ve aboutUs.php içindeki bu dosyaların her ikisinin de her iki sayfamızda da aynı düzeni almasını sağlayın.</h2>
<hr>

<?php
$petShopTagLine = 'Yavruları severiz!';
?>

<!-- HEADER CODE STARTS HERE -->
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <!-- HEADER CODE ENDS HERE -->

    <h1>PetShop.com'a Hoşgeldiniz!</h1>
    <h3><?php echo $petShopTagLine; ?></h3>

    <!-- FOOTER CODE STARTS HERE -->
    <footer>
        &copy; 2015 PetShop.com
    </footer>
</div>
</body>
</html>
<!-- FOOTER CODE ENDS HERE -->
