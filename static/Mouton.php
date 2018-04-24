<?php

class Mouton
{
    /**
     * Un attribut statique appartient à la classe
     * ell-même et non aux objets instance de la classe
     *
     * @var int Le nombre de moutons
     */
    private static $nombre = 0;
    
    public function __construct()
    {
        self::$nombre++;
    }

    /**
     * 
     * @return int
     */
    public static function getNombre()
    {
        // self fait référence à la classe
        // et non à l'objet instance de la classe (= $this)
        return self::$nombre;
    }

    /*
     * $this n'a pas de sens dans une méthode statique
     * car $this fait référence à un objet instancié
    public static function dummy()
    {
        return $this;
    }
     * 
     */
}
