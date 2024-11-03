<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = array("leden","unor","brezen","duben","kveten","cerven","cervenec","srpen","zari","rijen","listopad","prosinec");

foreach ($months as $month) {
    echo $month .'<br>';
}

echo '<br>';

foreach ($months as $month) {
    if ($month == "cervenec" or $month == "srpen" or $month == "zari" or $month == "rijen" or $month == "listopad" or $month == "prosinec") {
        echo $month .'<br>';
    }
}
?>

