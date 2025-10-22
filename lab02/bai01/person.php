<?php
class Person
{
    private string $name;
    private int $age;
    private string $address;

    // Constructor có tham số
    public function __construct(string $name = '', int $age = 0, string $address = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // Getter và Setter
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    // Trả về thông tin đầy đủ
    public function getInfo(): string
    {
        return "Name: {$this->name}, Age: {$this->age}, Address: {$this->address}";
    }

    // Kiểm tra đủ tuổi bỏ phiếu (>=18)
    public function canVote(): bool
    {
        return $this->age >= 18;
    }
}
