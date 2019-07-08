<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class Amenities extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_amenities';
}
