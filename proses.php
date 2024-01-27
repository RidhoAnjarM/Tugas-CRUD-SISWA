<?php
include("config.php");

if (isset($_POST['aksi'])){

    if($_POST['aksi']=='add'){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_tel = $_POST['no_tel'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];

    $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));

    $sql = "INSERT INTO pendaftaran(nama,alamat,jenis_kelamin,agama,sekolah_asal,tanggal_lahir,no_tel,email,desa,kecamatan,kota,provinsi,kode_pos)
    VALUES ('$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$tanggal_mysql','$no_tel','$email','$desa','$kecamatan','$kota','$provinsi','$kode_pos')";
    $query = mysqli_query($db, $sql);
 
    if( $query ){

        header('location: index.php?status-sukses');
    } else {

        header('location: index.php?status-gagal');
    }
}else if($_POST['aksi']=='edit'){
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_tel = $_POST['no_tel'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));
    $sql ="UPDATE pendaftaran SET nama =' $nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin',
    agama = '$agama', sekolah_asal = '$sekolah_asal', tanggal_lahir = '$tanggal_mysql', no_tel = '$no_tel',
    email = '$email', desa = '$desa', kecamatan = '$kecamatan', kota = '$kota', provinsi = '$provinsi', kode_pos = '$kode_pos' 
    WHERE id_pendaftaran = '$id_pendaftaran'";
    $query = mysqli_query($db, $sql);
    if($query){
        header('location: index.php?status-sukses');
    }else{
        header('location: index.php?status-gagal');
    }
 }
}
if(isset($_GET['hapus'])){


    $id_pendaftaran=$_GET['hapus'];


    $sql="DELETE FROM pendaftaran WHERE id_pendaftaran ='$id_pendaftaran';";
    $query= mysqli_query($db,$sql);


    if( $query ){
        header('location:index.php?status=sukses');
    }else{
        header('location:index.php?status=gagal');
    }
}
    ?>