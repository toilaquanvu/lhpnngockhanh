<?php


require_once '../app/services/HoatDongServices.php';

class HoatDongController
{
    private $hoatDongServices;
    public function __construct()
    {
        $this->hoatDongServices = new HoatDongServices();
    }

    public function index()
    {
        $hoatDong = $this->hoatDongServices->getAllHoatDong();
        include_once '../app/views/hoatdong/index.php';
    }
}