<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class OrderSouvenir extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_order_souvenir';

    public $belongsTo = [
        'status' => ['Web\Hotel\Models\Status'],
        'souvenir' => ['Web\Hotel\Models\Souvenir']
    ];
}
