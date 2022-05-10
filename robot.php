<?php

declare(strict_types=1);

class Robot
{
    function __construct()
    {
        $this->name = null;
        global $robots;
        $robots = [];
        if (!empty($GLOBALS["robots"])) {
            $this->$robots = $this->getName();;
            if (!in_array($robots, $GLOBALS["robots"])) {
                $robots = array_push($robots, $GLOBALS["robots"]);
                return $robots;
            }
        }
    }

    public function getName(): string
    {
        if (!$this->name) {
            $this->setName();
        }

        return $this->name;
    }

    public function reset(): void
    {
        $this->name = null;
        $this->name = $this->setName();
    }

    public function setName(): string
    {
        if (!$this->name) {
            $chara = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $numbs = "123456789";
            $this->name = substr(str_shuffle($chara), 0, 2) . '' . substr(str_shuffle($numbs), 0, 3);
        }
        return $this->name;
    }
}
