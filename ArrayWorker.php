<?php

class ArrayWorker
{
    protected $array = [];

    function __construct() {
        $this->fill();
        $this->reindex();
    }

    protected function fill()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->array[$i] = rand(1, 100);
        }
    }

    protected function reindex() {
        $maxIndex = array_keys($this->array, max($this->array))[0];
        $minIndex = array_keys($this->array, min($this->array))[0];
        
        $tmp = $this->array[$minIndex];
        $this->array[$minIndex] = $this->array[$maxIndex];
        $this->array[$maxIndex] = $tmp;

    }

    public function dump() {
        $maxIndex = array_keys($this->array, max($this->array))[0];
        $minIndex = array_keys($this->array, min($this->array))[0];

        print $maxIndex + $minIndex;
    }
}

$worker = new ArrayWorker();

$worker->dump();