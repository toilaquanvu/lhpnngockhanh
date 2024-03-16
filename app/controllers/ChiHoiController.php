<?php

require_once '../app/services/ChiHoiServices.php';

class ChiHoiController
{
    private $chiHoiServices;

    public function __construct()
    {
        $this->chiHoiServices = new ChiHoiServices();
    }

    public function index()
    {
        $chiHoi = $this->chiHoiServices->getAllChiHoi();
        require_once '../app/views/chihoi/index.php';
    }

    public function create()
    {
        require_once '../app/views/chihoi/create.php';
    }

    public function store()
    {
        $tenChiHoi = $_POST['ten_chi_hoi'];
        $diaChi = $_POST['dia_chi'];
        $soDienThoai = $_POST['so_dien_thoai'];
        $email = $_POST['email'];
        $chuTich = $_POST['chu_tich'];
        $soLuongHoiVien = $_POST['so_luong_hoi_vien'];
        $this->chiHoiServices->createChiHoi($tenChiHoi, $diaChi, $soDienThoai, $email, $chuTich, $soLuongHoiVien);
        header('Location: http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi');
    }

    public function show()
    {
        $id = $_GET['id'];
        $chiHoi = $this->chiHoiServices->getChiHoiById($id);
        require_once '../app/views/chihoi/show.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        $chiHoi = $this->chiHoiServices->getChiHoiById($id);
        require_once '../app/views/chihoi/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        
    }
}