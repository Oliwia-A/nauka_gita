<?php
function srednia($liczby) {
    if (empty($liczby)) {
        return 0; // lub: throw new Exception("Tablica jest pusta");
    }

    $suma = array_sum($liczby);
    $ilosc = count($liczby);

    return $suma / $ilosc;
}

// Przykład użycia:
$lista = [3, 5, 7, 10];
echo "Średnia: " . srednia($lista);  // Wynik: Średnia: 6.25
?>
