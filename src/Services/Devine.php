<?php


namespace App\Services;


class Devine
{

    private $numeroADeviner;
    private $tentatives;

    /**
     * Devine constructor.
     * @param int $numeroADeviner
     * @param int $tentatives
     */
    public function __construct(int $numeroADeviner, int $tentatives)
    {
        $this->numeroADeviner = $numeroADeviner;
        $this->tentatives = $tentatives;
    }

    public function reset()
    {
        try {
            unset($this->tentatives, $this->numeroADeviner);
        } catch (\Exception $e) {
            echo "\nErreur : la session n'a pas été réinitialisée\n".$e->getMessage();
        }
    }

    public function addTentative()
    {
        if ($this->tentatives != $this->numeroADeviner) {
            $this->tentatives .= $this->tentatives;
        }
        return true;
    }

    public function isWinner($tentatives)
    {/*
        if ($this->tentatives == $this->numeroADeviner) {
            echo "Vous avez gagné";
        }*/
        return $tentatives == $this->numeroADeviner;
    }


    public function conditionReussite()
    {

    }

    //GETTER ET SETTER

    /**
     * @return int
     */
    public function getNumeroADeviner(): int
    {
        return $this->numeroADeviner;
    }

    /**
     * @param int $numeroADeviner
     */
    public function setNumeroADeviner(int $numeroADeviner): void
    {
        $this->numeroADeviner = $numeroADeviner;
    }

    /**
     * @return array
     */
    public function getTentatives(): array
    {
        return $this->tentatives;
    }

    /**
     * @param array $tentatives
     */
    public function setTentatives(array $tentatives): void
    {
        $this->tentatives = $tentatives;
    }
}