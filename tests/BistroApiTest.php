<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BistroApiTest extends TestCase
{
    use MakeBistroTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_bistros()
    {
        $bistro = $this->fakeBistroData();
        $this->json('POST', "/api/v1/bistros", $bistro);

        $this->assertApiResponse($bistro);
    }

    /**
     * @test
     */
    function it_can_read_bistro()
    {
        $bistro = $this->makeBistro();
        $this->json("GET", "/api/v1/bistros/{$bistro->id}");

        $this->assertApiResponse($bistro->toArray());
    }

    /**
     * @test
     */
    function it_can_update_bistro()
    {
        $bistro = $this->makeBistro();
        $editedBistro = $this->fakeBistroData();

        $this->json('PUT', "/api/v1/bistros/{$bistro->id}", $editedBistro);

        $this->assertApiResponse($editedBistro);
    }

    /**
     * @test
     */
    function it_can_delete_bistros()
    {
        $bistro = $this->makeBistro();
        $this->json("DELETE", "/api/v1/bistros/{$bistro->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/bistros/{$bistro->id}");

        $this->assertResponseStatus(404);
    }

}
