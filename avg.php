<?php
function srednia($liczby) {
    if (empty($liczby)) {
        return 0;
    }
    return array_sum($liczby) / count($liczby);
}
<?php
function srednia($liczby) {
    if (empty($liczby)) {
        return 0;
    }
    return array_sum($liczby) / count($liczby);
}

function srednia_wazona($liczby, $wagi) {
    if (empty($liczby) || empty($wagi) || count($liczby) !== count($wagi)) {
        return 0;
    }

    $suma = 0;
    $suma_wag = array_sum($wagi);

    for ($i = 0; $i < count($liczby); $i++) {
        $suma += $liczby[$i] * $wagi[$i];
    }

    return $suma_wag ? $suma / $suma_wag : 0;
}