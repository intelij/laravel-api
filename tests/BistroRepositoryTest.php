<?php

use App\Models\Bistro;
use App\Repositories\BistroRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BistroRepositoryTest extends TestCase
{
    use MakeBistroTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var BistroRepository
     */
    protected $bistroRepo;

    public function setUp()
    {
        parent::setUp();
        $this->bistroRepo = App::make(BistroRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_bistro()
    {
        $bistro = $this->fakeBistroData();
        $createdBistro = $this->bistroRepo->create($bistro);
        $createdBistro = $createdBistro->toArray();
        $this->assertArrayHasKey('id', $createdBistro);
        $this->assertNotNull($createdBistro['id'], 'Created Bistro must have id specified');
        $this->assertNotNull(Bistro::find($createdBistro['id']), 'Bistro with given id must be in DB');
        $this->assertModelData($bistro, $createdBistro);
    }

    /**
     * @test read
     */
    function it_reads_bistros()
    {
        $bistro = $this->makeBistro();
        $dbBistro = $this->bistroRepo->find($bistro->id);
        $dbBistro = $dbBistro->toArray();
        $this->assertModelData($bistro->toArray(), $dbBistro);
    }

    /**
     * @test update
     */
    function it_updates_bistro()
    {
        $bistro = $this->makeBistro();
        $fakeBistro = $this->fakeBistroData();
        $updatedBistro = $this->bistroRepo->update($fakeBistro, $bistro->id);
        $this->assertModelData($fakeBistro, $updatedBistro->toArray());
        $dbBistro = $this->bistroRepo->find($bistro->id);
        $this->assertModelData($fakeBistro, $dbBistro->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_bistro()
    {
        $bistro = $this->makeBistro();
        $resp = $this->bistroRepo->delete($bistro->id);
        $this->assertTrue($resp);
        $this->assertNull(Bistro::find($bistro->id), 'Bistro should not exist in DB');
    }
}