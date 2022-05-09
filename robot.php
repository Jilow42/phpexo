<?php

declare(strict_types=1);

class Robot
{
    public string $name = "";
    public function getName(): string
    {
        if (!$this->name) {
            $this->setName();
        }
        return $this->name;
    }
    public function reset(): void
    {
        $this->getName();
        die();
    }

    public function setName(): string
    {
        if ($this->name === "") {
            $chara = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $numbs = "123456789";
            $this->name = substr(str_shuffle($chara), 0, 2) . '' . substr(str_shuffle($numbs), 0, 3);
        }
        return $this->name;
    }
}
