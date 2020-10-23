<?php

require_once "../src/models/vehicles/Vehicle.php";

final class MotorWay extends HighWay
{
    // 
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car) {
            $this->currentVehicle[] = $vehicle; 
        }
    }
}