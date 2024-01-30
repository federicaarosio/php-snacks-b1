<!-- Parte 1:
Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona,
che accetti esclusivamente un numero intero. Se il numero inserito come argomento non dovesse essere un numero intero: allora
lanciare un'eccezione! -->

<?php 

class Persona {
    public $age;

    public function __construct(int $age){
        $this->$age = $age;
    }

    //Methods

    public function setAge($age) {
        if (is_int($age)) {
            $this->age = $age;
        } else {
            throw new Exception('Age MUST be of type integer!');
        };
    }

}

$persona1 = new Persona(24);

try {
    $persona1->setAge('ciao');
} catch(exception $e) {
    echo $e->getMessage();
}

?>