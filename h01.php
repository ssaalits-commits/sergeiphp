<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Harjutused</title>
</head>
<body>
    <h1>Harjutus 01</h1>

<p>
    <?php
        //Sergei Säälits
        //Harjutus 01
        $nimi = "Sergei";
        $aasta =    1998;
        $kuju = "skorpion";

        echo $nimi."<br>".$aasta."<br>".$kuju;
        echo "<br>";
        echo "\"It’s My Life\” - Dr. Alban<br>";
        echo '(\(\<br>( -_-)<br>o_(")(")';


    ?>
</p>
<h2>Harjus 02</h2>
Iga ülesanne hakkab kommentaariga, kus on kirjas ülesande number, sinu nimi ja kuupäev
Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel näidatakse ka tehet ja kuvatakse eraldi ridadel. 
Koosta kood, mis teisendab millimeetrid (mm) sentimeetriteks (cm) ja meetriteks (m). Vastus vormindatakse 2 kohta pärast koma.
Leia täisnurkse kolmnurga ümbermõõt ja pindala. Vastused ümardada täisarvuni ja täislausega palun.
<?php
    $arv1 = 5;
    $arv2 = 6;
    echo $arv1." + ".$arv2." = ".$arv1+$arv2."<br>";
    echo $arv1." - ".$arv2." = ".$arv1-$arv2."<br>";
    echo $arv1." * ".$arv2." = ".$arv1*$arv2."<br>";
    echo $arv1." / ".$arv2." = ".$arv1/$arv2."<br>";
?>
</body>
</html>