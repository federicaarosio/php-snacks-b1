<!-- Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.) -->

<?php
class Pokemon {

public $name;
public $dimensione;
public $velocita;
public $grado_evoluzione;
public $peso;

public function getName() {
    return $this->name;
    }

public function getTipo() {
    return $this->tipo;
    }

public function getTrasportabilita() {
    return ($this-> peso) * ($this -> dimensione);
    }

    /**
     * Undocumented function
     *
     * @param string $_name Nome del pokemon
     * @param float $_dimensione Dimensione del pokemon in cm
     * @param float $_velocita Velocità del pokemon in km/h
     * @param integer $_grado_evoluzione Livello di evoluzoine del pokemon
     * @param float $_peso Peso del Pokemon in kg
     */
    public function __construct( string $_name, float $_dimensione, float $_velocita, int $_grado_evoluzione, float $_peso){
        $this -> name = $_name;
        $this -> dimensione = $_dimensione;
        $this -> velocita = $_velocita;
        $this -> grado_evoluzione = $_grado_evoluzione;
        $this -> peso = $_peso;
    }
    
}