<?php

namespace App\Controllers;

class Restaurant extends BaseController
{
    public function index()
    {
        return $this->_loadDefaultView([], 'index');
    }
    public function about()
    {
        return $this->_loadDefaultView([], 'about');
    }
    public function contact()
    {
        return $this->_loadDefaultView([], 'contact');
    }
    public function product()
    {
        return $this->_loadDefaultView([], 'product');
    }
    public function service()
    {
        return $this->_loadDefaultView([], 'service');
    }
    public function team()
    {
        return $this->_loadDefaultView([], 'team');
    }
    public function testimonial()
    {
        return $this->_loadDefaultView([], 'testimonial');
    }
    public function faq()
    {
        return $this->_loadDefaultView([], 'faq');
    }

    private function _loadDefaultView(array $data, string $view)
    {

        $headerData = [];
        echo view("restaurant/templates/header", $headerData);
        echo view("restaurant/$view", $data);
        echo view('restaurant/templates/footer');
    }
}
