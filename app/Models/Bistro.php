<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @SWG\Definition(
 *      definition="Bistro",
 *      required={},
 *       * 		@SWG\Info(
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
 *          property="name",
 *          description="name",
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
class Bistro extends Model
{
    use SoftDeletes;

    public $table = "bistros";
    
	protected $dates = ['deleted_at'];

    
    public $fillable = [
        "name"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "name" => "string"
    ];
}
