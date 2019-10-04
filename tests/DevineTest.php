<?php

use App\Services\Devine;
use PHPUnit\Framework\TestCase;

class DevineTest extends TestCase
{
    public function testIsWinner()
    {
        $numeroADeviner = 4;
        $tentative = 4;
        $d = new Devine($numeroADeviner, $tentative);
        $this->assertEquals($numeroADeviner, $d->isWinner());
    }


}
