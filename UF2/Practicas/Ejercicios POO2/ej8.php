<?php

class Animal
{
    public string $nombre;
    public string $tipo;

    public function describir(): string
    {
        return 'El animal es un ' . $this->nombre . ' y es un ' . $this->tipo;
    }
}

$animal = new Animal();
$animal->nombre = 'Gato';
$animal->tipo = 'Felino';

echo $animal->describir();