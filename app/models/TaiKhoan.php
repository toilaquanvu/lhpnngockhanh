<!-- CREATE TABLE tai_khoan (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  vai_tro VARCHAR(25) NOT NULL
); -->

<?php

class TaiKhoan {
  private $id;
  private $username;
  private $password;
  private $vai_tro;
  
  public function __construct($id, $username, $password, $vai_tro) {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->vai_tro = $vai_tro;
  }
  
  public function getId() {
    return $this->id;
  }
  
  public function getUsername() {
    return $this->username;
  }
  
  public function getPassword() {
    return $this->password;
  }
  
  public function getVaiTro() {
    return $this->vai_tro;
  }
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setUsername($username) {
    $this->username = $username;
  }
  
  public function setPassword($password) {
    $this->password = $password;
  }
  
  public function setVaiTro($vai_tro) {
    $this->vai_tro = $vai_tro;
  }
}