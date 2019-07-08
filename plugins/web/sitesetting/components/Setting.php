<?php namespace Web\Sitesetting\Components;
use Cms\Classes\ComponentBase;
use Web\Sitesetting\Models\Settings;
Class Setting extends ComponentBase{
	public function componentDetails(){
		 return [
            'name'         => 'Footer',
            'description'  => 'Thông tin liên hệ, Logo'
        ];
	}
	public function onRun(){
	   $data  = $this->loadSetting();
        $this->page['description']     = $data[0]['description'];
        $this->page['title_web']       = $data[0]['title_web'];
       $this->page['content_web']      = $data[0]['content'];
       $this->page['link_group']       = $data[0]['link_group'];
       $this->page['link_facebook']    = $data[0]['link_facebook'];
       $this->page['meta_title']       = $data[0]['meta_title'];
       $this->page['meta_keywrod']     = $data[0]['meta_keywrod'];
       $this->page['meta_description'] = $data[0]['meta_description'];
       $this->page['phone']            = $data[0]['phone'];
       $this->page['hotline']          = $data[0]['hotline'];
       $this->page['email']            = $data[0]['email'];
       $this->page['address']          = $data[0]['address'];
       $this->page['canonical_url']    = $data[0]['canonical_url'];
       $this->page['robot_follow']     = $data[0]['robot_follow'];
       $this->page['robot_index']      = $data[0]['robot_index'];
       $this->page['logo']             = $data[0]['logo'];
       $this->page['logo_favicon']     = $data[0]['logo_favicon'];
       $this->page['live_chat']        = $data[0]['live_chat'];

	}
  	public function loadSetting(){
		$data = Settings::all();
		return $data;
	}
}
