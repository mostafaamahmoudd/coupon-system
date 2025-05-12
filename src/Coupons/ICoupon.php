<?php

namespace CouponSystem\Coupons;

interface ICoupon
{
    public function apply($total);
}