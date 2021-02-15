<?php


// Istruzioni:
// Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
// Per chi non ha fantasia ecco qualche entitá che potete usare:
// Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc.


/**class Videogame
 * @author Andrea andrea.iglio@gmail.com
 * @copyright 2021 Andrea
 */

class Videogame {

    public $name;
    public $softwareHouse;
    public $year;
    public $genre;

    public function __construct(string $name, string $softwareHouse, int $year, string $genre )
    {
        
        $this->name = $name;
        $this->softwareHouse = $softwareHouse;
        $this->year = $year;
        $this->genre = $genre;


    }


}


$theWitcher3 = new Videogame('The Witcher 3', 'Cd Project', 2008, 'Fantasy MMO');
$gta = new Videogame('GTA V', 'Rockstar', 2014, "Action-adventure");

var_dump($gta, $theWitcher3);

$videogameList = [];

array_push($videogameList, $gta, $theWitcher3);

var_dump($videogameList);

?>