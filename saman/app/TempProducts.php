<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 10/28/2019 AD
 * Time: 2:46 AM
 */

namespace App;


class TempProducts
{
    public $Id;
    public $Count;
    public $Discount;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }



    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param mixed $Count
     */
    public function setCount($Count)
    {
        $this->Count = $Count;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param mixed $Discount
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;
    }

}