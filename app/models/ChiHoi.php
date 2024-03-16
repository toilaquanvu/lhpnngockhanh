<?php

class ChiHoi {
  private $id;
  private $ten_chi_hoi;
  private $dia_chi;
  private $so_dien_thoai;
  private $email;
  private $chu_tich;
  private $so_luong_hoi_vien;

  public function __construct($id, $ten_chi_hoi, $dia_chi, $so_dien_thoai, $email, $chu_tich, $so_luong_hoi_vien) {
    $this->id = $id;
    $this->ten_chi_hoi = $ten_chi_hoi;
    $this->dia_chi = $dia_chi;
    $this->so_dien_thoai = $so_dien_thoai;
    $this->email = $email;
    $this->chu_tich = $chu_tich;
    $this->so_luong_hoi_vien = $so_luong_hoi_vien;
  }

  public function getId() {
    return $this->id;
  }

  public function getTenChiHoi() {
    return $this->ten_chi_hoi;
  }

  public function getDiaChi() {
    return $this->dia_chi;
  }

  public function getSoDienThoai() {
    return $this->so_dien_thoai;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getChuTich() {
    return $this->chu_tich;
  }

  public function getSoLuongHoiVien() {
    return $this->so_luong_hoi_vien;
  }


  public function setId($id) {
    $this->id = $id;
  }

  public function setTenChiHoi($ten_chi_hoi) {
    $this->ten_chi_hoi = $ten_chi_hoi;
  }

  public function setDiaChi($dia_chi) {
    $this->dia_chi = $dia_chi;
  }

  public function setSoDienThoai($so_dien_thoai) {
    $this->so_dien_thoai = $so_dien_thoai;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setChuTich($chu_tich) {
    $this->chu_tich = $chu_tich;
  }

  public function setSoLuongHoiVien($so_luong_hoi_vien) {
    $this->so_luong_hoi_vien = $so_luong_hoi_vien;
  }

  public function toArray() {
    return array(
      "id" => $this->id,
      "ten_chi_hoi" => $this->ten_chi_hoi,
      "dia_chi" => $this->dia_chi,
      "so_dien_thoai" => $this->so_dien_thoai,
      "email" => $this->email,
      "chu_tich" => $this->chu_tich,
      "so_luong_hoi_vien" => $this->so_luong_hoi_vien
    );
  }
}

?>