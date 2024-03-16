<?php

require_once '../app/services/ThongKeServices.php';

class ThongKeController
{
    private $thongKeServices;

    public function __construct()
    {
        $this->thongKeServices = new ThongKeServices();
    }

    public function index()
    {
      include_once '../app/views/layout/tongquan.php';
    }


}