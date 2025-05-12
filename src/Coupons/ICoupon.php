<?php

namespace Mustafa\CouponSystem\Coupons;

interface ICoupon
{
    public function apply($total);
}