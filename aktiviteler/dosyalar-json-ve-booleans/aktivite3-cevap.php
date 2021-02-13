<?php
file_put_contents('dogfile.txt', 'Köpeklerin kuralı!');
$rule = file_get_contents('dogfile.txt');
?>

<h2><?php echo $rule; ?></h2>
