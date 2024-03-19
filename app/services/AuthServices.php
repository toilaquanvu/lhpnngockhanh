<?php

require_once('../app/libs/DBConnection.php');
require_once('../app/models/TaiKhoan.php');

class AuthServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    

    public function login($username, $password)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM tai_khoan WHERE username = :username AND password = :password";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $row = $stmt->fetch();
            
            if ($row) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['vai_tro'] = $row['vai_tro'];
        
                if ($row['vai_tro'] == 'phuong') {
                  header('Location:' . DOMAIN . '?route=quan_ly_chi_hoi');
                } else if ($row['vai_tro'] == 'chi_hoi') {
                  header('Location:' . DOMAIN . '?route=quan_ly_hoi_vien');
                } else if ($row['vai_tro'] == 'hoi_vien') {
                  header('Location:' . DOMAIN . '?route=thong_tin_hoi_vien&id=' . $row['id'] . '');
                } else {
                  header('Location:' . DOMAIN . '?route=login');
                }
              } else {
                header('Location:' . DOMAIN . '?route=login');
              }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Login failed";
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:' . DOMAIN . '?route=login');
    }
}