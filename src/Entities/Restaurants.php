<?php

namespace App\Entities;

class Restaurants
{
    /**
     * @var Restaurant[]
     */
    private $restaurant;

    /**
     * @return Restaurant[]
     */
    public function getRestaurant(): array
    {
        return $this->restaurant;
    }

    /**
     * @param Restaurant[] $restaurant
     */
    public function setRestaurant(array $restaurant): void
    {
        $this->restaurant = $restaurant;
    }
}
