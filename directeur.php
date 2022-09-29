<?php

class Directeur extends Salarie{
    public $prime;
    function __construct($nom,$prenom,$nbh,$taux,$prime)
    {
        parent::__construct($nom,$prenom,$nbh,$taux);
        $this->prime=$prime;
    }
    function getcalcule(){
        $total=parent::getcalcule() + $this->prime;
        return $total;
    }
}


