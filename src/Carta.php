<?php

namespace BaralhoFrances\Cartas;

use BaralhoFrances\Naipes\Naipe;

/**
 * @author Caio Almeida <caioamd@hotmail.com>
 */
class Carta
{
    protected $naipe;

    protected $simbolo;

    /**
     * @param Naipe  $naipe
     * @param string $simbolo
     */
    public function __construct(Naipe $naipe, $simbolo)
    {
        $this->naipe   = $naipe;
        $this->simbolo = $simbolo;
    }

    /**
     * @return Jamal\Naipes\Naipe
     */
    public function getNaipe()
    {
        return $this->naipe;
    }

    /**
     * @return string
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s / %s', $this->simbolo, $this->naipe);
    }
}
