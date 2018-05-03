<?php

trait Consommer
{
    protected $charge;
    protected $nbCharge;

    public function calculerResteBatterie()
    {
        return $this->charge;
    }

    public function nombreChargeBatterie()
    {
        return $this->nbCharge;
    }
}