<?php
include'config.php';
 $id_pendaftaran='';
 $nama='';
 $alamat='';
 $jenis_kelamin='';
 $agama='';
 $sekolah_asal='';
 $tanggal_lahir='';
 $no_tel='';
 $email='';
 $desa='';
 $kecamatan='';
 $kota='';
 $provinsi='';
 $kode_pos='';

if(isset($_GET['edit'])){
  $id_pendaftaran=$_GET['edit'];
  $sql= "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
  $query = mysqli_query($db, $sql);
  $result = mysqli_fetch_assoc($query);
  $nama = $result['nama'];
  $alamat = $result['alamat'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $agama = $result['agama'];
  $sekolah_asal = $result['sekolah_asal'];
  $tanggal_lahir = $result['tanggal_lahir'];
  $no_tel = $result['no_tel'];
  $email = $result['email'];
  $desa = $result['desa'];
  $kecamatan = $result['kecamatan'];
  $kota = $result['kota'];
  $provinsi = $result['provinsi'];
  $kode_pos = $result['kode_pos'];
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Cisarua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SMK Negeri 1 cisarua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 cisarua</h2><br>

<form action="proses.php" method="POST">
  <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" value="<?php echo $nama;?>" placeholder="nama lengkap" />
</div>
<div class="mb-3">
    <label for="nama" class="form-label">Tanggal Lahir</label>
    <input type="date" class ="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'laki-laki'){echo "checked";}?>value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'perempuan'){echo "checked";}?>value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option <?php if($agama == 'Islam')   {echo "selected";}?> value="Islam">Islam</option>
                <option <?php if($agama == 'Kristen') {echo "selected";}?> value="Kristen">Kristen</option>
                <option <?php if($agama == 'Hindu')   {echo "selected";}?> value="Hindu">Hindu</option>
                <option <?php if($agama == 'Budha')   {echo "selected";}?> value="Budha">Budha</option>
                <option <?php if($agama == 'Atheis')  {echo "selected";}?> value="Atheis">Atheis</option>
                <option <?php if($agama == 'Konghucu'){echo "selected";}?> value="Konghucu">Atheis</option>
            </select>
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">alamat</label><br>
    <textarea class="form-control" name="alamat" rows="2"><?php echo $alamat;?></textarea>
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" value="<?php echo $sekolah_asal; ?>" placeholder="nama sekolah" />
</div>
<div class="mb-3">
     <label for="desa" class="form-label">Desa/kelurahan </label>
     <input type="text" class ="form-control" name="desa" value="<?php echo $desa; ?>" placeholder="desa" />
</div>
<div class="mb-3">
    <label for="kecamatan" class="form-label">Kecamatan</label>
    <input type="text" class ="form-control" name="kecamatan" value="<?php echo $kecamatan; ?>" placeholder="kecamatan" />
</div>
<div class="mb-3">
    <label for="kota" class="form-label">Kabupaten/Kota</label>
    <select name="kota" class="form-control">
                <option <?php if($kota == 'Kabupaten Bandung')      {echo"selected";}?> value="Kabupaten Bandung">Kabupaten Bandung</option>
                <option <?php if($kota == 'Kabupaten Bandung Barat'){echo"selected";}?> value="Kabupaten Bandung Barat">Kabupaten Bandung Barat</option>
                <option <?php if($kota == 'Kabupaten Sumedang')     {echo"selected";}?> value="Kabupaten Sumedang">Kabupaten Sumedang</option>
                <option <?php if($kota == 'Kota Bandung')           {echo"selected";}?> value="Kota Bandung">Kota Bandung</option>
                <option <?php if($kota == 'Kota Cimahi')            {echo"selected";}?> value="Kota Cimahi">Kota Cimahi</option>
            </select>
</div>
<div class="mb-3">
<label for="provinsi" class="form-label">Provinsi</label>
    <select name="provinsi" class="form-control">
                <option  <?php if($provinsi == 'Banten')        {echo"selected";}?> value="Banten">Banten</option>
                <option  <?php if($provinsi == 'D.I Yogyakarta'){echo"selected";}?> value="D.I Yogyakarta">D.I Yogyakarta</option>
                <option  <?php if($provinsi == 'DKI Jakarta')   {echo"selected";}?> value="DKI Jakarta">DKI Jakrtu</option>
                <option  <?php if($provinsi == 'Jawa Barat')    {echo"selected";}?> value="Jawa Barat">Jawa Barat</option>
                <option  <?php if($provinsi == 'Jawa Tengah')   {echo"selected";}?> value="Jawa Tengah">Jawa Tengah</option>
            </select>
</div>
<div class="mb-3">
        <label for="kode_pos" class="form-label">Kode Pos</label>
        <input type="text" class ="form-control" name="kode_pos" value="<?php echo $kode_pos; ?>" placeholder="kode pos" />
</div>
<div class="mb-3">
        <label for="no_tel" class="form-label">No Telepon</label>
        <input type="text" class ="form-control" name="no_tel" value="<?php echo $no_tel; ?>" placeholder="no telepon" />
</div>
<div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class ="form-control" name="email" value="<?php echo $email; ?>" placeholder="email" />

<div class="mb-3 row mt-4">
  <div class="col">
   <?php
   if(isset($_GET['edit'])){
   ?>
   <button type="submit" name="aksi" value="edit" class="btn btn-primary">Simpan Perubahan</button>
   <?php
   }else{
   ?>
   <button type="submit" name="aksi" value="add" class="btn btn-primary">Daftar</button>
   <?php
   }
   ?>
   <a href="index.php" type="button" class="btn btn-danger">batal</a>
  </div>
</div>
    </form>
</div>
   </body>
</html>