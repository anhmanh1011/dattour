<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Tour as Tours;
use DB;
use Input;
use Mail;
use Validator;
use Redirect;
use Messages;
use ValidationException;
use Flash;

class BookTour extends ComponentBase{
  public $booktour;
	public function componentDetails(){
		return [
			'name' => 'Booktour',
			'description' => 'Book a tour'
		];
	}


	public function onRun(){
	}

	public function onBooktour(){
        $data = post();
        $rules = [
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required',
            'datepicker'    => 'required'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }else{
            $post_date = str_replace("/", "-",$data['datepicker']);
            $conver_date  = explode('-', $post_date);
            if (!empty($conver_date)) {
                $date_1 = $conver_date[1].'-'.$conver_date[0].'-'.$conver_date[2];
                $date = date('Y-m-d H:i:s',strtotime($date_1)); 
            }
            // $vars = [
            //     'email' => $data['email'], 
            //     'name' => $data['name'],
            //     'phone' => $data['phone'] ,
            //     'content' => $data['content'], 
            //     'adults' => $data['adults'],
            //     'children' => $data['children'] ,
            //     'baby' => $data['baby'],
            //     'date' => $date,
            //     'tour_title' => $data['tour_title'],
            //     'img1' => $data['img1'],
            //     'img2' => $data['img2'],
            //     'tour' => $data['tour'],
            //     'include' => $data['include'],
            //     'subject' => 'Book tour detail'
            // ];
            Db::table('web_hotel_order_tour')->insert([
                'tour_title' => $data['tour_title'],
                'name' => $data['name'],
                'email' => $data['email'], 
                'phone' => $data['phone'] ,
                'content' => $data['content'], 
                'adults' => $data['adults'],
                'children' => $data['children'] ,
                'baby' => $data['baby'],
                'date' => $date,
                'created_at' => now(),
                'status_id' => 1,
            ]);
            
            $vars1 = [
                'email' => $data['email'], 
                'name' => $data['name'],
                'phone' => $data['phone'],
                'content' => $data['content'], 
                'adults' => $data['adults'],
                'children' => $data['children'] ,
                'baby' => $data['baby'],
                'date' => $date,
                'tour_title' => $data['tour_title'],
                'img1' => $data['img1'],
                'img2' => $data['img2'],
                'tour_name' => $data['tour_name'],
                'tour_location' => $data['tour_location'],
                'tour_include' => $data['tour_include'],
                'subject' => 'Your online booking has been successful'
            ];
            Mail::send('web.hotel::mail.message_tour', $vars1, function ($message) {
                $message->to('quangakr97@gmail.com', 'Admin Person');
            });
            $emailc=$data['email'];
            Mail::sendTo($emailc, 'web.hotel::mail.confirm_tour', $vars1);
            Flash::success('Booking request has been sent!');

        }
	}
    public function onRateStar(){
        $data = post();
        
    }

}
