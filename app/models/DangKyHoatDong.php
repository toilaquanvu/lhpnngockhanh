<!-- CREATE TABLE dang_ky_hoat_dong (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  id_hoat_dong INT(11) NOT NULL,
  id_hoi_vien INT(11) NOT NULL,
  FOREIGN KEY (id_hoat_dong) REFERENCES Hoat_Dong(id),
  FOREIGN KEY (id_hoi_vien) REFERENCES hoi_vien(id)
);
 -->

 <?php 

class DangKyHoatDong {
  private $id;
  private $id_hoat_dong;
  private $id_hoi_vien;
  
  public function __construct($id, $id_hoat_dong, $id_hoi_vien) {
    $this->id = $id;
    $this->id_hoat_dong = $id_hoat_dong;
    $this->id_hoi_vien = $id_hoi_vien;
  }
  
  public function getId() {
    return $this->id;
  }
  
  public function getIdHoatDong() {
    return $this->id_hoat_dong;
  }
  
  public function getIdHoiVien() {
    return $this->id_hoi_vien;
  }
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setIdHoatDong($id_hoat_dong) {
    $this->id_hoat_dong = $id_hoat_dong;
  }
  
  public function setIdHoiVien($id_hoi_vien) {
    $this->id_hoi_vien = $id_hoi_vien;
  }
}