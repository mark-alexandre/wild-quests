<?php

class Personne
{
    private string $lastName;
    private string $firstName;
    private string $adress;
    private int $birth;

    public function __construct(string $lastName, string $firstName, string $adress, int $birth) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->birth = $birth;
    }

    public function getInfo() {
        return 'Je m\'appelle ' . $this->lastName . ' ' . $this->firstName . ', je suis né en ' . $this->birth . ' et 
        j\'habite à cette adresse : ' . $this->adress;
    }

    public function setAdress(string $newAdress) {
        $this->adress = $newAdress;
    }

    public function calculAge(int $birth) {
        return 2020 - $birth;
    }
}