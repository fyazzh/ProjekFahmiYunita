<!-- tambah_mahasiswa.php --> 
<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];

    $sql = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";

    if (mysqli_query($conn, $sql)) {
        echo "Mahasiswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>