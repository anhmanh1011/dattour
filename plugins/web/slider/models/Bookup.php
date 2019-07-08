<?php namespace Web\Slider\Models;

use Model;

/**
 * Model
 */
class Bookup extends Model
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
    public $table = 'web_slider_bookup';
     public $attachOne = [
        'img_bookup'   => 'System\Models\File'
    ];
}
