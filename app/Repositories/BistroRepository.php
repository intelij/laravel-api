<?php

namespace App\Repositories;

use App\Models\Bistro;
use InfyOm\Generator\Common\BaseRepository;

class BistroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "name"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bistro::class;
    }
}
