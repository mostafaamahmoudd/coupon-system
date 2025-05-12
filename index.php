<?php

require_once 'vendor/autoload.php';

use Mustafa\CouponSystem\Director;

$total = 100.00;

$percentageCoupon = Director::instance()->create('percentage', 10);
$coupon = $percentageCoupon->createCoupon();

echo "Total after percentage discount: $" . number_format($coupon->apply($total), 2) . "\n";
