<?php
//namespace desgignpattern;
use desgignpattern\oop\Employee;
use desgignpattern\oop\aggregation\Project;
use desgignpattern\oop\aggregation\Developer;
use desgignpattern\oop\composition\House;
use desgignpattern\oop\composition\Room;

require_once __DIR__.'/../vendor/autoload.php';
$abdallah = new Employee("Abdallah mahmoud", 26);
var_dump($abdallah);

/// About aggregation relationship
$abdallah = new Developer(name: "abdallah");
$mohamed = new Developer(name: "mohamed");
$ali = new Developer(name: "ali");

$xProjct = new Project(
        'X Project',
        new DateTime ('now'),
        [$abdallah, $mohamed,$ali]
);

$xProjct->setDeadLineTo(new DateInterval("P1M"));
var_dump($xProjct);
var_dump($xProjct->showProjectInfo());
unset($xProjct);
var_dump($mohamed->getName());


/// Simple example for composition
$room1 = new Room('white', 30);
$room2 = new Room('blue', 40);
$room3 = new Room('green', 50);

$house = new House([$room1,$room2,$room3]);