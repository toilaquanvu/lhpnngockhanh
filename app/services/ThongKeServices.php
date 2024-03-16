<?php
require_once '../app/libs/DBConnection.php';
class ThongKeServices {
  public function __construct()
  {
  }

  public function getSoLuongHoiVien()
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT COUNT(*) FROM hoi_vien";
      $stmt = $conn->query($sql);
      $soLuongHoiVien = $stmt->fetchColumn();
      return $soLuongHoiVien;
    } catch (PDOException $e) {
      error_log("khong the lay ra so luong hoi vien: " . $e->getMessage());
      return 0;
    }
  }

  public function getSoLuongChiHoi()
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT COUNT(*) FROM chi_hoi";
      $stmt = $conn->query($sql);
      $soLuongChiHoi = $stmt->fetchColumn();
      return $soLuongChiHoi;
    } catch (PDOException $e) {
      error_log("khong the lay ra so luong chi hoi: " . $e->getMessage());
      return 0;
    }
  }

  //get so luong phu nu tren 18 tuoi
  public function getSoLuongPhuNuTren18Tuoi()
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT COUNT(*) FROM hoi_vien WHERE gioi_tinh = 'nu' AND TIMESTAMPDIFF(YEAR, ngay_sinh, CURDATE()) > 18";
      $stmt = $conn->query($sql);
      $soLuongPhuNuTren18Tuoi = $stmt->fetchColumn();
      return $soLuongPhuNuTren18Tuoi;
    } catch (PDOException $e) {
      error_log("khong the lay ra so luong phu nu tren 18 tuoi: " . $e->getMessage());
      return 0;
    }
  }

  //get so luong hoat dong cua chi hoi
  public function getSoLuongHoatDongCuaChiHoi($id)
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT COUNT(*) FROM hoat_dong WHERE id_chi_hoi = :id";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $soLuongHoatDong = $stmt->fetchColumn();
      return $soLuongHoatDong;
    } catch (PDOException $e) {
      error_log("khong the lay ra so luong hoat dong cua chi hoi: " . $e->getMessage());
      return 0;
    }
  }

  //get so luong dang ky hoat dong cua chi hoi
  public function getSoLuongDangKyHoatDongCuaChiHoi($id)
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT COUNT(*) FROM dang_ky_hoat_dong WHERE id_chi_hoi = :id";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $soLuongDangKyHoatDong = $stmt->fetchColumn();
      return $soLuongDangKyHoatDong;
    } catch (PDOException $e) {
      error_log("khong the lay ra so luong dang ky hoat dong cua chi hoi: " . $e->getMessage());
      return 0;
    }
  }

}