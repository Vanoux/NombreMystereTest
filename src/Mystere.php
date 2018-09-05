<?php
declare(strict_types=1);

class Mystere
{
    protected $random;
    protected $number;

    public function __construct()
    {
        $this->random = random_int(0, 9);
    }

    public function getRandom(){
        return $this->random;
    }

    public function getResult(){
        if ($this->random === $this->number){
            return "Gagné !";
        }
        else if ($this->random < $this->number){
            return "Trop grand, retente !";
        }
        else if ($this->random > $this->number){
            return "Trop petit, retente !";
        }
    }
    
   
}

 // public function mystere()
    // {
    //     $number = random_int(0, 9);
    //     return $number;
    // }
?>
