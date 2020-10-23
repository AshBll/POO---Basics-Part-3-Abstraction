<?php

require_once "../src/models/vehicles/Vehicle.php";

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->currentVehicles = [];
    }

    public function addVehicle(array $Vehicles): void
    {
        if($vehicles instanceof Car || $vehicles instanceof Truk) {
            parent::setCurrentVehicles((array)$vehicles);
        }
    }
}