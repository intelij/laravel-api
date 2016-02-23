<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BoxApiTest extends TestCase
{
    use MakeBoxTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_boxes()
    {
        $box = $this->fakeBoxData();
        $this->json('POST', "/api/v1/boxes", $box);

        $this->assertApiResponse($box);
    }

    /**
     * @test
     */
    function it_can_read_box()
    {
        $box = $this->makeBox();
        $this->json("GET", "/api/v1/boxes/{$box->id}");

        $this->assertApiResponse($box->toArray());
    }

    /**
     * @test
     */
    function it_can_update_box()
    {
        $box = $this->makeBox();
        $editedBox = $this->fakeBoxData();

        $this->json('PUT', "/api/v1/boxes/{$box->id}", $editedBox);

        $this->assertApiResponse($editedBox);
    }

    /**
     * @test
     */
    function it_can_delete_boxes()
    {
        $box = $this->makeBox();
        $this->json("DELETE", "/api/v1/boxes/{$box->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/boxes/{$box->id}");

        $this->assertResponseStatus(404);
    }

}
