<?php

namespace App\Entities;

class Buildings
{
    /**
     * @var Restaurants
     */
    private $restaurants;

    /**
     * @var Offices
     */
    private $offices;

    /**
     * @return Restaurants
     */
    public function getRestaurants(): Restaurants
    {
        return $this->restaurants;
    }

    /**
     * @param Restaurants $restaurants
     */
    public function setRestaurants(Restaurants $restaurants): void
    {
        $this->restaurants = $restaurants;
    }

    /**
     * @return Offices
     */
    public function getOffices(): Offices
    {
        return $this->offices;
    }

    /**
     * @param Offices $offices
     */
    public function setOffices(Offices $offices): void
    {
        $this->offices = $offices;
    }
}