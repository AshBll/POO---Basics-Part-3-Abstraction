<?php
    require_once "../src/models/vehicles/Vehicle.php";
    require_once "../src/models/way/HighWay.php";
    
    $car = new Car('red', 5, 'electric');
    $motorWay = new MotorWay(4, 130);
    $motorWay->addVehicle([$car]);
    var_dump($motorWay->getCurrentVehicles());
/**
 *  $pedestrianWay = new PedestrianWay(1, 10);
 *  $pedestrianWay = new MotorWay(4, 130);
 *  $pedestrianWay->addVehicle([$car]);
 *  var_dump($pedestrianWay->getCurrentVehicles());
 */   

/**
 * $ResidentialWay = new ResidentialWay(2, 50);
 * $ResidentialWay = new MotorWay(4, 130);
 * $ResidentialWay->addVehicle([$car]);
 * var_dump($ResidentialWay->getCurrentVehicles());
 */
    

    
