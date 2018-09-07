<?php
declare(strict_types=1);

class Mystere
{
    protected $random;
    protected $number;
    protected $count;

    public function __construct()
    {
        $this->random = random_int(0, 9);
        $this->count = 3;
        $this->$number = '<script type="text/javascript">prompt("Entrez un nombre entre 0 et 9 ", "<Entrez ici votre réponse>");</script>';
    }


    public function getResult(){
        if ($this->count < 1){
            return "Perdu !";
        }
        if ($this->random < $number){
            return "Trop grand, retente !";
        }
        if ($this->random > $number){
            return "Trop petit, retente !";
        }
        if ($this->random == $number){
            return "Gagné !";
        }
    }
    
   
}
?>

