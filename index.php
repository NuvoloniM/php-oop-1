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
    // dentro alla classe definisco gli Attributi, variabili d'istanza.
    public $title;
    public $year;
    public $lang;
    public $color;

    // definisco un costruttore, una funzione da invocare quando si crea una istanza di classe. 
    // se ci passo dentro delle variabili, nel momento della creazione di istanza devo associarci un valore.
    public function __construct($_title, $_year, $_lang){
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> lang = $_lang;
    }

    // creo un metodo che sarà valido solo per gli elementi che fanno parte della classe 
    public function setColor($lang){
        if ($lang == 'Ita') {
            $this -> color = 'lime';
        } else {
            $this -> color = 'lightblue';
        }
    }

    public function getColor(){
        return $this -> color;
    }
}

// uso il costruttore per creare istanza di movie
$strange = new Movie ("Doctor Strange nel Multiverso della Follia", 2022, "Eng");
$animali = new Movie ("Fantastic Beasts and Where To Find Them 3", 2022, "Eng");
$sonic = new Movie ("Sonic 2 – Il Film", 2022, "Eng");
$angeli = new Movie ("Il sesso degli angeli", 2022, "Ita");

//uso la funzione per settare il colore delle istanze di Movie appena create
$strange-> setcolor($strange->lang);
$animali-> setcolor($animali->lang);
$sonic-> setcolor($sonic->lang);
$angeli-> setcolor($angeli->lang);
// foreach ($strange as $key => $value){
//     echo  "<p>" . $strange -> $key . "</p>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Constructor</title>
</head>
<body>
    <div class="card" style="width: 18rem; background-color: <?php echo $strange->getColor() ?>">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $strange->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo $strange -> year ?></h6>
            <p class="card-text"> <?php echo $strange -> lang ?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; background-color: <?php echo $animali->getColor() ?>">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $animali->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo $animali -> year ?></h6>
            <p class="card-text"> <?php echo $animali -> lang ?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; background-color: <?php echo $sonic->getColor() ?>">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $sonic->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo $sonic -> year ?></h6>
            <p class="card-text"> <?php echo $sonic -> lang ?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; background-color: <?php echo $angeli->getColor() ?>">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $angeli->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo $angeli -> year ?></h6>
            <p class="card-text"> <?php echo $angeli -> lang ?></p>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>