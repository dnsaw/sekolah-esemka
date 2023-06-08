<?php
$servername =   'localhost';
$username   =   'root';
$password   =   '';
$dbname     =   "sekolah_esemka";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if ($conn === false) {
  die("ERROR: " . mysqli_connect_error());
}

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

$user = mysqli_query($conn, "SELECT * FROM user");
$siswa = mysqli_query($conn, "SELECT * FROM siswa");
$guru = mysqli_query($conn, "SELECT * FROM guru");

// Add siswa START
function add_siswa($addsiswa)
{
  global $conn;
  $nama = $addsiswa["nama"];
  $nis = $addsiswa["nis"];
  $tempatlahir = $addsiswa["tempatlahir"];
  $tgl_lahir = $addsiswa["tgl_lahir"];
  $jeniskelamin = $addsiswa["jeniskelamin"];
  $agama = $addsiswa["agama"];
  $alamat = $addsiswa["alamat"];

  $query = "INSERT INTO siswa VALUES ('', '$nama', '$nis', '$tempatlahir', '$tgl_lahir', '$jeniskelamin', '$agama', '$alamat') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
// Add Siswa END

// Delete siswa START
function delete_siswa($del_siswa)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE id = $del_siswa");
  return mysqli_affected_rows($conn);
};
// Delete Siswa END

function editsiswa($siswaedit)
{
  global $conn;
  $id = $siswaedit["id"];
  $nama = $siswaedit["nama"];
  $nis = $siswaedit["nis"];
  $tempatlahir = $siswaedit["tempatlahir"];
  $tgl_lahir = $siswaedit["tgl_lahir"];
  $jeniskelamin = $siswaedit["jeniskelamin"];
  $agama = $siswaedit["agama"];
  $alamat = $siswaedit["alamat"];

  $query = "UPDATE siswa SET
                nama = '$nama',
                nis = '$nis',
                tempatlahir = '$tempatlahir',
                tgl_lahir = '$tgl_lahir',
                jeniskelamin = '$jeniskelamin',
                agama = '$agama',
                alamat = '$alamat'
                WHERE id = $id
        ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function add_guru($addguru)
{
  global $conn;
  $nama = $addguru["nama"];
  $nig = $addguru["nig"];
  $tempatlahir = $addguru["tempatlahir"];
  $tgl_lahir = $addguru["tgl_lahir"];
  $jeniskelamin = $addguru["jeniskelamin"];
  $agama = $addguru["agama"];
  $alamat = $addguru["alamat"];

  $query = "INSERT INTO guru VALUES ('', '$nama', '$nig', '$tempatlahir', '$tgl_lahir', '$jeniskelamin', '$agama', '$alamat') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function editguru($guruedit)
{
  global $conn;
  $id = $guruedit["id"];
  $nama = $guruedit["nama"];
  $nig = $guruedit["nig"];
  $tempatlahir = $guruedit["tempatlahir"];
  $tgl_lahir = $guruedit["tgl_lahir"];
  $jeniskelamin = $guruedit["jeniskelamin"];
  $agama = $guruedit["agama"];
  $alamat = $guruedit["alamat"];

  $query = "UPDATE guru SET
                nama = '$nama',
                nig = '$nig',
                tempatlahir = '$tempatlahir',
                tgl_lahir = '$tgl_lahir',
                jeniskelamin = '$jeniskelamin',
                agama = '$agama',
                alamat = '$alamat'
                WHERE id = $id
        ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete_guru($del_guru)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM guru WHERE id = $del_guru");
  return mysqli_affected_rows($conn);
};

function komen($komentar)
{
  global $conn;
  $komen = $komentar["komentar"];

  $query = "INSERT INTO komen VALUES ('', '$komen') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
