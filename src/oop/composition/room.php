<?php
namespace desgignpattern\oop\composition;
use desgignpattern\oop\composition\House;

class Room
{
    private string $color;
    private int $size;
    public function __construct(string $color, $size) {
        $this->color = $color;
        $this->size = $size;
    }
    
    public function setDeadLineTo(\DateInterval $interval) {
        $this->deadLine->add($interval);
    }
    public function showProjectInfo(): string{
    }
    
}