<?php namespace Web\Hotel\Models;

use Model;
use BackendAuth;
use Backend\Models\User;

/**
 * Model
 */
class Room extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'price' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_room';


    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        'description',
        'content',
        ['slug', 'index' => true]
    ];


    public $belongsToMany = [
        'amenities' =>[
            'Web\Hotel\Models\Amenities',
            'table' => 'web_hotel_relation_type_room_amenities',
            'order' => 'name'
        ]
    ];
    public $belongsTo = [
        'hotels' =>['Web\Hotel\Models\Hotel'],
        'user_created' =>['Backend\Models\User']
    ];
    public $attachOne = [
        'image_preview' => 'System\Models\File'
        
    ];
    public $attachMany = [
        'album_images' => ['System\Models\File', 'order' => 'sort_order']
        
    ];
    public function filterFields($fields, $context = null)
    {
        $user = BackendAuth::getUser();

        if (!$user->hasAnyAccess(['Delete'])) {
            $fields->active->hidden = true;
            $fields->hot->hidden = true;
        }
        else {
            $fields->active->hidden = false;
            $fields->hot->hidden = false;
        }
    }
}   
