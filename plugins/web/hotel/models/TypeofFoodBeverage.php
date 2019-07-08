<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class TypeofFoodBeverage extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
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
    public $table = 'web_hotel_food_beverage_type';
}
