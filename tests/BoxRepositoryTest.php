<?php

use App\Models\Box;
use App\Repositories\BoxRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BoxRepositoryTest extends TestCase
{
    use MakeBoxTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var BoxRepository
     */
    protected $boxRepo;

    public function setUp()
    {
        parent::setUp();
        $this->boxRepo = App::make(BoxRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_box()
    {
        $box = $this->fakeBoxData();
        $createdBox = $this->boxRepo->create($box);
        $createdBox = $createdBox->toArray();
        $this->assertArrayHasKey('id', $createdBox);
        $this->assertNotNull($createdBox['id'], 'Created Box must have id specified');
        $this->assertNotNull(Box::find($createdBox['id']), 'Box with given id must be in DB');
        $this->assertModelData($box, $createdBox);
    }

    /**
     * @test read
     */
    function it_reads_boxes()
    {
        $box = $this->makeBox();
        $dbBox = $this->boxRepo->find($box->id);
        $dbBox = $dbBox->toArray();
        $this->assertModelData($box->toArray(), $dbBox);
    }

    /**
     * @test update
     */
    function it_updates_box()
    {
        $box = $this->makeBox();
        $fakeBox = $this->fakeBoxData();
        $updatedBox = $this->boxRepo->update($fakeBox, $box->id);
        $this->assertModelData($fakeBox, $updatedBox->toArray());
        $dbBox = $this->boxRepo->find($box->id);
        $this->assertModelData($fakeBox, $dbBox->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_box()
    {
        $box = $this->makeBox();
        $resp = $this->boxRepo->delete($box->id);
        $this->assertTrue($resp);
        $this->assertNull(Box::find($box->id), 'Box should not exist in DB');
    }
}