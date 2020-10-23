<?php

require_once "../src/models/vehicles/Vehicle.php";

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->currentVehicles = [];
    }

    public function addVehicle(array $vehicles): void
    {
        if($vehicles instanceof Bicycle) {
            parent::setCurrentVehicles((array)$vehicles);
        }
    }
}
