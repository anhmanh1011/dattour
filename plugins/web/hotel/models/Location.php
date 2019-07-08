<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_location';

    public $belongsTo = [
        'states' => ['Web\Hotel\Models\States'],
        // 'types' => ['Web\Hotel\Models\TourType']
    ];
}
