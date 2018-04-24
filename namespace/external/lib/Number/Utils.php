<?php
namespace Number;

class Utils
{
    /**
     * 
     * @param flaot $prix
     * @return string
     */
    public static function prixFr($prix)
    {
        return number_format($prix, 2, ',', ' ') . ' €';
    }
}
