<?php

class Calc {
    public $num1;
    public $op;
    public $num2;

    public function __construct($one,$two,$three){
        $this->num1 = $one;
        $this->op = $two;
        $this->num2 = $three;
    }

    public function calculator(){
       switch ($this->op) {
        case 'Addition':
            $result = $this->num1 + $this->num2;
            return $result;
            break;
        case 'Substraction':
            $result = $this->num1 - $this->num2;
            return $result;
            break;
        case 'Multiplication':
            $result = $this->num1 * $this->num2;
            return $result;
            break;
        case 'Division':
            $result = $this->num1 / $this->num2;
            return $result;
            break;
        
        default:
            $result = 'Unknown Error Occurred!';
           return $result;
       }
    }
}