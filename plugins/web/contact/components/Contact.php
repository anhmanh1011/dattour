<?php namespace Web\Contact\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Messages;
use ValidationException;
use Flash;
use Db;
class Contact extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'Contact',
			'description' => 'Form liên hệ khách hàng'
		];
	}
	public function onRun()
    {
        // $this->addCss('/plugins/web/contact/assets/css/contact.css');
    }
	public function onSend(){
		$data = post();
	    $rules = [
	        'email'  => 'required|email',
	    ];
	   
	    $validator = Validator::make($data, $rules);

	    if ($validator->fails()) {
	        throw new ValidationException($validator);
	    }else{
			$vars = [
				'email'   =>Input::get('email'),
			];
			Mail::send('web.hotel::mail.message_tour', $data, function($message) {
                $message->to('tuanthitluocdamdang@gmail.com', 'Admin Person');
                $message->to('quangakr97@gmail.com', 'Admin Person');
                $message->subject('Fomr Liên hệ');
            });

			Db::table('web_contact_contact')->insert([
                
                'email' => $vars['email'],
                
                 ]);
			 Flash::success('Gửi thành công!!');
		}
		
	}
}
