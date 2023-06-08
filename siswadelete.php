<?php //Delete siswa START
require 'koneksi.php';
$del_siswa = $_GET["hal"];

if (delete_siswa($del_siswa) > 0) {
  echo "<script>
                    alert ('Data Berhasil Dihapus!');
                    document.location.href = 'siswa.php';
            </script>";
} else {
  echo "<script>
                alert ('Data Gagal Dihapus!');
                document.location.href = 'siswa.php';
            </script>";
};
mysqli_close($conn);
//Delete Siswa END 
