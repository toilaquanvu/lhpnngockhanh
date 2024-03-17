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
        include_once '../app/views/chihoi/create.php';
    }

    public function store()
    {
        if (isset($_POST['ten_chi_hoi']) && isset($_POST['dia_chi']) && isset($_POST['so_dien_thoai']) && isset($_POST['email']) && isset($_POST['chu_tich']) && isset($_POST['so_luong_hoi_vien'])) {
            $tenChiHoi = $_POST['ten_chi_hoi'];
            $diaChi = $_POST['dia_chi'];
            $soDienThoai = $_POST['so_dien_thoai'];
            $email = $_POST['email'];
            $chuTich = $_POST['chu_tich'];
            $soLuongHoiVien = $_POST['so_luong_hoi_vien'];

            $this->chiHoiServices->createChiHoi($tenChiHoi, $diaChi, $soDienThoai, $email, $chuTich, $soLuongHoiVien);
        }
    }

    public function show()
    {
        $id = $_GET['id'];
        $chiHoi = $this->chiHoiServices->getChiHoiById($id);
        include_once '../app/views/chihoi/show.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        $chiHoi = $this->chiHoiServices->getChiHoiById($id);
        include_once '../app/views/chihoi/edit.php';
    }

    public function update()
    {
        if (isset($_POST['id']) &&
            isset($_POST['ten_chi_hoi']) && isset($_POST['dia_chi']) &&
            isset($_POST['so_dien_thoai']) && isset($_POST['email']) &&
            isset($_POST['chu_tich']) && isset($_POST['so_luong_hoi_vien'])) {
            $id = $_POST['id'];
            $tenChiHoi = $_POST['ten_chi_hoi'];
            $diaChi = $_POST['dia_chi'];
            $soDienThoai = $_POST['so_dien_thoai'];
            $email = $_POST['email'];
            $chuTich = $_POST['chu_tich'];
            $soLuongHoiVien = $_POST['so_luong_hoi_vien'];

            $this->chiHoiServices->updateChiHoi($id, $tenChiHoi, $diaChi, $soDienThoai, $email, $chuTich, $soLuongHoiVien);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->chiHoiServices->deleteChiHoi($id);
    }
}