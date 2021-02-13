<?php
$pets = [
    ['name' => 'Pico de Gato', 'bio' => 'Spicy kitty'],
];
$pets[] = ['name' => 'Waggy Pig', 'bio' => 'Little white dog'];
$pets[] = ['name' => 'Pancake', 'bio' => 'Breakfast is my favorite!'];
?>

<h1>
    <?php echo $pets[2]['bio']; ?>
</h1>