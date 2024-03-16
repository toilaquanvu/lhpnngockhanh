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



} 