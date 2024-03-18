<?php

require_once('../app/libs/DBConnection.php');
require_once('../app/models/HoiVien.php');
require_once('../app/models/ChiHoi.php');

class HoiVienServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAllHoiVien()
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM hoi_vien";
            $stmt = $conn->query($sql);
            $hoiVienArray = [];
            while ($row = $stmt->fetch()) {
                $hoiVien = new HoiVien($row['id'], $row['f_ten'], $row['l_ten'], $row['ngay_sinh'], $row['gioi_tinh'], $row['dia_chi'], $row['so_dien_thoai'], $row['email'], $row['id_chi_hoi'], $row['chuc_vu']);
                $hoiVienArray[] = $hoiVien;
            }
            return $hoiVienArray;
        } catch (PDOException $e) {
            error_log("khong the lay ra hoi vien: " . $e->getMessage());
            return [];
        }
    }

    public function getHoiVienByChiHoi($id_chi_hoi)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM hoi_vien WHERE id_chi_hoi = :id_chi_hoi";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id_chi_hoi', $id_chi_hoi);
            $stmt->execute();
            $hoiVienArray = [];
            while ($row = $stmt->fetch()) {
                $hoiVien = new HoiVien($row['id'], $row['f_ten'], $row['l_ten'], $row['ngay_sinh'], $row['gioi_tinh'], $row['dia_chi'], $row['so_dien_thoai'], $row['email'], $row['id_chi_hoi'], $row['chuc_vu']);
                $hoiVienArray[] = $hoiVien;
            }
            return $hoiVienArray;
        } catch (PDOException $e) {
            error_log("khong the lay ra hoi vien: " . $e->getMessage());
            return [];
        }
    }

    public function getHoiVienById($id)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM hoi_vien WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch();
            $hoiVien = new HoiVien($row['id'], $row['f_ten'], $row['l_ten'], $row['ngay_sinh'], $row['gioi_tinh'], $row['dia_chi'], $row['so_dien_thoai'], $row['email'], $row['id_chi_hoi'], $row['chuc_vu']);
            return $hoiVien;
        } catch (PDOException $e) {
            error_log("khong the lay ra hoi vien: " . $e->getMessage());
            return null;
        }
    }


    public function createHoiVien($f_ten, $l_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $so_dien_thoai, $email, $id_chi_hoi, $chuc_vu)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO hoi_vien (f_ten, l_ten, ngay_sinh, gioi_tinh, dia_chi, so_dien_thoai, email, id_chi_hoi, chuc_vu) VALUES (:f_ten, :l_ten, :ngay_sinh, :gioi_tinh, :dia_chi, :so_dien_thoai, :email, :id_chi_hoi, :chuc_vu)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':f_ten', $f_ten);
            $stmt->bindParam(':l_ten', $l_ten);
            $stmt->bindParam(':ngay_sinh', $ngay_sinh);
            $stmt->bindParam(':gioi_tinh', $gioi_tinh);
            $stmt->bindParam(':dia_chi', $dia_chi);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id_chi_hoi', $id_chi_hoi);
            $stmt->bindParam(':chuc_vu', $chuc_vu);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=quan_ly_hoi_vien');
        } catch (PDOException $e) {
            error_log("khong the them hoi vien: " . $e->getMessage());
            return false;
        }
    }

    public function updateHoiVien($id, $f_ten, $l_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $so_dien_thoai, $email, $id_chi_hoi, $chuc_vu)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE hoi_vien SET f_ten = :f_ten, l_ten = :l_ten, ngay_sinh = :ngay_sinh, gioi_tinh = :gioi_tinh, dia_chi = :dia_chi, so_dien_thoai = :so_dien_thoai, email = :email, id_chi_hoi = :id_chi_hoi, chuc_vu = :chuc_vu WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':f_ten', $f_ten);
            $stmt->bindParam(':l_ten', $l_ten);
            $stmt->bindParam(':ngay_sinh', $ngay_sinh);
            $stmt->bindParam(':gioi_tinh', $gioi_tinh);
            $stmt->bindParam(':dia_chi', $dia_chi);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id_chi_hoi', $id_chi_hoi);
            $stmt->bindParam(':chuc_vu', $chuc_vu);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=quan_ly_hoi_vien');
        } catch (PDOException $e) {
            error_log("khong the cap nhat hoi vien: " . $e->getMessage());
            return false;
        }
    }

    public function deleteHoiVien($id)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM hoi_vien WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=quan_ly_hoi_vien');
        } catch (PDOException $e) {
            error_log("khong the xoa hoi vien: " . $e->getMessage());
            return false;
        }
    }
}