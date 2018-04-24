<?php

class Humain
{
    public function voirElephant($elephant)
    {
        echo 'Il a de ' . $elephant->getTailleOreille() . ' oreilles';
    }
}
