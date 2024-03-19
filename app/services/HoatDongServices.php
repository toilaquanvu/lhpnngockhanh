<?php


require_once('../app/libs/DBConnection.php');
require_once('../app/models/HoatDong.php');

class HoatDongServices
{
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

    public function createHoatDong($tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO hoat_dong (ten_hoat_dong, so_luong, noi_dung, ket_qua, thoi_gian, dia_diem, id_chi_hoi) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi]);
            header('Location:' .DOMAIN . '?route=hoat_dong_chi_hoi');
        } catch (PDOException $e) {
            error_log("khong the tao hoat dong: " . $e->getMessage());
        }
    }

    public function getHoatDongById($id)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM hoat_dong WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();

            if ($row) {
                $hoatDong = new HoatDong($row['id'], $row['ten_hoat_dong'], $row['so_luong'], $row['noi_dung'], $row['ket_qua'], $row['thoi_gian'], $row['dia_diem'], $row['id_chi_hoi']);
                return $hoatDong;
            } else {
                // Handle case where hoat dong with given ID is not found
                return null;
            }
        } catch (PDOException $e) {
            error_log("khong the lay ra hoat dong: " . $e->getMessage());
            return null;
        }
    }



    public function updateHoatDong($id, $tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE hoat_dong SET ten_hoat_dong = ?, so_luong = ?, noi_dung = ?, ket_qua = ?, thoi_gian = ?, dia_diem = ?, id_chi_hoi = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenHoatDong, $soLuong, $noiDung, $ketQua, $thoiGian, $diaDiem, $idChiHoi, $id]);
            header('Location:' .DOMAIN. '?route=hoat_dong_chi_hoi');
        } catch (PDOException $e) {
            error_log("khong the cap nhat hoat dong: " . $e->getMessage());
        }
    }


    public function deleteHoatDong($id)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM hoat_dong WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            header('Location:' .DOMAIN. '?route=hoat_dong_chi_hoi');
        } catch (PDOException $e) {
            error_log("khong the xoa hoat dong: " . $e->getMessage());
        }
    }



    public function ganHoatDongChoChiHoi ($idHoatDong, $idChiHoi) {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO hoat_dong_chi_hoi (id_hoat_dong, id_chi_hoi) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$idHoatDong, $idChiHoi]);
            header('Location:' .DOMAIN. '?route=hoat_dong_chi_hoi');
        } catch (PDOException $e) {
            error_log("khong the gan hoat dong cho chi hoi: " . $e->getMessage());
        }
    }

}