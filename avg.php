<?php
function srednia($liczby) {
    if (empty($liczby)) {
        return 0;
    }
    return array_sum($liczby) / count($liczby);
}
