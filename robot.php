<?php

declare(strict_types=1);

class Robot
{
    public string $name = "";
    public static array $nameLog = [];
    public function getName(): string
    {
        if ($this->name === "") {
            $letters = [];
            for ($i = 0; $i < 2; $i++) {
                array_push($letters, chr(rand(65, 90)));
            }
            $nums = [];
            for ($i = 0; $i < 3; $i++) {
                array_push($nums, rand(0, 9));
            }
            $this->name = implode("", [...$letters, ...$nums]);
            if (in_array($this->name, self::$nameLog)) {
                $this->name = "";
                $this->getName();
            } else {
                array_push(self::$nameLog, $this->name);
            }
        }
        return $this->name;
        throw new \BadMethodCallException("Implement the getName method");
    }
    public function reset(): void
    {
        $this->name = "";
        return;
        throw new \BadMethodCallException("Implement the reset method");
    }
}
// Frirst Try 
// class Robot
// {
//     public string $name = "";
//     public function getName(): string
//     {
//         if (!$this->name) {
//             $this->setName();
//         }
//         return $this->name;
//     }
//     public function reset(): void
//     {
//         $this->getName();
//         die();
//     }
//     public function setName(): string
//     {
//         if ($this->name === "") {
//             $chara = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
//             $numbs = "123456789";
//             $this->name = substr(str_shuffle($chara), 0, 2) . '' . substr(str_shuffle($numbs), 0, 3);
//         }
//         return $this->name;
//     }
// }
