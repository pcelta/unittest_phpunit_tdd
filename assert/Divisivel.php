<?php

class Divisivel
{    
    public function eDivisivel($dividendo, $divisor)
    {
        return (bool) ($dividendo % $divisor == 0);
    }
}
