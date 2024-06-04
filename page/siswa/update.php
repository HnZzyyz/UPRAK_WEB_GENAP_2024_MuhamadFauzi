<?php 
    include "../../layout/header.php";
    include "../../config/database.php";

    $sql = 'SELECT * FROM siswa where nis =' . $_GET['nis'];
    $hasil = $connect->query($sql);
    $data = $hasil->fetch_assoc();

    
    $query = "SELECT * FROM spp ORDER BY tahun DESC";

    $spp = $connect->query($query);

    $query = "SELECT * FROM kelas";

    $kelas = $connect->query($query);

    $data1 = [
        'title' => 'Tambah Siswa',
        'spp' => $spp,
        'kelas' => $kelas  
    ];

    if (isset($_POST['nis'])) {
    $sql = 'UPDATE siswa SET 
    nis             ="' . $_POST['nis'] . '",
    nama_lengkap               ="' . $_POST['nama_lengkap'] . '",
    tanggal_lahir             ="' . $_POST['tanggal_lahir'] . '",
    jenis_kelamin             ="' . $_POST['jenis_kelamin'] . '",
    alamat             ="' . $_POST['alamat'] . '",
    no_hp             ="' . $_POST['no_hp'] . '",
    spp_id             ="' . $_POST['spp_id'] . '",
    kelas_id             ="' . $_POST['kelas_id'] . '",
    WHERE nis=' . $_GET['nis'];

    $connect->query($sql);
    header('location: index.php');
    }
    
?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "../../layout/sidebar.php"?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include "../../layout/navbar.php"?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
          <form action="" method="post" class="row g-3 justify-content-center">
            <h3 style="text-align: center;">Update Data SPP</h3>
            
            <div class="mb-3">
                <label for="input" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" value="<?= $data['nis'] ?>" readonly>
            </div>
            
            <div class="mb-3">
                <label for="input" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin">
                  <option value="Pilih">Pilih</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <!-- <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>"> -->
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">No HP</label>
                <input type="text" class="form-control" name="no_hp" value="<?= $data['no_hp'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">SPP</label>
                <select name="spp" class="form-control">
                  <option value="Pilih">Pilih</option>
                  <?php foreach ($data1['spp'] as $spp) : ?>
                        <option value="<?= $spp['id'] ?>"><?= $spp['tahun'] . '-' . $spp['nominal'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Kelas</label>
                <select name="kelas" class="form-control">
                  <option value="Pilih">Pilih</option>
                  <?php foreach ($data1['kelas'] as $kelas) : ?>
                        <option value="<?= $kelas['id'] ?>"><?= $kelas['kode_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
                           
             <div class="mb-3 text-center">
                <input class="btn btn-outline-success me-2"type="submit" value="Submit">
                <a href="index.php" class="btn btn-outline-danger">Cancel</a>
             </div>                
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php"?>
</body>

</html>