<?php

use Faker\Factory as Faker;
use App\Models\Box;
use App\Repositories\BoxRepository;

trait MakeBoxTrait
{
    /**
     * Create fake instance of Box and save it in database
     *
     * @param array $boxFields
     * @return Box
     */
    public function makeBox($boxFields = [])
    {
        /** @var BoxRepository $boxRepo */
        $boxRepo = App::make(BoxRepository::class);
        $theme = $this->fakeBoxData($boxFields);
        return $boxRepo->create($theme);
    }

    /**
     * Get fake instance of Box
     *
     * @param array $boxFields
     * @return Box
     */
    public function fakeBox($boxFields = [])
    {
        return new Box($this->fakeBoxData($boxFields));
    }

    /**
     * Get fake data of Box
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBoxData($boxFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id' => $fake->word,
			'box_type' => $fake->text,
			'title' => $fake->text,
			'slug' => $fake->text,
			'short_title' => $fake->text,
			'marketing_description' => $fake->text,
			'calories_kcal' => $fake->text,
			'protein_grams' => $fake->text,
			'fat_grams' => $fake->text,
			'carbs_grams' => $fake->text,
			'bulletpoint1' => $fake->text,
			'bulletpoint2' => $fake->text,
			'bulletpoint3' => $fake->text,
			'recipe_diet_type_id' => $fake->text,
			'season' => $fake->text,
			'base' => $fake->text,
			'protein_source' => $fake->text,
			'preparation_time_minutes' => $fake->text,
			'shelf_life_days' => $fake->randomDigitNotNull,
			'equipment_needed' => $fake->text,
			'origin_country' => $fake->text,
			'recipe_cuisine' => $fake->text,
			'in_your_box' => $fake->text,
			'gousto_reference' => $fake->text,
			'created_at' => $fake->word,
			'updated_at' => $fake->word
        ], $boxFields);
    }
}