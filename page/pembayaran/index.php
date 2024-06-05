<?php
include "../../layout/header.php";
include "../../config/database.php";



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
            <div class="row mb-3">
              <h3>Data Tagihan</h3>
            </div>
            <div class="row">
              <form action="" class="row g3 align-items-center " method="post">
                <div class="col-auto">
                  <label for="input" class="form-label">NIS</label>
                </div>
                <div class="col-auto" style="width: 24vw;">
                  <input type="text" placeholder="Masukkan NIS" required class="form-control w-70" name="nis">
                </div>
                <div class="col-auto">
                  <input type="text" placeholder="Masukkan Tahun" required class="form-control w-30" name="tahun">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary" style="width: 10vw;">Kirim</button>
                </div>
              </form>

              <?php
              if (isset($_POST['nis']) && isset($_POST['tahun'])) {
                $nis = $_POST['nis'];
                $tahun = $_POST['tahun'];
                $sl = "SELECT * FROM pembayaran WHERE nis = '$nis' AND tahun_tagihan = '$tahun'";
                $hasil = $connect->query($sl);
                $sq = "SELECT nama_lengkap FROM siswa WHERE nis= '$nis'";
                $s = $connect->query($sq);
                $row = $s->fetch_assoc();
                if ($s->num_rows > 0) {
                  $nama = $row['nama_lengkap'];
                } else {
                  $nama = "";
                }
                $bulan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
                $bulan_dibayar = [];
                while($row = $hasil ->fetch_assoc()){
                    $bulan_dibayar[] = $row['bulan_tagihan']; 
                };
                if ($s->num_rows > 0){
              ?>
                  <div class="row g3 align-items-center mt-3">
                    <div class="col-auto" style="width: 20vw;">
                      <label for="label">NIS</label>
                    </div>
                    <div class="col-auto">
                      <label for="label">: <?= $nis ?></label>
                    </div>
                  </div>
                  <div class="row g3 align-items-center mt-2">
                    <div class="col-auto" style="width: 20vw;">
                      <label for="label">Nama Lengkap</label>
                    </div>
                    <div class="col-auto">
                      <label for="label">: <?= $nama ?></label>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Bulan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($bulan as $bu) :
                          $status = in_array($bu,$bulan_dibayar)? 'Lunas' : 'Belum Lunas'; ?>
                          <tr>
                            <td><?= $bu ?></td>
                            <td><?= $status?></td>
                          </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                  </table>
                <?php
                } else {
                ?>
                  <div class="alert alert-warning mt-3">Tidak ada data</div>
              <?php
                }
              }
              ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php" ?>
</body>

</html>