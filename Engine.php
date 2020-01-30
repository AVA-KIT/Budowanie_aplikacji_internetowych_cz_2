<?php

class Engine
{   const STEP =100;
    private $rmp = 0;
    public function accelerate(): self
    {
        $this -> rpm += $this -> calculateStep();
        return $this;
    }
    public function getRmp (): int
    { 
        return $this -> rmp;
    }
    private function calculateStep(): int
    {
        if ($this->rmp - self::STEP<0) {
            return $this->rmp;
        }
        if ($this->rmp +self::STEP>7000){

            return 7000 -$this->rmp;
        }
        return self::STEP;

    }
}