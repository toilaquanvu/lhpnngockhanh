<?php


require_once('../app/libs/DBConnection.php');
require_once('../app/models/HoatDong.php');

class HoatDongServices {
  private $dbConnection;
  public function __construct()
  {
    $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function getAllHoatDong()
  {
    try {
      $conn = $this->dbConnection->getConnection();
      $sql = "SELECT * FROM hoat_dong";
      $stmt = $conn->query($sql);
      $hoatDongArray = [];
      while ($row = $stmt->fetch()) {
        $hoatDong = new HoatDong($row['id'], $row['ten_hoat_dong'], $row['so_luong'], $row['noi_dung'], $row['ket_qua'], $row['thoi_gian'], $row['dia_diem'], $row['id_chi_hoi']);
        $hoatDongArray[] = $hoatDong;
      }
      return $hoatDongArray;
    } catch (PDOException $e) {
      error_log("khong the lay ra hoat dong: " . $e->getMessage());
      return [];
    }
  }




}