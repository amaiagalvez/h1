<?php

namespace Izt\Helpers\Tests\Unit;

use Izt\Helpers\Tests\TestCase;

class ListTest extends TestCase
{

    /** @test * */

    public function it_returns_a_comma_separated_string()
    {
        $this->assertEquals(
            "eu, es",
            getList('["eu", "es"]')
        );
    }
}
