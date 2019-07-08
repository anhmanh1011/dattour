<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Room;
use Web\Hotel\Models\Hotel;
use Redirect;
use DB;
use Input;
use Mail;
use Validator;
use Messages;
use ValidationException;
use Flash;

class RoomDetail extends ComponentBase
{
    public $hotel;
    public function componentDetails()
    {
        return [
            'name'         => 'Room detail',
            'description'  => 'Detail'
        ];
    }
    public function onRun()
    {
		$this->page['page'] = 'hotel';
        $data = $this->getDetailRoom();
        $this->page['hot_room'] = $this->getListHot();
        if ($data != null) {
            $this->page['meta_title']         = $data->name;
            $this->page['meta_description']   = $data->description;
            $this->page['meta_keyword']       = $data->seo_keywords;
            $this->page['robot_index']        = $data->robot_index;
            $this->page['robot_follow']       = $data->robot_follow;
            $this->page['address']              = $data->locationdetail;
            $this->page['content']              = $data->content;
            $this->page['room_detail']        = $data;
            $this->page['hotel_cate']         = $this->getListRoom($data->hotels_id, $data->id);
            
            $this->getHotel($data->hotels_id);
        } else {
            return Redirect::to('/404');
        }
    }
    public function getDetailRoom()
    {
        $slug  = $this->param('slug');
        $data = Room::transWhere('slug', $slug)->first();
        if (!empty($data)) {
            return $data;
        } else {
            return null;
        }
    }
    public function getListHot()
    {
        $data = Room::where('hot', 1)->where('active', 1)->take(4)->get();
        return $data;
    }
    public function getListRoom($id, $id_room)
    {
        $data = Room::whereHas('hotels', function ($q) use ($id) {
            $q->where('id', $id);
        })->where('id', '<>', $id_room)->where('active', 1)->get();
        return $data;
    }
    public function getHotel($id)
    {
        $this->page['hotel']  = Hotel::where('id', $id)->first();
        
    }

    public function onBookroom()
    {
        $data = post();
        // dump($data);
        // die();
        $rules = [
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required',
            'checkin'        => 'required',
            'checkout'       => 'required',
            'rooms'         => 'required',
            'adults'          => 'required',
            'children'        => 'required'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        } else {
            $date_checkin = str_replace("/", "-", $data['checkin']);
            $date_checkout = str_replace("/", "-", $data['checkout']);

            $conver_checkin  = explode('-', $date_checkin);
            $conver_checkout = explode('-', $date_checkout);
            if (!empty($conver_checkin) && !empty($conver_checkout)) {
                $date_1 = $conver_checkin[1] . '-' . $conver_checkin[0] . '-' . $conver_checkin[2];
                $date_2 = $conver_checkout[1] . '-' . $conver_checkout[0] . '-' . $conver_checkout[2];
                $checkint = date('Y-m-d H:i:s', strtotime($date_1));
                $checkout = date('Y-m-d H:i:s', strtotime($date_2));
            }

            Db::table('web_hotel_order_room')->insert([
                'email'          => $data['email'],
                'name'           => $data['name'],
                'phone'          => $data['phone'],
                'content'        => $data['content'],
                'adults'         => $data['adults'],
                'children'       => $data['children'],
                'check_in'       => $checkint,
                'check_out'      => $checkout,
                'number_rooms'   => $data['rooms'],
                'title_room'     => $data['title_room'],
                'created_at' => now(),
                'status_id' => 1,
            ]);

            Mail::send('web.hotel::mail.message_hotel', $data, function ($message) {
                $message->to('quangakr97@gmail.com', 'Admin Person');
                $message->subject('New Booking');
            }); 
            $emailc=$data['email'];
            Mail::sendTo($emailc, 'web.hotel::mail.confirm_hotel', $data);
            Flash::success('Successful booking !');
        }
    }
    public function onStar()
    {
        $post = post();
        $id   = $post['id'];
        $cate = $post['cate_id'];
        $star = $post['value'];
        if ($cate == 6) {
            if ($star == 4) {
                $star_count = DB::table('web_hotel_room')->where('id', $id)->first();
                $view_star = $star_count->star_4 + 1;
                Db::table('web_hotel_room')->where('id', $id)->update(['star_4' => $view_star]);
                $souvenir = DB::table('web_hotel_room')->where('id', $id)->first();
                $star = $souvenir->star_4 + $souvenir->star_5;
            } elseif ($star > 4) {
                $star_count = DB::table('web_hotel_room')->where('id', $id)->first();
                $view_star = $star_count->star_5 + 1;
                Db::table('web_hotel_room')->where('id', $id)->update(['star_5' => $view_star]);
                $souvenir = DB::table('web_hotel_room')->where('id', $id)->first();
                $star = $souvenir->star_4 + $souvenir->star_5;
            }
        }
        return response()->json($star);
    }
    public function onGetStarRate(){
        $post= post();
        // dump($post['value']);
        if($post['value']==4){
            Room::where('id', $post['id'])->update(['star_4' => $post['star_4']+1]);
        }
        elseif($post['value']==5){
            Room::where('id', $post['id'])->update(['star_5' => $post['star_5']+1]);
        }
	}
}

