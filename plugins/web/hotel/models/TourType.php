<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class TourType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        ['slug', 'index' => true]
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_tour_type';
}
