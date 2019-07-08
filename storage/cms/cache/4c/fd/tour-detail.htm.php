<?php 
class Cms5ce2a19a1f8de169365149_1f01e18cd9e7b4f8fe7ff71d68e9d358Class extends Cms\Classes\PageCode
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
