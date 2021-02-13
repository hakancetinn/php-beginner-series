<h2>1) Bu dosyadaki kodu inceleyin. Renk anahtarı olmayan bazı oyuncakların neden olduğu hatayı önlemek için bir if ifadesi kullanın.</h2>
<h2>2) Rengi bilmiyorsak, renk basmayın.</h2>
<hr>
<?php
$contents = file_get_contents('toys.json');
$toys = json_decode($contents, true);
?>

<?php foreach ($toys as $toy) { ?>
    <h3><?php echo $toy['name']; ?></h3>
    <h4><?php echo $toy['color']; ?></h4>
<?php } ?>