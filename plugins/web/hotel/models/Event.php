<?php namespace Web\Hotel\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Event extends Model
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
    public $table = 'web_hotel_event';



    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        'description',
        'content',
        ['slug', 'index' => true]
    ];


    public $belongsTo = [
        'location' => ['Web\Hotel\Models\Location'],
    ];

    public $belongsToMany = [
        'types' =>[
            'Web\Hotel\Models\EventType',
            'table' => 'web_hotel_relation_event_type',
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

        if (!$user->hasAnyAccess(['web.hotel.access_delete'])) {
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
        $lastPage = $query->paginate($perPage, $page)->lastPage();
        if($lastPage < $page){
            $page = 1;
        }
        return $query->where('active', '=', 1)->whereDate('end_day', '>', date('Y-m-d'))->orderBy('created_at', 'asc')->paginate($perPage, $page);
    }
}
