<?php

namespace App\Repositories;

use App\Models\GoustoBox;
use InfyOm\Generator\Common\BaseRepository;

class GoustoBoxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GoustoBox::class;
    }
}
