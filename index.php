<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
 -->

 <?php
//  Creo la classe Movie
class Movie {
    // dentro alla classe definisco gli Attributi (variabili d'istanza)
    public $title;
    public $year;
    public $lang;

    // definisco un costruttore, una funzione da invocare quando si crea una istanza di classe. 
    // se ci passo dentro delle variabili, nel momento della creazione di istanza devo associarci un valore.
    function __construct($_title, $_year, $_lang) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> lang = $_lang;
    }
}

// uso il costruttore per creare istanza di movie
$strange = new Movie ("Doctor Strange nel Multiverso della Follia", 2022, "Eng");
$animali = new Movie ("Fantastic Beasts and Where To Find Them 3", 2022, "Eng");
$sonic = new Movie ("Sonic 2 – Il Film", 2022, "Eng");
$angeli ) new Movie ("Il sesso degli angeli", 2022, "Ita");
?>