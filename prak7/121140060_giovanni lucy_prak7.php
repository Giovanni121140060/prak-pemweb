<?php

// by Giovanni Lucy - 121140060 - Prak RC


class mahasiswa {
  public $nama;
  public $nim;
  public $kelasprak;

  public function __construct($nama, $nim, $kelasprak) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->prodi = $kelasprak;
  }

  public function showMahasiswa() {
    echo "Nama: " . $this->nama . "<br>";
    echo "NIM: " . $this->nim . "<br>";
    echo "Kelas Praktikum: " . $this->kelasprak . "<br>";
  }
}

// Membuat objek dari class InformasiPribadi
$data1 = new mahasiswa("Giovanni Lucy", "121140060", "RC");
$data2 = new mahasiswa("Qaisya Dwi", "121140063", "RA");

// Memanggil metode tampilkanInfo dari objek
$data1->showMahasiswa();
$data2->showMahasiswa();
?>
