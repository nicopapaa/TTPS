<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Somnolencia;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $obj = new Somnolencia();
        $response = $obj->validar(1);
        $this->assertEquals(true,$response);

        $obj = new Somnolencia();
        $response = $obj->validar(0);
        $this->assertEquals(false,$response);
    }
}
