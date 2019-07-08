<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class EventType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
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
    public $table = 'web_hotel_event_type';
}
