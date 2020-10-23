<?php
    require_once "../src/models/vehicles/Vehicle.php";
    require_once "../src/models/way/HighWay.php";
    
    $car = new Car('red', 5, 'electric');
    $motorWay = new MotorWay();
    $motorWay->addVehicle($car);
    var_dump($motorWay);

    $bicycle = new Bicycle('red', 1);
    $pedestrianWay = new PedestrianWay();
    $pedestrianWay->addVehicle($bicycle);
    var_dump($pedestrianWay);
    
    $avion = new Vehicle('black', 1, 'fuel');
    $ResidentialWay = new ResidentialWay();
    $ResidentialWay->addVehicle($avion);
    var_dump($ResidentialWay);

    

    
