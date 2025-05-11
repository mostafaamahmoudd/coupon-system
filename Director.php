<?php

use Factories\FixedDiscountFactory;
use Factories\PercentageDiscountFactory;
use Factories\ShippingCouponFactory;

class Director
{
    private $discountStrategy;

    public static function create($type, $value)
    {
        switch ($type) {
            case 'percentage':
                $discountStrategy = new PercentageDiscountFactory($value);
            case 'fixed':
                $discountStrategy = new FixedDiscountFactory($value);
            case 'shipping':
                $discountStrategy = new ShippingCouponFactory($value);
            default:
                throw new InvalidArgumentException("Invalid coupon type");
        }
    }

    public function calculateTotal($factory)
    {
        $this->discountStrategy = $factory->createCoupon();
    }

//    public static function calculateTotal($value)
//    {
//        return $this->discountStrategy->applyDiscount($value);
//    }
}