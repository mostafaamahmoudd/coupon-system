<?php

$total = 100.00;

$percentageCoupon = Director::create('percentage', 10);
$discountTotal = $percentageCoupon->createCoupon($total);

echo "Total after percentage discount: $" . number_format($discountTotal, 2) . "\n";
