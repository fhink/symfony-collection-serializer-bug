<?php

namespace App\Entities;

class Offices
{
    /**
     * @var Office[]
     */
    private $office;

    /**
     * @return Office[]
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param Office[] $office
     */
    public function setOffice($office): void
    {
        $this->office = $office;
    }
}