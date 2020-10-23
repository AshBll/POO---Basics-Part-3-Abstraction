<?php

require_once "../src/models/vehicles/Vehicle.php";

final class MotorWay extends HighWay
{
    // 
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(array $vehicles)
    {
        if($vehicles instanceof Vehicle) {
            parent::setCurrentVehicles((array)$vehicles);
        }
    }
}