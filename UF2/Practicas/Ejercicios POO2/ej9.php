<?php

class Animal
{
    public string $nombre;
    public string $tipo;

    public function describir(): string
    {
        return 'Hola soy un ' . $this->tipo . ' y me llamo ' . $this->nombre;
    }
}

$animal = new Animal();
$animal->nombre = 'Gato';
$animal->tipo = 'Felino';

echo $animal->describir();