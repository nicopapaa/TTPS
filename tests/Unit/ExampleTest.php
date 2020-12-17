<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Evaluacion;
use Carbon\Carbon;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReglas()
    {
        #regla1
        $obj = new Evaluacion();
        $response = $obj->validar(1);
        $this->assertEquals(true,$response);

        $response = $obj->validar(0);
        $this->assertEquals(false,$response);

        #regla2
        $response = $obj->validar_mecanica(3);
        $this->assertEquals(true,$response);

        $response = $obj->validar_mecanica(2);
        $this->assertEquals(true,$response);

        $response = $obj->validar_mecanica(1);
        $this->assertEquals(false,$response);

        #regla3
        $response = $obj->validar_frecuencia(31);
        $this->assertEquals(true,$response);

        $response = $obj->validar_frecuencia(30);
        $this->assertEquals(false,$response);

        #regla4

        $response = $obj->validar_fecha('2021-12-26');
        $this->assertEquals(true,$response);

        $response = $obj->validar_fecha('2020-12-22');
        $this->assertEquals(false,$response);

        #regla5
        $response = $obj->validar_oxigeno(92);
        $this->assertEquals(false,$response);

        $response = $obj->validar_oxigeno(100);
        $this->assertEquals(false,$response);

        $response = $obj->validar_oxigeno(91);
        $this->assertEquals(true,$response);

        #regla6
        $response = $obj->validar_porcentaje(12,10);
        $this->assertEquals(false,$response);

        $response = $obj->validar_porcentaje(13,10);
        $this->assertEquals(false,$response);


    }
}
