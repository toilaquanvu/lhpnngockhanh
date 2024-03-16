<!-- CREATE TABLE thong_ke (
  thang INT(11) NOT NULL,
  nam INT(11) NOT NULL,
  so_luong_chi_hoi INT(11) NOT NULL,
  so_luong_hoi_vien INT(11) NOT NULL,
  so_luong_hoat_dong INT(11) NOT NULL,
  so_luong_dang_ky INT(11) NOT NULL
); -->

<?php

class ThongKe {
  private $thang;
  private $nam;
  private $so_luong_chi_hoi;
  private $so_luong_hoi_vien;
  private $so_luong_hoat_dong;
  private $so_luong_dang_ky;
  
  public function __construct($thang, $nam, $so_luong_chi_hoi, $so_luong_hoi_vien, $so_luong_hoat_dong, $so_luong_dang_ky) {
    $this->thang = $thang;
    $this->nam = $nam;
    $this->so_luong_chi_hoi = $so_luong_chi_hoi;
    $this->so_luong_hoi_vien = $so_luong_hoi_vien;
    $this->so_luong_hoat_dong = $so_luong_hoat_dong;
    $this->so_luong_dang_ky = $so_luong_dang_ky;
  }
  
  public function getThang() {
    return $this->thang;
  }
  
  public function getNam() {
    return $this->nam;
  }
  
  public function getSoLuongChiHoi() {
    return $this->so_luong_chi_hoi;
  }
  
  public function getSoLuongHoiVien() {
    return $this->so_luong_hoi_vien;
  }
  
  public function getSoLuongHoatDong() {
    return $this->so_luong_hoat_dong;
  }
  
  public function getSoLuongDangKy() {
    return $this->so_luong_dang_ky;
  }
  
  public function setThang($thang) {
    $this->thang = $thang;
  }
  
  public function setNam($nam) {
    $this->nam = $nam;
  }
  
  public function setSoLuongChiHoi($so_luong_chi_hoi) {
    $this->so_luong_chi_hoi = $so_luong_chi_hoi;
  }
  
  public function setSoLuongHoiVien($so_luong_hoi_vien) {
    $this->so_luong_hoi_vien = $so_luong_hoi_vien;
  }
  
  public function setSoLuongHoatDong($so_luong_hoat_dong) {
    $this->so_luong_hoat_dong = $so_luong_hoat_dong;
  }

  public function setSoLuongDangKy($so_luong_dang_ky) {
    $this->so_luong_dang_ky = $so_luong_dang_ky;
  }
}
?>