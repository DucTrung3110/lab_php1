<?php
class SinhVien
{
    private string $mssv;
    private string $hoten;
    private string $gioitinh;
    private string $ngaysinh;
    private float $diemtb;

    public function __construct(
        string $mssv = '',
        string $hoten = '',
        string $gioitinh = '',
        string $ngaysinh = '',
        float $diemtb = 0.0
    ) {
        $this->mssv     = $mssv;
        $this->hoten    = $hoten;
        $this->gioitinh = $gioitinh;
        $this->ngaysinh = $ngaysinh;
        $this->diemtb   = $diemtb;
    }

    // Getter/Setter
    public function getMssv(): string
    {
        return $this->mssv;
    }
    public function setMssv(string $mssv): void
    {
        $this->mssv = $mssv;
    }

    public function getHoten(): string
    {
        return $this->hoten;
    }
    public function setHoten(string $hoten): void
    {
        $this->hoten = $hoten;
    }

    public function getGioitinh(): string
    {
        return $this->gioitinh;
    }
    public function setGioitinh(string $gioitinh): void
    {
        $this->gioitinh = $gioitinh;
    }

    public function getNgaysinh(): string
    {
        return $this->ngaysinh;
    }
    public function setNgaysinh(string $ngaysinh): void
    {
        $this->ngaysinh = $ngaysinh;
    }

    public function getDiemtb(): float
    {
        return $this->diemtb;
    }
    public function setDiemtb(float $diemtb): void
    {
        $this->diemtb = $diemtb;
    }

    // Hiển thị thông tin sinh viên
    public function hienThiThongTin(): string
    {
        return "[{$this->mssv}] {$this->hoten} | Gender: {$this->gioitinh} | Birth: {$this->ngaysinh} | GPA: {$this->diemtb}";
    }
}
