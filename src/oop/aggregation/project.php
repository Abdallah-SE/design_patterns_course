<?php
namespace desgignpattern\oop\aggregation;
use desgignpattern\oop\aggregation\Developer;

class Project
{
    private string $name;
    private \DateTime $deadLine;
    
    private array $developer;
    public function __construct(string $name, \DateTime $deadLine, array $developer) {
        $this->name = $name;
        $this->deadLine = $deadLine;
        $this->developer = $developer;
    }
    
    public function setDeadLineTo(\DateInterval $interval) {
        $this->deadLine->add($interval);
    }
    public function showProjectInfo(): string{
        $developers = array_map(function(Developer $dev){
            return $dev->getName();
        }, $this->developer);
        $list_developer = implode(', ', $developers);
        return "
            Project Name : {$this->name}\n
            Project Deadline : {$this->deadLine->format("Y-m-d")}\n
            The team: {$list_developer}\n
        ";
    }
    
}