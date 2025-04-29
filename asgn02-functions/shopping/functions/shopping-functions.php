<?php
function calculateSubtotal($prices) {
    return array_sum($prices);
}

function applyDiscount($subtotal, $discountPercentage = 0) {
    $discountAmount = ($subtotal * $discountPercentage) / 100;
    return $subtotal - $discountAmount;
}

function calculateTotal($prices, $discountPercentage = 0) {
    $subtotal = calculateSubtotal($prices);
    $total = applyDiscount($subtotal, $discountPercentage);
    
    echo "Subtotal: $" . number_format($subtotal, 2) . "\n";
    echo "Discount Applied: " . $discountPercentage . "%\n";
    echo "Final Total: $" . number_format($total, 2) . "\n\n"; // Add an extra newline here
    
    return $total;
}

?>