<?php namespace Web\Hotel\Models;

use Model;
use BackendAuth;
use Backend\Models\User;

/**
 * Model
 */
class Hotel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_';


    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        'locationdetail',
        'description',
        'content',
        ['slug', 'index' => true],
        'room_name',
        ['room_slug', 'index' => true],
    ];


    public $belongsTo = [
        'location' =>[
            'Web\Hotel\Models\Location',
            'table' => 'web_hotel_relation_hotel_location',
            'order' => 'name'
        ],
        'types' =>[
            'Web\Hotel\Models\HotelType',
            'table' => 'web_hotel_relation_hotel_type',
            'order' => 'name'
        ],
        'user_created' =>['Backend\Models\User']
    ];

    public $belongsToMany = [
        'amenities' =>[
            'Web\Hotel\Models\AmentitiesHotel',
            'table' => 'web_hotel_relation_amenities_hotel_hotel',
            'order' => 'name'
        ],
    ];

    public $attachOne = [
        'image_preview' => ['System\Models\File', 'order' => 'sort_order']
        
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
    public function scopeListFrontEnd($query, $options = []){
        extract(array_merge([
            'page' => 1,
            'perPage' => 36,
            'sort' => 'created_at desc',
            'state' => null,
            'type' => '',
            'amenities' => null,
            'trang' => 1,
        ], $options));

        if($state !== null) {
            if(!is_array($state)){
                $state = [$state];
            }
            $query->whereHas('location', function($q) use ($state){
                $q->whereIn('id', $state);
            });

        }

        if($type != null) {
            if(!is_array($type)){
                $type = [$type];
            }

            // foreach ($type as $loai){
            //     $query->whereHas('types', function($q) use ($loai){
            //         $q->where('id', '=', $loai);
            //     });
            // }
            $query->whereHas('types', function($q) use ($type){
                $q->whereIn('id', $type);
            });
        }
        if($amenities != null) {
            if(!is_array($amenities)){
                $amenities = [$amenities];
            }

            // foreach ($amenities as $tiennghi){
            //     $query->whereHas('amenities', function($q) use ($tiennghi){
            //         $q->where('id', '=', $tiennghi);
            //     });
            // }
            
            $query->whereHas('amenities', function($q) use ($amenities){
                $q->whereIn('id', $amenities);
            });
        }
        $lastPage = $query->paginate($perPage, $page)->lastPage();
        if($lastPage < $page){
            $page = 1;
        }
        return $query->where('active', '=', 1)->orderBy('created_at', 'asc')->paginate($perPage, $page);
    }
}
