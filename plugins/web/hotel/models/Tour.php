<?php namespace Web\Hotel\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Tour extends Model
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
        // 'location_id'=> 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'web_hotel_tour';

    public $belongsTo = [
        'locations' => ['Web\Hotel\Models\Location'],
        // 'types' => ['Web\Hotel\Models\TourType']
    ];

    //Đa ngôn ngữ
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        'locations',
        'departure_date',
        'description',
        'date_number',
        'content',
        'name_include',
        'title_day',
        'cont_day',
        ['slug', 'index' => true]
    ];



    protected $jsonable = ['include','content_day'];
    public $belongsToMany = [
        'types' => [
            'Web\Hotel\Models\TourType',
            'table' => 'web_hotel_relation_tour_type',
            'order' => 'name'
        ],
        'activities' => [
            'Web\Hotel\Models\TourActivities',
            'table' => 'web_hotel_relation_tour_activities',
            'order' => 'name'
        ],
        'hotel' => [
            'Web\Hotel\Models\Hotel',
            'table' => 'web_hotel_relation_tour_hotel',
            'order' => 'name'
        ],
    ];
    public $attachOne = [
        'image_preview' => 'System\Models\File',   
    ];
    public $attachMany = [
        'album' => 'System\Models\File',   
    ];
    public function filterFields($fields, $context = null)
    {
        $user = BackendAuth::getUser();
        if (!isset($fields->include)) {
            return;
        }

        if (!isset($fields->content_day)) {
            return;
        }


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
            'activity' => null,
            'pricemin' => 0,
            'pricemax' => 0,
            'trang' => 1,
        ], $options));
        if($state !== null) {
            if(!is_array($state)){
                $state = [$state];
            }
            $query->whereHas('locations', function($q) use ($state){
                $q->whereIn('id', $state);
            });

        }

        if($type != null) {
            if(!is_array($type)){
                $type = [$type];
            }
            $query->whereHas('types', function($q) use ($type){
                $q->whereIn('id', $type);
            });
        }
        if($activity != null){
            if(!is_array($activity)){
                $activity = [$activity];
            }

            $query->whereHas('activities', function($q) use ($activity){
                $q->whereIn('id', $activity);
            });

            // foreach ($activity as $activities){
            
            //     $query->orwhereHas('activities', function($q) use ($activities){
            //         $q->where('id', '=', $activities);
            //     });
            // }
        }
        if($pricemin != 0 && $pricemax != 0 && $pricemax > $pricemin){
            $query->whereBetween('price', [$pricemin, $pricemax]);
            $pricemin = 0;
            $pricemax = 0;
        }

        // dump($query);


        $lastPage = $query->paginate($perPage, $page)->lastPage();

        if($lastPage < $page){
            $page = 1;
        }

        return $query->where('active', '=', 1)->orderBy('created_at', 'asc')->paginate($perPage, $page);
    }
}
