<?php 
class Cms5ce325c578a86188729655_50e3183d88d15b6c2a058fd4c1528b08Class extends Cms\Classes\PageCode
{
public function onEnd(){
 $this->page->meta_title     = $this->meta_title;
 $this->page->meta_description = $this->meta_description;
 $this->page->meta_keyword   = $this->meta_keyword;
 $this->page->robot_follow   = $this->robot_follow;
 $this->page->robot_index    = $this->robot_index;
}
}
