<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoxesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function(Blueprint $table) {
            $table->increments('id');
			$table->text('box_type');
			$table->text('title');
			$table->text('slug');
			$table->text('short_title');
			$table->text('marketing_description');
			$table->text('calories_kcal');
			$table->text('protein_grams');
			$table->text('fat_grams');
			$table->text('carbs_grams');
			$table->text('bulletpoint1');
			$table->text('bulletpoint2');
			$table->text('bulletpoint3');
			$table->text('recipe_diet_type_id');
			$table->text('season');
			$table->text('base');
			$table->text('protein_source');
			$table->text('preparation_time_minutes');
			$table->integer('shelf_life_days');
			$table->text('equipment_needed');
			$table->text('origin_country');
			$table->text('recipe_cuisine');
			$table->text('in_your_box');
			$table->text('gousto_reference');
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
        Schema::drop('boxes');
    }
}
