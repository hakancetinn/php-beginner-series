<h2>CEVAP C</h2>

<?php
/*
 * A Functions!
 */
function cat()
{
    $dog = dog();
    // $dog = strtoupper($dog);

    return $dog;
}

/* Another function */
function dog()
{
    return 'Molly';
}

$var = cat();
echo $var; echo ' the dog'; // echo '!';