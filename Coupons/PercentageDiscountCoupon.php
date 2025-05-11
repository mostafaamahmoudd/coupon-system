<?php

class PercentageDiscountCoupon implements ICoupon
{
    private $precentage;

    /**
     * @param $precentage
     */
    public function __construct($precentage)
    {
        $this->precentage = $precentage;
    }


    public function apply($total)
    {
        return $total * (1 - $this->precentage / 100);
    }
}