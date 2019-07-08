<?php 
class Cms5ce2a361b8ace000598228_5beef43f12090ab6e2e2c8214ef053d4Class extends Cms\Classes\PageCode
{
public function onEnd(){
	$this->page->meta_title     = $this->meta_title;
	$this->page->meta_description = $this->meta_description;
	$this->page->meta_keyword   = $this->meta_keyword;
	$this->page->robot_follow   = $this->robot_follow;
	$this->page->robot_index    = $this->robot_index;
}
}
