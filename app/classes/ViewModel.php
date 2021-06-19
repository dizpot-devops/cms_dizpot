<?php


class ViewModel
{

    public $pageTitle = '';
    public $menu = '';
    public $meta = array();
    public $data = array();

    public function __construct()
    {

    }


    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }


    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    public function setPageTitle(string $pageTitle): void
    {
        $this->pageTitle = $pageTitle;
    }
}