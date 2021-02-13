<h2>Bu dosyadaki kodu inceleyin. Aşağıdaki kodlar dosyadaki kodların sonrasına eklendiğinde ekrana ne yazdırır?</h2>
<pre><code>
        $var = cat();
        echo $var; echo ' the dog'; // echo '!';
</code></pre>
<ul style="list-style-type: upper-alpha">
    <li>Tuzak soru! Bunda bir hata olacak!.</li>
    <li>MOLLY the dog!</li>
    <li>Molly the dog</li>
    <li>MOLLY the dog</li>
</ul>

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
?>
