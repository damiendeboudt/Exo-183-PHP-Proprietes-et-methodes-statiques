<?php
class Vod {
   private $film = ["Avatar", "Leon", "Pokemon", "Le livre d'Eli", "blablabla"];
   private $tarif = 15;
   private static $abo = 245;

    /**
     * @return string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return int
     */
    public function getTarif(): int
    {
        return $this->tarif;
    }

    /**
     * @param int $tarif
     */
    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getAbo(): int
    {
        return self::$abo;
    }

    /**
     * @param int $abo
     */
    public static function setAbo(int $abo): void
    {
        self::$abo = $abo;
    }

    public static function AddAbo() {
        self::$abo++;
}

    public static function getAboAfterAdd(): int
    {
        return self::$abo;
    }
}