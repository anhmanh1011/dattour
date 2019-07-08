<?php namespace Web\Hotel\Models;

use Model;

/**
 * Model
 */
class OrderFB extends Model
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
    public $table = 'web_hotel_order_f_b';
    public $belongsTo = [
        'status' => ['Web\Hotel\Models\Status'],
        'foodbeverage' => ['Web\Hotel\Models\FoodBeverage']
    ];
}
