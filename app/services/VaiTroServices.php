<?php
/*
CREATE TABLE Vai_Tro (
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
);
*/


require_once '../app/libs/DBConnection.php';

class VaiTroServices {

  public function __construct()
  {
  }

  public function getVaiTroById($id)
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT * FROM vai_tro WHERE id = :id";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $row = $stmt->fetch();
      return $row['ten_vai_tro'];
    } catch (PDOException $e) {
      error_log("khong the lay ra vai tro: " . $e->getMessage());
      return null;
    }
  }

  //phân quyền vai trò cho tài khoản phuong: tất cả = 1
  //tài khoản: chi_hoi: them_hoi_vien = 1, sua_hoi_vien = 1, xoa_hoi_vien = 1, xem_thong_tin_hoi_vien = 1, them_hoat_dong = 1, sua_hoat_dong = 1, xoa_hoat_dong = 1, them_dang_ky = 1, sua_dang_ky = 1, xoa_dang_ky = 1, xem_thong_ke_chi_hoi = 1, xem_thong_ke_tong_hop = 1.
  //tài khoản: hoi_vien: xem_thong_tin_hoi_vien = 1.

  public function hasPermission($role, $permission) {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT $permission FROM vai_tro WHERE ten_vai_tro = :role";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':role', $role);
      $stmt->execute();
      $row = $stmt->fetch();
      return $row[$permission] == 1;
    } catch (PDOException $e) {
      error_log("Error checking permission: " . $e->getMessage());
      return false;
    }
  }

  // Function to set permissions for a specific role
  public function setPermissions($role, $permissions) {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "UPDATE vai_tro SET " . implode(', ', array_map(function ($p) {
        return "$p = 1";
      }, $permissions)) . " WHERE ten_vai_tro = :role";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':role', $role);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      error_log("Error setting permissions: " . $e->getMessage());
      return false;
    }
  }


  // Function to remove permissions for a specific role
  public function removePermissions($role, $permissions) {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "UPDATE vai_tro SET " . implode(', ', array_map(function ($p) {
        return "$p = 0";
      }, $permissions)) . " WHERE ten_vai_tro = :role";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':role', $role);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      error_log("Error removing permissions: " . $e->getMessage());
      return false;
    }
  }

  

}