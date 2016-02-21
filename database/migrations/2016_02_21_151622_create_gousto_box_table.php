<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoustoBoxesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gousto_box', function(Blueprint $table) {
            $table->increments('id');
			$table->text('box_type');
			$table->text('title');
			$table->text('slug');
			$table->text('short_title');
			$table->text('marketing_description');
			$table->number('calories_kcal');
			$table->number('protein_grams');
			$table->number('carbs_grams');
			$table->text('bulletpoint1');
			$table->text('bulletpoint2');
			$table->text('bulletpoint3');
			$table->text('recipe_diet_type_id');
			$table->text('season');
			$table->text('base');
			$table->text('protein_source');
			$table->number('preperation_time_munites');
			$table->number('shelf_life_days');
			$table->text('equipment_needed');
			$table->text('origin_country');
			$table->text('recipe_cuisine');
			$table->text('in_your_box');
			$table->number('gousto_reference');
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gousto_box');
    }
}
