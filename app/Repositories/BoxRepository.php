<?php

namespace App\Repositories;

use App\Models\Box;
use InfyOm\Generator\Common\BaseRepository;

class BoxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "box_type",
		"title",
		"slug",
		"short_title",
		"marketing_description",
		"calories_kcal",
		"fat_grams",
		"carbs_grams",
		"bulletpoint1",
		"bulletpoint2",
		"bulletpoint3",
		"recipe_diet_type_id",
		"season",
		"base",
		"protein_source",
		"preparation_time_minutes",
		"shelf_life_days",
		"equipment_needed",
		"origin_country",
		"recipe_cuisine",
		"in_your_box",
		"gousto_reference"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Box::class;
    }
}
