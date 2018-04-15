<?php

class page
{
    public $title;
    public $id;

    public function setTitle($title) {
        $this->title = $title;
      }
      
    public function getTitle(){
        return $this->title;
    }

    public function setId($id) {
        $this->id = $id;
      }
      
    public function getId(){
        return $this->id;
    }
}

$pages_info = array();

$page_ids=get_all_page_ids();
foreach($page_ids as $page)
{
    $myPage = new page();
    $myPage->setTitle(get_the_title($page));
    $myPage->setId($page);
    $pages_info[] = $myPage;
}

foreach($pages_info as $page)
{
    if(strpos(strtolower($page->getTitle()), "home") !== false){

        $homeLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "athletes") !== false){

        $athletesLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "fans") !== false){

        $fansLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "road") !== false){

        $featureRoadmapLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "press") !== false){

        $pressLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "contact") !== false){

        $contactLink = $page->getId();
    }
    if(strpos(strtolower($page->getTitle()), "about") !== false){

        $aboutUsLink = $page->getId();
    }
}

?>