<!-- CREATE TABLE Vai_Tro (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  mo_ta varchar(50) not null,
  ten_vai_tro VARCHAR(25) NOT NULL,
  them_chi_hoi TINYINT(1) NOT NULL,
  sua_chi_hoi TINYINT(1) NOT NULL,
  xoa_chi_hoi TINYINT(1) NOT NULL,
  them_hoi_vien TINYINT(1) NOT NULL,
  sua_hoi_vien TINYINT(1) NOT NULL,
  xoa_hoi_vien TINYINT(1) NOT NULL,
  xem_thong_tin_hoi_vien TINYINT(1) not null,
  them_hoat_dong TINYINT(1) NOT NULL,
  sua_hoat_dong TINYINT(1) NOT NULL,
  xoa_hoat_dong TINYINT(1) NOT NULL,
  them_dang_ky TINYINT(1) NOT NULL,
  sua_dang_ky TINYINT(1) NOT NULL,
  xoa_dang_ky TINYINT(1) NOT NULL,
  xem_thong_ke_chi_hoi TINYINT(1) NOT NULL,
  xem_thong_ke_tong_hop TINYINT(1) NOT NULL
); -->

<?php

class VaiTro
{
    private $id;
    private $mo_ta;
    private $ten_vai_tro;
    private $them_chi_hoi;
    private $sua_chi_hoi;
    private $xoa_chi_hoi;
    private $them_hoi_vien;
    private $sua_hoi_vien;
    private $xoa_hoi_vien;
    private $xem_thong_tin_hoi_vien;
    private $them_hoat_dong;
    private $sua_hoat_dong;
    private $xoa_hoat_dong;
    private $them_dang_ky;
    private $sua_dang_ky;
    private $xoa_dang_ky;
    private $xem_thong_ke_chi_hoi;
    private $xem_thong_ke_tong_hop;

    public function __construct($id, $mo_ta, $ten_vai_tro, $them_chi_hoi, $sua_chi_hoi, $xoa_chi_hoi, $them_hoi_vien, $sua_hoi_vien, $xoa_hoi_vien, $xem_thong_tin_hoi_vien, $them_hoat_dong, $sua_hoat_dong, $xoa_hoat_dong, $them_dang_ky, $sua_dang_ky, $xoa_dang_ky, $xem_thong_ke_chi_hoi, $xem_thong_ke_tong_hop)
    {
        $this->id = $id;
        $this->mo_ta = $mo_ta;
        $this->ten_vai_tro = $ten_vai_tro;
        $this->them_chi_hoi = $them_chi_hoi;
        $this->sua_chi_hoi = $sua_chi_hoi;
        $this->xoa_chi_hoi = $xoa_chi_hoi;
        $this->them_hoi_vien = $them_hoi_vien;
        $this->sua_hoi_vien = $sua_hoi_vien;
        $this->xoa_hoi_vien = $xoa_hoi_vien;
        $this->xem_thong_tin_hoi_vien = $xem_thong_tin_hoi_vien;
        $this->them_hoat_dong = $them_hoat_dong;
        $this->sua_hoat_dong = $sua_hoat_dong;
        $this->xoa_hoat_dong = $xoa_hoat_dong;
        $this->them_dang_ky = $them_dang_ky;
        $this->sua_dang_ky = $sua_dang_ky;
        $this->xoa_dang_ky = $xoa_dang_ky;
        $this->xem_thong_ke_chi_hoi = $xem_thong_ke_chi_hoi;
        $this->xem_thong_ke_tong_hop = $xem_thong_ke_tong_hop;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getMoTa()
    {
        return $this->mo_ta;
    }

    public function setMoTa($mo_ta): void
    {
        $this->mo_ta = $mo_ta;
    }

    public function getTenVaiTro()
    {
        return $this->ten_vai_tro;
    }

    public function setTenVaiTro($ten_vai_tro): void
    {
        $this->ten_vai_tro = $ten_vai_tro;
    }

    public function getThemChiHoi()
    {
        return $this->them_chi_hoi;
    }

    public function setThemChiHoi($them_chi_hoi): void
    {
        $this->them_chi_hoi = $them_chi_hoi;
    }

    public function getSuaChiHoi()
    {
        return $this->sua_chi_hoi;
    }

    public function setSuaChiHoi($sua_chi_hoi): void
    {
        $this->sua_chi_hoi = $sua_chi_hoi;
    }

    public function getXoaChiHoi()
    {
        return $this->xoa_chi_hoi;
    }

    public function setXoaChiHoi($xoa_chi_hoi): void
    {
        $this->xoa_chi_hoi = $xoa_chi_hoi;
    }

    public function getThemHoiVien()
    {
        return $this->them_hoi_vien;
    }

    public function setThemHoiVien($them_hoi_vien): void
    {
        $this->them_hoi_vien = $them_hoi_vien;
    }

    public function getSuaHoiVien()
    {
        return $this->sua_hoi_vien;
    }

    public function setSuaHoiVien($sua_hoi_vien): void
    {
        $this->sua_hoi_vien = $sua_hoi_vien;
    }

    public function getXoaHoiVien()
    {
        return $this->xoa_hoi_vien;
    }

    public function setXoaHoiVien($xoa_hoi_vien): void
    {
        $this->xoa_hoi_vien = $xoa_hoi_vien;
    }

    public function getXemThongTinHoiVien()
    {
        return $this->xem_thong_tin_hoi_vien;
    }

    public function setXemThongTinHoiVien($xem_thong_tin_hoi_vien): void
    {
        $this->xem_thong_tin_hoi_vien = $xem_thong_tin_hoi_vien;
    }

    public function getThemHoatDong()
    {
        return $this->them_hoat_dong;
    }

    public function setThemHoatDong($them_hoat_dong): void
    {
        $this->them_hoat_dong = $them_hoat_dong;
    }

    public function getSuaHoatDong()
    {
        return $this->sua_hoat_dong;
    }

    public function setSuaHoatDong($sua_hoat_dong): void
    {
        $this->sua_hoat_dong = $sua_hoat_dong;
    }

    public function getXoaHoatDong()
    {
        return $this->xoa_hoat_dong;
    }

    public function setXoaHoatDong($xoa_hoat_dong): void
    {
        $this->xoa_hoat_dong = $xoa_hoat_dong;
    }

    public function getThemDangKy()
    {
        return $this->them_dang_ky;
    }

    public function setThemDangKy($them_dang_ky): void
    {
        $this->them_dang_ky = $them_dang_ky;
    }

    public function getSuaDangKy()
    {
        return $this->sua_dang_ky;
    }

    public function setSuaDangKy($sua_dang_ky): void
    {
        $this->sua_dang_ky = $sua_dang_ky;
    }

    public function getXoaDangKy()
    {
        return $this->xoa_dang_ky;
    }

    public function setXoaDangKy($xoa_dang_ky): void
    {
        $this->xoa_dang_ky = $xoa_dang_ky;
    }

    public function getXemThongKeChiHoi()
    {
        return $this->xem_thong_ke_chi_hoi;
    }

    public function setXemThongKeChiHoi($xem_thong_ke_chi_hoi): void
    {
        $this->xem_thong_ke_chi_hoi = $xem_thong_ke_chi_hoi;
    }

    public function getXemThongKeTongHop()
    {
        return $this->xem_thong_ke_tong_hop;
    }

    public function setXemThongKeTongHop($xem_thong_ke_tong_hop): void
    {
        $this->xem_thong_ke_tong_hop = $xem_thong_ke_tong_hop;
    }
}
?>
