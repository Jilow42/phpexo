<?php

declare(strict_types=1);

class Matrix 
{
    private array $matrix;

    public function __constuct(string $input)
    {
        try {
            if($this->valid_input($input))
            {   
                $this->set_matrix($input);
            }
        } catch (InvalidArgumentException $e) {
            print($e->getMessage()."\n");
            exit;
        }   
    }

    private function valid_input(string $input): bool
    {
        
    }

    private function set_matrix(string $input): void
    {
        
    }
}