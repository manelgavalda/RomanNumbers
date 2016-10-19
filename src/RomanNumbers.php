<?php

class RomanNumbers
{
    public function convert($number){

        $conver = array(
            1 => "I",
            5 => "V",
            10 => "X",
            50 =>
        );

        if ($number==10){
            return "X";
        }
        if ($number==5){
            return "V";
        }
        if ($number==4){

        }
        return str_repeat('I',$number);
        }


   }
