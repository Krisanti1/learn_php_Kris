<?php
// ==========================================
// TANTANGAN 1: Biodata Sederhana
// ==========================================
$nama_satu = "Budi";
$kelas_satu = "XI RPL";
$umur_satu = "17 tahun";
$sekolah_satu = "SMK Contoh";

echo "=== BIODATA SISWA ===<br>";
echo "Nama : " . $nama_satu . "<br>";
echo "Kelas : " . $kelas_satu . "<br>";
echo "Umur : " . $umur_satu . "<br>";
echo "Sekolah : " . $sekolah_satu . "<br><br>";


// ==========================================
// TANTANGAN 2: Gunakan printf()
// ==========================================
$nama_dua = "Andi";
$umur_dua = 17;
$nilai_dua = 87.5;

printf("Nama: %s<br>", $nama_dua);
printf("Umur: %d tahun<br>", $umur_dua);
printf("Nilai: %.2f<br><br>", $nilai_dua); // Bonus 2 angka dibelakang koma


// ==========================================
// TANTANGAN 3: Tebak Output
// ==========================================
$nama_tiga = "Siti";
$umur_tiga = 16;
echo "Nama: " . $nama_tiga . "<br>";
printf("Umur: %d tahun<br>", $umur_tiga);
print "Selamat belajar PHP!<br><br>";


// ==========================================
// TANTANGAN 4: Perbaikan Kode Error
// ==========================================
$nama_empat = "Budi";
$umur_empat = 17;
$nilai_empat = 87.5;

echo "Nama: " . $nama_empat . "<br>";
echo "Umur: " . $umur_empat . " tahun<br>";
echo "Saya belajar PHP " . "Dasar PHP<br><br>";


// ==========================================
// TANTANGAN 5: Mini Project Kartu Profil
// ==========================================
$nama_lima = "Krisanti";
$kelas_lima = "TK B";
$jurusan_lima = "Teknik Komputer";
$umur_lima = 20;
$nilai_lima = 85.0;

echo "===============================<br>";
echo "==== KARTU PROFIL SISWA ====<br>";
echo "===============================<br>";
echo "Nama    : " . $nama_lima . "<br>";
echo "Kelas   : " . $kelas_lima . "<br>";
echo "Jurusan : " . $jurusan_lima . "<br>";
printf("Umur    : %d tahun<br>", $umur_lima);
printf("Nilai   : %.2f<br>", $nilai_lima);


// Bonus Status Kelulusan
if ($nilai_lima >= 75) {
    echo "Status  : LULUS<br>";
} else {
    echo "Status  : TIDAK LULUS<br>";
}
echo "===============================";
?>