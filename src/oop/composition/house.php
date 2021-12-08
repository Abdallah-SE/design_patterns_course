<?php
namespace desgignpattern\oop\composition;
class House
{
    private array $rooms;
    
    public function __construct(array $rooms) {
        $this->rooms = $rooms;
    }
    public function getName(): string {
        return $this->name;
    }
    
    
}