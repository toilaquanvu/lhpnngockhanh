<?php

class HoiVien
{
    private $id;
    private $f_ten;
    private $l_ten;
    private $ngay_sinh;
    private $gioi_tinh;
    private $dia_chi;
    private $so_dien_thoai;
    private $email;
    private $id_chi_hoi;
    private $chuc_vu;

    public function __construct($id, $f_ten, $l_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $so_dien_thoai, $email, $id_chi_hoi, $chuc_vu)
    {
        $this->id = $id;
        $this->f_ten = $f_ten;
        $this->l_ten = $l_ten;
        $this->ngay_sinh = $ngay_sinh;
        $this->gioi_tinh = $gioi_tinh;
        $this->dia_chi = $dia_chi;
        $this->so_dien_thoai = $so_dien_thoai;
        $this->email = $email;
        $this->id_chi_hoi = $id_chi_hoi;
        $this->chuc_vu = $chuc_vu;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFTen()
    {
        return $this->f_ten;
    }

    /**
     * @param mixed $f_ten
     */
    public function setFTen($f_ten): void
    {
        $this->f_ten = $f_ten;
    }

    /**
     * @return mixed
     */
    public function getLTen()
    {
        return $this->l_ten;
    }

    /**
     * @param mixed $l_ten
     */
    public function setLTen($l_ten): void
    {
        $this->l_ten = $l_ten;
    }


    public function getHoTen()
    {
        return $this->f_ten . " " . $this->l_ten;
    }

    public function getNgaySinh()
    {
        return $this->ngay_sinh;
    }

    public function getGioiTinh()
    {
        return $this->gioi_tinh;
    }

    public function getDiaChi()
    {
        return $this->dia_chi;
    }

    public function getSoDienThoai()
    {
        return $this->so_dien_thoai;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getIdChiHoi()
    {
        return $this->id_chi_hoi;
    }

    public function getChucVu()
    {
        return $this->chuc_vu;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setHoTen($f_ten, $l_ten)
    {
        $this->f_ten = $f_ten;
        $this->l_ten = $l_ten;
    }

    public function setNgaySinh($ngay_sinh)
    {
        $this->ngay_sinh = $ngay_sinh;
    }

    public function setGioiTinh($gioi_tinh)
    {
        $this->gioi_tinh = $gioi_tinh;
    }

    public function setDiaChi($dia_chi)
    {
        $this->dia_chi = $dia_chi;
    }

    public function setSoDienThoai($so_dien_thoai)
    {
        $this->so_dien_thoai = $so_dien_thoai;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setIdChiHoi($id_chi_hoi)
    {
        $this->id_chi_hoi = $id_chi_hoi;
    }

    public function setChucVu($chuc_vu)
    {
        $this->chuc_vu = $chuc_vu;
    }

    public function toArray()
    {
        return array(
            "id" => $this->id,
            "f_ten" => $this->f_ten,
            "l_ten" => $this->l_ten,
            "ngay_sinh" => $this->ngay_sinh,
            "gioi_tinh" => $this->gioi_tinh,
            "dia_chi" => $this->dia_chi,
            "so_dien_thoai" => $this->so_dien_thoai,
            "email" => $this->email,
            "id_chi_hoi" => $this->id_chi_hoi,
            "chuc_vu" => $this->chuc_vu
        );
    }


}

?>