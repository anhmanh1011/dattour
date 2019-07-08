<?php namespace Web\Sitesetting\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
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
        'title_web',
        'description',
        'content'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_sitesetting_setting';
    public $attachOne = [
        'logo'   => 'System\Models\File',
        'logo_favicon'   => 'System\Models\File',
    ];
}
