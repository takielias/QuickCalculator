<?php

namespace TakiElias\QuickCalculator;

class QuickCalculator
{
    /**
     * Basic Functionalities of This Package.
     */

    private $firstValue1;
    private $secondValue1;
    private $result;

    public function plus(int $firstValue1, int $secondValue1): QuickCalculator
    {
        $this->firstValue1 += $firstValue1;
        $this->secondValue1 += $secondValue1;
        return $this;
    }

    public function minus(int $firstValue1, int $secondValue1): QuickCalculator
    {
        $this->firstValue1 -= $firstValue1;
        $this->secondValue1 -= $secondValue1;
        return $this;
    }

    public function summation(): QuickCalculator
    {
        $this->result = $this->firstValue1 + $this->secondValue1;
        return $this;
    }

    public function subtraction(): QuickCalculator
    {
        $this->result = $this->firstValue1 - $this->secondValue1;
        return $this;
    }

    public function get(): int
    {
        return $this->result;
    }
}
