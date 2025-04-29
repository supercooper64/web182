<?php
include('functions/musical-instruments-functions.php');

$instruments = [
  ['instrument' => 'Piano', 'price' => 3000],
  ['instrument' => 'Guitar', 'price' => 800],
  ['instrument' => 'Violin', 'price' => 1200],
  ['instrument' => 'Flute', 'price' => 500],
  ['instrument' => 'Drum Set', 'price' => 1500]
];

$discount = 10; // 10% discount

// Apply discount by value
$discountedInstruments = applyDiscount($instruments, $discount);
echo "Prices after applying discount (Pass by Value):\n";
print_r($discountedInstruments);

// Apply discount by reference
applyDiscountByReference($instruments, $discount);
echo "\nPrices after applying discount (Pass by Reference):\n";
print_r($instruments);
?>