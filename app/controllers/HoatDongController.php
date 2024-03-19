<?php


require_once '../app/services/HoatDongServices.php';
require_once '../app/services/ChiHoiServices.php';

class HoatDongController
{
    private $hoatDongServices;
    private $chiHoiServices;

    public function __construct()
    {
        $this->hoatDongServices = new HoatDongServices();
        $this->chiHoiServices = new ChiHoiServices();
    }

    public function index()
    {


        $hoatDong = $this->hoatDongServices->getAllHoatDong();
        include_once '../app/views/hoatdong/index.php';
    }

    public function create()
    {
        $chiHoi = $this->chiHoiServices->getAllChiHoi();
        include_once '../app/views/hoatdong/createHoatDong.php';
    }

    public function store()
    {
        if (isset($_POST['ten_hoat_dong']) && isset($_POST['so_luong']) && isset($_POST['noi_dung']) && isset($_POST['ket_qua']) && isset($_POST['thoi_gian']) && isset($_POST['dia_diem']) && isset($_POST['id_chi_hoi'])) {
            $tenHoatDong = $_POST['ten_hoat_dong'];
            $soLuong = $_POST['so_luong'];
            $noiDung = $_POST['noi_dung'];
            $ketQua = $_POST['ket_qua'];
            $thoiGian = $_POST['thoi_gian'];
            $diaDiem = $_POST['dia_diem'];
            $idChiHoi = $_POST['id_chi_hoi'];
            $this->hoatDongServices->createHoatDong($tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi);
        }
    }


    public function edit()
    {
        $id = $_GET['id'];
        $hoatDong = $this->hoatDongServices->getHoatDongById($id);
        $chiHoi = $this->chiHoiServices->getAllChiHoi();
        include_once '../app/views/hoatdong/edit.php';
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['ten_hoat_dong']) && isset($_POST['so_luong']) && isset($_POST['noi_dung']) && isset($_POST['ket_qua']) && isset($_POST['thoi_gian']) && isset($_POST['dia_diem']) && isset($_POST['id_chi_hoi'])) {
            $id = $_POST['id'];
            $tenHoatDong = $_POST['ten_hoat_dong'];
            $soLuong = $_POST['so_luong'];
            $noiDung = $_POST['noi_dung'];
            $ketQua = $_POST['ket_qua'];
            $thoiGian = $_POST['thoi_gian'];
            $diaDiem = $_POST['dia_diem'];
            $idChiHoi = $_POST['id_chi_hoi'];
            $this->hoatDongServices->updateHoatDong($id, $tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi);
        }
    }


    public function delete()
    {
        $id = $_GET['id'];
        $this->hoatDongServices->deleteHoatDong($id);
    }



    public function ganHoatDong()
    {
        if (isset($_POST['id_chi_hoi']) && isset($_POST['id_hoat_dong'])) {
            $idChiHoi = $_POST['id_chi_hoi'];
            $idHoatDong = $_POST['id_hoat_dong'];
            $this->hoatDongServices->ganHoatDongChoChiHoi($idHoatDong, $idChiHoi); // Chỉnh sửa tên phương thức
        }
    }

}