<?php

require_once '../app/services/HoiVienServices.php';
require_once '../app/services/ChiHoiServices.php';

class HoiVienController
{
    private $hoiVienServices;
    private $chiHoiServices;

    public function __construct()
    {
        $this->hoiVienServices = new HoiVienServices();
        $this->chiHoiServices = new ChiHoiServices();
    }

    public function index()
    {
        $idChiHoi = $_GET['id_chi_hoi'] ?? null;

        if ($idChiHoi !== null) {
            $hoiVien = $this->hoiVienServices->getHoiVienByChiHoi($idChiHoi);
        } else {
            $hoiVien = $this->hoiVienServices->getAllHoiVien();
        }

        $chiHoi = $this->chiHoiServices->getAllChiHoi();

        include_once '../app/views/hoivien/index.php';
    }

    public function show()
    {
        $id = $_GET['id'];
        $hoiVien = $this->hoiVienServices->getHoiVienById($id);
        include_once '../app/views/hoivien/show.php';
    }

    public function getHoiVienByChiHoi($id_chi_hoi)
    {
        $hoiVien = $this->hoiVienServices->getHoiVienByChiHoi($id_chi_hoi);
        include_once '../app/views/hoivien/index.php';
    }

    public function getHoiVienById($id)
    {
        $hoiVien = $this->hoiVienServices->getHoiVienById($id);
        include_once '../app/views/hoivien/show.php';
    }

    public function create()
    {
        $idChiHoi = $_GET['id_chi_hoi'] ?? null;

        if ($idChiHoi !== null) {
            $hoiVien = $this->hoiVienServices->getHoiVienByChiHoi($idChiHoi);
        } else {
            $hoiVien = $this->hoiVienServices->getAllHoiVien();
        }

        $chiHoi = $this->chiHoiServices->getAllChiHoi();
        include_once '../app/views/hoivien/create.php';
    }

    public function store()
    {
        if (isset($_POST['f_ten']) && isset($_POST['l_ten']) &&
            isset($_POST['ngay_sinh']) && isset($_POST['gioi_tinh']) &&
            isset($_POST['dia_chi']) && isset($_POST['so_dien_thoai']) &&
            isset($_POST['email']) && isset($_POST['id_chi_hoi']) && isset($_POST['chuc_vu'])) {
            $f_ten = $_POST['f_ten'];
            $l_ten = $_POST['l_ten'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $email = $_POST['email'];
            $id_chi_hoi = $_POST['id_chi_hoi'];
            $chuc_vu = $_POST['chuc_vu'];
            $this->hoiVienServices->createHoiVien($f_ten, $l_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $so_dien_thoai, $email, $id_chi_hoi, $chuc_vu);
        }

    }

    public function edit()
    {
        $id = $_GET['id'];
        $idChiHoi = $_GET['id_chi_hoi'] ?? null;

        if ($idChiHoi !== null) {
            $hoiVien = $this->hoiVienServices->getHoiVienByChiHoi($idChiHoi);
        } else {
            $hoiVien = $this->hoiVienServices->getAllHoiVien();
        }

        $chiHoi = $this->chiHoiServices->getAllChiHoi();
        $hoiVien = $this->hoiVienServices->getHoiVienById($id);
        include_once '../app/views/hoivien/edit.php';
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['f_ten']) && isset($_POST['l_ten']) &&
            isset($_POST['ngay_sinh']) && isset($_POST['gioi_tinh']) &&
            isset($_POST['dia_chi']) && isset($_POST['so_dien_thoai']) &&
            isset($_POST['email']) && isset($_POST['id_chi_hoi']) && isset($_POST['chuc_vu'])) {
            $id = $_POST['id'];
            $f_ten = $_POST['f_ten'];
            $l_ten = $_POST['l_ten'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $email = $_POST['email'];
            $id_chi_hoi = $_POST['id_chi_hoi'];
            $chuc_vu = $_POST['chuc_vu'];
            $this->hoiVienServices->updateHoiVien($id, $f_ten, $l_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $so_dien_thoai, $email, $id_chi_hoi, $chuc_vu);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->hoiVienServices->deleteHoiVien($id);
    }

}