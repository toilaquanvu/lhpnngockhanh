<!-- CREATE TABLE hoat_dong (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  ten_hoat_dong VARCHAR(255) NOT NULL,
  so_luong varchar(255) not null,
  noi_dung TEXT NOT NULL,
  ket_qua text not null,
  thoi_gian DATETIME NOT NULL,
  dia_diem VARCHAR(255) NOT NULL,
  id_chi_hoi INT(11) NOT NULL,
  FOREIGN KEY (id_chi_hoi) REFERENCES Chi_Hoi(id)
);
); -->
<?php
class HoatDong {
  private $id;
  private $ten_hoat_dong;
  private $so_luong;
  private $noi_dung;
  private $ket_qua;
  private $thoi_gian;
  private $dia_diem;
  private $id_chi_hoi;
  
  public function __construct($id, $ten_hoat_dong, $so_luong, $noi_dung,$ket_qua, $thoi_gian, $dia_diem, $id_chi_hoi) {
    $this->id = $id;
    $this->ten_hoat_dong = $ten_hoat_dong;
    $this->so_luong = $so_luong;
    $this->noi_dung = $noi_dung;
    $this->ket_qua = $ket_qua;
    $this->thoi_gian = $thoi_gian;
    $this->dia_diem = $dia_diem;
    $this->id_chi_hoi = $id_chi_hoi;
  }
  
  public function getId() {
    return $this->id;
  }
  
  public function getTenHoatDong() {
    return $this->ten_hoat_dong;
  }

  public function getSoLuong() {
    return $this->so_luong;
  }
  
  public function getNoiDung() {
    return $this->noi_dung;
  }

  public function getKetQua() {
    return $this->ket_qua;
  }

  public function getThoiGian() {
    return $this->thoi_gian;
  }
  
  public function getDiaDiem() {
    return $this->dia_diem;
  }
  
  public function getIdChiHoi() {
    return $this->id_chi_hoi;
  }
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setTenHoatDong($ten_hoat_dong) {
    $this->ten_hoat_dong = $ten_hoat_dong;
  }

  public function setSoLuong($so_luong) {
    $this->so_luong = $so_luong;
  }
  
  public function setNoiDung($noi_dung) {
    $this->noi_dung = $noi_dung;
  }
  
  public function setThoiGian($thoi_gian) {
    $this->thoi_gian = $thoi_gian;
  }

  public function setKetQua($ket_qua) {
    $this->ket_qua = $ket_qua;
  }
  
  public function setDiaDiem($dia_diem) {
    $this->dia_diem = $dia_diem;
  }
  
  public function setIdChiHoi($id_chi_hoi) {
    $this->id_chi_hoi = $id_chi_hoi;
  }

  public function toArray() {
    return array(
      "id" => $this->id,
      "ten_hoat_dong" => $this->ten_hoat_dong,
      "so_luong" => $this->so_luong,
      "noi_dung" => $this->noi_dung,
      "ket_qua" => $this->ket_qua,
      "thoi_gian" => $this->thoi_gian,
      "dia_diem" => $this->dia_diem,
      "id_chi_hoi" => $this->id_chi_hoi
    );
  }
}
?>