<?php

use Faker\Factory as Faker;
use App\Models\Bistro;
use App\Repositories\BistroRepository;

trait MakeBistroTrait
{
    /**
     * Create fake instance of Bistro and save it in database
     *
     * @param array $bistroFields
     * @return Bistro
     */
    public function makeBistro($bistroFields = [])
    {
        /** @var BistroRepository $bistroRepo */
        $bistroRepo = App::make(BistroRepository::class);
        $theme = $this->fakeBistroData($bistroFields);
        return $bistroRepo->create($theme);
    }

    /**
     * Get fake instance of Bistro
     *
     * @param array $bistroFields
     * @return Bistro
     */
    public function fakeBistro($bistroFields = [])
    {
        return new Bistro($this->fakeBistroData($bistroFields));
    }

    /**
     * Get fake data of Bistro
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBistroData($bistroFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id' => $fake->word,
			'name' => $fake->text,
			'created_at' => $fake->word,
			'updated_at' => $fake->word
        ], $bistroFields);
    }
}