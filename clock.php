<?php

declare(strict_types=1);

class Clock 
{
    private DateTime $time;

    public function __construct(int $hour =0 ,int $min=0)
    {
        $this->time = (new DateTime())->setTime($hour,$min)->setDate(0,0,0);
    }

    public  function __toString()
    {
        return $this->time->format("H: i");
    }

    public function addMin(int $min): Clock
    {
        $this->time->modify("+{$min} minutes");
        return $this;
    }

    public function subMin(int $min): Clock
    {
        $this->time->modify("-{$min} minutes");
        return $this;
    }
}