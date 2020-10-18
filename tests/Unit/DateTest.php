<?php

namespace Izt\Helpers\Tests\Unit;

use Izt\Helpers\Tests\TestCase;

class DateTest extends TestCase
{

    /** @test * */

    public function it_returns_dataHumans()
    {
        $this->assertEquals(
            "4 days ago",
            getDataHumans(now()->subDays(4))
        );
    }

    /** @test * */

    public function it_returns_datadiff()
    {
        $data1 = '2020-01-01 10:00:00';
        $data2 = '2020-01-01 12:00:00';

        $this->assertEquals(
            "02:00:00",
            getDataDiff($data1, $data2)
        );
    }
}
