<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
use Request;
use Redirect;
use Web\Hotel\Models\FoodBeverage;
use Web\Hotel\Models\Event;
use Web\Hotel\Models\Souvenir;
use Web\Hotel\Models\Location;
use DB;
use Flash;
use Messages;
use Mail;
use Validator;



/**
 * summary
 */
class ProductDetail extends ComponentBase
{
	/**
     * summary
     */
	public $product;
	public $listproduct;
	public function componentDetails()
	{
		return [
			'name' => 'View Detail List Product',
			'description' => 'Show Product',
		];
	}

	public function onRun()
	{
		$redirect = $this->getProductDetail();

		if ($redirect !== 404) {
			// seo

			$this->product  = $redirect;

			$this->name = $this->page['location_name'] = $redirect[1];
			$this->listproduct = $this->page['listproduct'] = $this->getlistProductDetail();
			$id = $this->param('id');
			if ($id == 3) {
				$slug = $this->param('slug');
				$this->page['slug'] =  $slug;
				$this->page['id']   = $id;
				$this->page['slug_cate'] = 'cuisine';
				$this->page['slug_name'] = 'FOOD & BEVERAGE';
			}
			if ($id == 4) {
				$slug = $this->param('slug');
				$this->page['slug'] =  $slug;
				$this->page['id']   = $id;
				$this->page['slug_cate'] = 'event';
				$this->page['slug_name'] = 'EVENT TODAY';
			}

			if ($id == 5) {
				$slug = $this->param('slug');
				$this->page['slug'] =  $slug;
				$this->page['id']   = $id;
				$this->page['slug_cate'] = 'service-store';
				$this->page['slug_name'] = 'Service & Store';
			}
		} else {
			return Redirect::to('/404');
		}
	}

	public function getProductDetail()
	{
		$id    = $this->param('id');
		if ($id == 3) {
			$slug = $this->param('slug');
			$data = FoodBeverage::where('slug', $slug)->first();
			return $data;
		} elseif ($id == 4) {
			$slug  = $this->param('slug');
			$data = Event::where('slug', $slug)->first();
			return $data;
		} elseif ($id == 5) {
			$slug = $this->param('slug');
			$data = Souvenir::where('slug', $slug)->first();
			return $data;
		} else {
			$data = 404;
			return $data;
		}
	}

	public function onAjaxbook()
	{
		$data = post();
		$id    = $this->param('id');
		// die($data['id_product']);
		$data['subject'] = 'New Booking in 420Hospitality';
		if ($id == 3) {
			
			$data['product'] = FoodBeverage::where('id', $data['id_product'])->first();
			// die($data['product']['name']);
			Db::table('web_hotel_order_f_b')->insert([
				'name' => $data['name'],
				'phone' => $data['phone'],
				'email' => $data['email'],
				'content' => $data['content'],
				'fb_title' => $data['detail_product'],
                'created_at' => now(),
                'status_id' => 1,
			]);
		}
		if ($id == 4) {
			$data['product'] = Event::where('id', $data['id_product'])->first();
			Db::table('web_hotel_order_event')->insert([
				'name' => $data['name'],
				'phone' => $data['phone'],
				'email' => $data['email'],
				'content' => $data['content'],
				'event_title' => $data['detail_product'],
                'created_at' => now(),
                'status_id' => 1,
			]);
		}
		if ($id == 5) {
			$data['product'] = Souvenir::where('id', $data['id_product'])->first();
			Db::table('web_hotel_order_souvenir')->insert([
				'name' => $data['name'],
				'phone' => $data['phone'],
				'email' => $data['email'],
				'content' => $data['content'],
				'souvenir_title' => $data['detail_product'],
                'created_at' => now(),
                'status_id' => 1,
			]);
		}
		Mail::send('web.hotel::mail.product', $data, function ($message) {
			$message->to('quangakr97@gmail.com', 'Admin Person');
		});
		Flash::success('Order request has been sent !');
	}

	public function getlistProductDetail()
	{
		$id = $this->param('id');
		if ($id == 3) {
			$data = FoodBeverage::where('active', 1)->where('discount', '!=', 0)->take(3)->orderby('id', 'DESC')->get();
			$this->page['page'] = 'cuisine';
			return $data;
		}
		if ($id == 4) {
			$data = Event::where('active', 1)->where('discount', '!=', 0)->take(3)->orderby('id', 'DESC')->get();
			$this->page['page'] = 'event';
			return $data;
		}

		if ($id == 5) {
			$data = Souvenir::where('active', 1)->where('discount', '!=', 0)->take(3)->orderby('id', 'DESC')->get();
			$this->page['page'] = 'store';
			return $data;
		}
	}
	public function onStar()
	{
		$post = post();
		$id   = $post['id'];
		$cate = $post['cate_id'];
		$star = $post['value'];
		if ($cate == 3) {
			if ($star == 4) {
				$star_count = DB::table('web_hotel_food_beverage')->where('id', $id)->first();
				$view_star = $star_count->star_4 + 1;
				Db::table('web_hotel_food_beverage')->where('id', $id)->update(['star_4' => $view_star]);
				$food = DB::table('web_hotel_food_beverage')->where('id', $id)->first();
				$star = $food->star_4 + $food->star_5;
			} elseif ($star > 4) {
				$star_count = DB::table('web_hotel_food_beverage')->where('id', $id)->first();
				$view_star = $star_count->star_5 + 1;
				Db::table('web_hotel_food_beverage')->where('id', $id)->update(['star_5' => $view_star]);
				$food = DB::table('web_hotel_food_beverage')->where('id', $id)->first();
				$star = $food->star_4 + $food->star_5;
			}
		}
		if ($cate == 4) {
			if ($star == 4) {
				$star_count = DB::table('web_hotel_event')->where('id', $id)->first();
				$view_star = $star_count->star_4 + 1;
				Db::table('web_hotel_event')->where('id', $id)->update(['star_4' => $view_star]);
				$event = DB::table('web_hotel_event')->where('id', $id)->first();
				$star = $event->star_4 + $event->star_5;
			} elseif ($star > 4) {
				$star_count = DB::table('web_hotel_event')->where('id', $id)->first();
				$view_star = $star_count->star_5 + 1;
				Db::table('web_hotel_event')->where('id', $id)->update(['star_5' => $view_star]);
				$event = DB::table('web_hotel_event')->where('id', $id)->first();
				$star = $event->star_4 + $event->star_5;
			}
		}
		if ($cate == 5) {
			if ($star == 4) {
				$star_count = DB::table('web_hotel_souvenir')->where('id', $id)->first();
				$view_star = $star_count->star_4 + 1;
				Db::table('web_hotel_souvenir')->where('id', $id)->update(['star_4' => $view_star]);
				$souvenir = DB::table('web_hotel_souvenir')->where('id', $id)->first();
				$star = $souvenir->star_4 + $souvenir->star_5;
			} elseif ($star > 4) {
				$star_count = DB::table('web_hotel_souvenir')->where('id', $id)->first();
				$view_star = $star_count->star_5 + 1;
				Db::table('web_hotel_souvenir')->where('id', $id)->update(['star_5' => $view_star]);
				$souvenir = DB::table('web_hotel_souvenir')->where('id', $id)->first();
				$star = $souvenir->star_4 + $souvenir->star_5;
			}
		}
		return response()->json($star);
	}
}

