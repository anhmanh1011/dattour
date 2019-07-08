<?php namespace Web\Slider\Models;

use Model;

/**
 * Model
 */
class SliderProduct extends Model
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
    public $table = 'web_slider_product';
    public $attachOne = [
        'slider_product'   => 'System\Models\File'
    ];
}
