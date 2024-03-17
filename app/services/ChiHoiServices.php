<?php

require_once('../app/libs/DBConnection.php');
require_once('../app/models/ChiHoi.php');

class ChiHoiServices {  
  private $dbConnection;
  public function __construct()
  {
    $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function getAllChiHoi()
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT * FROM chi_hoi";
      $stmt = $conn->query($sql);
      $chiHoiArray = [];
      while ($row = $stmt->fetch()) {
        $chiHoi = new ChiHoi($row['id'], $row['ten_chi_hoi'], $row['dia_chi'], $row['so_dien_thoai'], $row['email'], $row['chu_tich'], $row['so_luong_hoi_vien']);
        $chiHoiArray[] = $chiHoi;
      }
      return $chiHoiArray;
    } catch (PDOException $e) {
      error_log("khong the lay ra chi hoi: " . $e->getMessage());
      return [];
    }
  }

  public function createChiHoi ($tenChiHoi, $diaChi, $soDienThoai, $email, $chuTich, $soLuongHoiVien) {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "INSERT INTO chi_hoi (ten_chi_hoi, dia_chi, so_dien_thoai, email, chu_tich, so_luong_hoi_vien) VALUES (:ten_chi_hoi, :dia_chi, :so_dien_thoai, :email, :chu_tich, :so_luong_hoi_vien)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':ten_chi_hoi', $tenChiHoi);
      $stmt->bindParam(':dia_chi', $diaChi);
      $stmt->bindParam(':so_dien_thoai', $soDienThoai);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':chu_tich', $chuTich);
      $stmt->bindParam(':so_luong_hoi_vien', $soLuongHoiVien);
      $stmt->execute();
      header('Location: http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi');
    } catch (PDOException $e) {
      error_log("khong the tao chi hoi: " . $e->getMessage());
    }
  }

    public function getChiHoiById($id)
    {
        try {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM chi_hoi WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $chiHoi = new ChiHoi($row['id'], $row['ten_chi_hoi'], $row['dia_chi'], $row['so_dien_thoai'], $row['email'], $row['chu_tich'], $row['so_luong_hoi_vien']);
        return $chiHoi;
        } catch (PDOException $e) {
        error_log("khong the lay ra chi hoi: " . $e->getMessage());
        return null;
        }
    }

    public function updateChiHoi($id, $tenChiHoi, $diaChi, $soDienThoai, $email, $chuTich, $soLuongHoiVien) {
        try {
        $conn = $this->dbConnection->getConnection();
        $sql = "UPDATE chi_hoi SET ten_chi_hoi = :ten_chi_hoi, dia_chi = :dia_chi, so_dien_thoai = :so_dien_thoai, email = :email, chu_tich = :chu_tich, so_luong_hoi_vien = :so_luong_hoi_vien WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':ten_chi_hoi', $tenChiHoi);
        $stmt->bindParam(':dia_chi', $diaChi);
        $stmt->bindParam(':so_dien_thoai', $soDienThoai);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':chu_tich', $chuTich);
        $stmt->bindParam(':so_luong_hoi_vien', $soLuongHoiVien);
        $stmt->execute();
        header('Location: http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi');
        } catch (PDOException $e) {
        error_log("khong the cap nhat chi hoi: " . $e->getMessage());
        }
    }

    public function deleteChiHoi($id) {
        try {
        $conn = $this->dbConnection->getConnection();
        $sql = "DELETE FROM chi_hoi WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('Location: http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi');
        } catch (PDOException $e) {
        error_log("khong the xoa chi hoi: " . $e->getMessage());
        }
    }
} 