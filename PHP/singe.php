<html>
<body>
    <?php
    $num = 10;
    $nbarbre = 5;
    $Location = 'arbres';

    $format= "Il y a %d singe dans chaque arbre, sachant qu'il y a %d %s combien il y a t'il de singes ?";
    echo sprintf($format,$num,$nbarbre,$Location);
    
