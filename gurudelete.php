<?php
require 'koneksi.php';
$del_guru = $_GET["hal"];

if (delete_guru($del_guru) > 0) {
  echo "<script>
                    alert ('Data Berhasil Dihapus!');
                    document.location.href = 'guru.php';
            </script>";
} else {
  echo "<script>
                alert ('Data Gagal Dihapus!');
                document.location.href = 'guru.php';
            </script>";
};
mysqli_close($conn);
