<?php
include "../../layout/header.php";
include "../../config/database.php";

$sql = 'select * from siswa
        LEFT join kelas ON siswa.kelas_id = kelas.id
        LEFT join spp ON siswa.spp_id = spp.id';
$hasil = $connect->query($sql);

$query = "SELECT * FROM spp ORDER BY tahun DESC";

        $spp = $connect->query($query);

        $query = "SELECT * FROM kelas";

        $kelas = $connect->query($query);

        $data = [
            'title' => 'Tambah Siswa',
            'spp' => $spp,
            'kelas' => $kelas
        ];

?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "../../layout/sidebar.php" ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include "../../layout/navbar.php" ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="post.php" method="post" class="row g-3 justify-content-center">
              <h3 style="text-align: center;">Input Data Siswa</h3>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">NIS</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="number" name="nis" class="form-control w-100">
                  <?php if(isset($error)): ?>
                    <label for="input" class="col-form-label text-bg-danger">NIS Sudah Terpakai !!</label>
                  <?php endif?>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="nama_lengkap" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Tanggal Lahir</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="date" name="tanggal_lahir" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                <select class="form-control" name="jenis_kelamin">
                  <option value="Pilih">Pilih</option>
                  <option value="P">Perempuan</option>
                  <option value="L">Laki-Laki</option>
                </select>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Alamat</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="alamat" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">No HP</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="no_hp" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">SPP</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                <select name="spp" class="form-control">
                  <option value="Pilih">Pilih</option>
                  <?php foreach ($data['spp'] as $spp) : ?>
                        <option value="<?= $spp['id'] ?>"><?= $spp['tahun'] . '-' . $spp['nominal'] ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Kelas</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                    <select name="kelas" class="form-control">
                      <option value="Pilih">Pilih</option>
                      <?php foreach ($data['kelas'] as $kelas) : ?>
                            <option value="<?= $kelas['id'] ?>"><?= $kelas['kode_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="btn d-block">
                <input class="btn btn-outline-success" style=" width: 50%;" type="submit" value="Submit">
                <input class="btn btn-outline-danger" style="margin-top: 20px; width: 50%; " type="submit" value="Cancel">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php" ?>
</body>

</html>