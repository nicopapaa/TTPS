<?php

namespace Tests\Feature\app\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Somnolencia;

class EvolucionesController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $obj = new Somnolencia();
        $response = $obj->validar(1);
        $response->assertStatus(200);

    }

    public function testSomnolencia(){

    }
}
