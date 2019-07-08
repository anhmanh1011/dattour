<?php 
class Cms5ce2f74cf34b3132765118_c581edc6523fd73af7a5d44bbf196707Class extends Cms\Classes\PageCode
{
public function onEnd(){
	  $this->page->meta_title = $this->meta_title;
      $this->page->meta_description = $this->meta_description;
      $this->page->meta_keyword = $this->meta_keyword;
      $this->page->canonical_url = $this->canonical_url;
      $this->page->robot_follow = $this->robot_follow;
      $this->page->robot_index = $this->robot_index;
	}
}
