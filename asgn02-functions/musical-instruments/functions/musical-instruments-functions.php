<?php
function applyDiscount($instruments, $discount) {
    $discountedInstruments = [];
    foreach ($instruments as $instrument) {
        $instrument['price'] -= $instrument['price'] * ($discount / 100);
        $discountedInstruments[] = $instrument;
    }
    return $discountedInstruments;
}

function applyDiscountByReference(&$instruments, $discount) {
    foreach ($instruments as &$instrument) {
        $instrument['price'] -= $instrument['price'] * ($discount / 100);
    }
}
?>