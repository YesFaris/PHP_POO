<?php

class User
{
    // membres propriétés
    public string $nom;
    public string $prenom;
    private int $age;

    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
}