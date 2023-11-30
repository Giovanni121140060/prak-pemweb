<?php

// by Giovanni Lucy - 121140060 - Prak RC


class mahasiswa {
  public $nama;
  public $nim;
  public $prodi;

  public function __construct($nama, $nim, $prodi) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->prodi = $prodi;
  }

  public function showMahasiswa() {
    echo "Nama: " . $this->nama . "<br>";
    echo "NIM: " . $this->nim . "<br>";
    echo "Prodi: " . $this->prodi . "<br>";
  }
}

// Membuat objek dari class InformasiPribadi
$data1 = new mahasiswa("Giovanni Lucy", "121140060", "Teknik Informatika");
$data2 = new mahasiswa("Qaisya Dwi", "121140063", "Teknik Informatika");

// Memanggil metode tampilkanInfo dari objek
$data1->showMahasiswa();
$data2->showMahasiswa();
?>
