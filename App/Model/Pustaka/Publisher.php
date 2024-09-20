<?php

namespace App\Model\Pustaka;

class Publisher
{
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone)
    {
        if (is_int($phone)) {
            $this->phone = $phone;
        } else {
            echo "Nomor telepon tidak valid.";
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }
}