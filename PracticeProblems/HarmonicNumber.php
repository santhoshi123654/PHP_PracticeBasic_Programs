
<?php
function nthHarmonic($N)
{
    // H1 = 1
    $harmonic = 1.00;

    // Hn = H1 + H2 + H3 ... +
    // Hn-1 + Hn-1 + 1/n
    
    for ($i = 2; $i <= $N; $i++)
    {
        $harmonic += (float)1 / $i;
    }
 
    return $harmonic;
}
    $N = 8;
    echo nthHarmonic($N);
?>