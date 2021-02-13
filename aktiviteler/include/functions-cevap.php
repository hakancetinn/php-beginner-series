<?php
function get_great_pet_toys()
{
    $contents = file_get_contents('toys.json');
    $toys = json_decode($contents, true);

    return $toys;
}