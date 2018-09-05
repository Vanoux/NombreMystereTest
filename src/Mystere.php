<?php
declare(strict_types=1);

class Mystere
{
    protected $random;

    public function __construct()
    {
        $this->random = random_int(0, 9);
    }

    public function getRandom(){
        return $this->random;
    }
   
}

 // public function mystere()
    // {
    //     $number = random_int(0, 9);
    //     return $number;
    // }
?>
