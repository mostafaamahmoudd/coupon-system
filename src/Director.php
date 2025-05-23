<?php

namespace Mustafa\CouponSystem;

use InvalidArgumentException;
use Mustafa\CouponSystem\Factories\FixedDiscountFactory;
use Mustafa\CouponSystem\Factories\PercentageDiscountFactory;
use Mustafa\CouponSystem\Factories\ShippingCouponFactory;

class Director
{
    private static $instance = null;

    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function create($type, $value)
    {
        switch ($type) {
            case 'percentage':
                return new PercentageDiscountFactory($value);
            case 'fixed':
                return new FixedDiscountFactory($value);
            case 'shipping':
                return new ShippingCouponFactory($value);
            default:
                throw new InvalidArgumentException("Invalid coupon type");
        }
    }
}