<!-- by KHAIRANI BILQIS - 121140091 -->
<!-- Praktikum Pemrograman Web RB - Tugas 7 -->

<?php
// Tugas7.php
// Class Induk
class Human {
    // Properti
    private $nama;

    // Constructor
    public function __construct($nama) {
        $this->setNama($nama);
    }

    // Method untuk menampilkan data diri
    public function dataDiri() {
        echo "Hai, nama saya <b>$this->nama</b>.<br>";
    }

    // Method untuk mengatur nama dengan validasi menggunakan regex.
    public function setNama($nama) {
        // Regex untuk mencocokkan properti nama
        $regex = '/^[a-zA-Z\s]+$/';
        // Mencocokkan properti nama sesuai dengan pola regex atau tidak
        if (!preg_match($regex, $nama)){
            // Jika tidak sesuai dengan pola regex maka akan ditampilkan pesan
            throw new InvalidArgumentException('Nama Harus Terdiri dari Huruf!!');
        }
        $this->nama = $nama;
    }
}

// Subclass dari Class Human
class Mahasiswa extends Human {
    // Properti
    private $nim;
    private $matkul;
    private $kelas;

    // Constructor
    public function __construct($nama, $nim, $matkul, $kelas){
        // Memanggil constructor kelas induk (Human).
        parent::__construct($nama);
        // Memanggil method untuk mengatur NIM, mata kuliah, dan kelas dengan validasi.
        $this->setNim($nim);
        $this->setMatkul($matkul);
        $this->setKelas($kelas);
    }

    // Method untuk mengatur NIM dengan validasi menggunakan regex.
    public function setNim($nim) {
        // Regex untuk mencocokkan properti nim
        $regex = '/^[0-9]{9}$/';
        // Mencocokkan properti nim sesuai dengan pola regex atau tidak
        if (!preg_match($regex, $nim)) {
            // Jika tidak sesuai dengan pola regex maka akan ditampilkan pesan
            throw new InvalidArgumentException('NIM Harus Terdiri dari 9 Digit Angka!!');
        }
        $this->nim = $nim;
    }

    // Method untuk mengatur matkul dengan validasi menggunakan regex.
    public function setMatkul($matkul) {
        // Regex untuk mencocokkan properti matkul
        $regex = '/^[a-zA-Z\s]+$/';
        // Mencocokkan properti matkul sesuai dengan pola regex atau tidak
        if (!preg_match($regex, $matkul)) {
            // Jika tidak sesuai dengan pola regex maka akan ditampilkan pesan
            throw new InvalidArgumentException('Mata Kuliah Harus Terdiri dari Huruf!!');
        }
        $this->matkul = $matkul;
    }
    
    // Method untuk mengatur kelas dengan validasi menggunakan regex.
    public function setKelas($kelas) {
        // Regex untuk mencocokkan properti kelas
        $regex = '/^[A-Z]{2}$/';
        // Mencocokkan properti kelas sesuai dengan pola regex atau tidak
        if (!preg_match($regex, $kelas)) {
            // Jika tidak sesuai dengan pola regex maka akan ditampilkan pesan
            throw new InvalidArgumentException('Kelas Harus Berformat Teks (A-Z) dengan 2 Digit Huruf!!');
        }
        $this->kelas = $kelas;
    }

    // Method untuk menampilkan data mahasiswa
    public function dataMahasiswa() {
        echo "NIM saya <b>$this->nim</b>, saya sedang melakukan praktikum mata kuliah <b>$this->matkul</b> kelas <b>$this->kelas</b>.<br>";
    }
}

try {
    // Membuat objek dari class Mahasiswa dengan constructor
    $mahasiswa1 = new Mahasiswa("KHAIRANI BILQIS", "121140091", "Pemrograman Web", "RB");
    // Memanggil method dataDiri yang diwarisi dari class Human
    $mahasiswa1->dataDiri();
    // Memanggil method dataMahasiswa
    $mahasiswa1->dataMahasiswa();
} catch (InvalidArgumentException $e) {
    echo "Kesalahan: " . $e->getMessage(). "\n";
    echo "<br>";
}

// Blok try-catch untuk menangani exception yang mungkin terjadi.
try {
    // Membuat objek dari class Mahasiswa dengan constructor
    $mahasiswa2 = new Mahasiswa("Hasna Dhiya Azizah", "121140029", "Pemrograman Web", "RB");
    // Menyebabkan exception dengan memberikan nilai yang salah
    $mahasiswa2->setNama("H4sna Dh1ya Aziz4h");
    // Memanggil method dataMahasiswa
    $mahasiswa2->dataMahasiswa();
} catch (InvalidArgumentException $e) {
    echo "Kesalahan: " . $e->getMessage(). "\n";
    echo "<br>";
}

try {
    // Membuat objek dari class Mahasiswa dengan constructor
    $mahasiswa2 = new Mahasiswa("Hasna Dhiya Azizah", "121140029", "Pemrograman Web", "RB");
    // Menyebabkan exception dengan memberikan nilai yang salah
    $mahasiswa2->setNim("I21140O29");
    // Memanggil method dataMahasiswa
    $mahasiswa2->dataMahasiswa();
} catch (InvalidArgumentException $e) {
    echo "Kesalahan: " . $e->getMessage(). "\n";
    echo "<br>";
}
?>
