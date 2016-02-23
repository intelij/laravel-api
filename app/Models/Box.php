<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * @SWG\Definition(
 *      definition="Box",
 *      required={},
 * 		@SWG\Info(
 *         version="1.0.0",
 *         title="Technical Test Demo Solution",
 *         description="Api implementation",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="fred@fnkdesigns.co.uk"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="http://www.fnkdesigns.co.uk"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Some of my work can be found on this website",
 *         url="http://www.fnkdesigns.co.uk"
 *     ),
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="box_type",
 *          description="box_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="short_title",
 *          description="short_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="marketing_description",
 *          description="marketing_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="calories_kcal",
 *          description="calories_kcal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="protein_grams",
 *          description="protein_grams",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fat_grams",
 *          description="fat_grams",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="carbs_grams",
 *          description="carbs_grams",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bulletpoint1",
 *          description="bulletpoint1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bulletpoint2",
 *          description="bulletpoint2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bulletpoint3",
 *          description="bulletpoint3",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="recipe_diet_type_id",
 *          description="recipe_diet_type_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="season",
 *          description="season",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="base",
 *          description="base",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="protein_source",
 *          description="protein_source",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="preparation_time_minutes",
 *          description="preparation_time_minutes",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="shelf_life_days",
 *          description="shelf_life_days",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="equipment_needed",
 *          description="equipment_needed",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="origin_country",
 *          description="origin_country",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="recipe_cuisine",
 *          description="recipe_cuisine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="in_your_box",
 *          description="in_your_box",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gousto_reference",
 *          description="gousto_reference",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Box extends Model
{
    use SoftDeletes;

    public $table = "boxes";
    
	protected $dates = ['deleted_at'];

    
    public $fillable = [
        "box_type",
		"title",
		"slug",
		"short_title",
		"marketing_description",
		"calories_kcal",
		"protein_grams",
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "box_type" => "string",
		"title" => "string",
		"slug" => "string",
		"short_title" => "string",
		"marketing_description" => "string",
		"calories_kcal" => "string",
		"protein_grams" => "string",
		"fat_grams" => "string",
		"carbs_grams" => "string",
		"bulletpoint1" => "string",
		"bulletpoint2" => "string",
		"bulletpoint3" => "string",
		"recipe_diet_type_id" => "string",
		"season" => "string",
		"base" => "string",
		"protein_source" => "string",
		"preparation_time_minutes" => "string",
		"shelf_life_days" => "integer",
		"equipment_needed" => "string",
		"origin_country" => "string",
		"recipe_cuisine" => "string",
		"in_your_box" => "string",
		"gousto_reference" => "string"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "box_type" => "string",
		"title" => "string",
		"slug" => "string",
		"short_title" => "string",
		"marketing_description" => "string",
		"calories_kcal" => "string",
		"protein_grams" => "string",
		"fat_grams" => "string",
		"carbs_grams" => "string",
		"bulletpoint1" => "string",
		"bulletpoint2" => "string",
		"bulletpoint3" => "string",
		"recipe_diet_type_id" => "string",
		"season" => "string",
		"base" => "string",
		"protein_source" => "string",
		"preparation_time_minutes" => "string",
		"shelf_life_days" => "integer",
		"equipment_needed" => "string",
		"origin_country" => "string",
		"recipe_cuisine" => "string",
		"in_your_box" => "string",
		"gousto_reference" => "string"
    ];
}
