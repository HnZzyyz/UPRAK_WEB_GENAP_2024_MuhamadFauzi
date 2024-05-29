<?php
include "../../layout/header.php";
include "../../config/database.php";


$sql = 'select * from kelas';
$hasil = $connect->query($sql);

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
              <h3>Data SPP</h3>
            </div>
            <div class="row">
              <!-- Data Tabel -->
              <table class="table">
                <thead>
                  <tr style="color: black" class="bg-transparent rounded p-5 mx-0">
                    <th scope="col">ID</th>
                    <th scope="col">Kode Kelas</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Jurusan ID</th>
                    <th scope="col">Delete & Update</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($hasil as $item) {
                  ?>
                    <tr>
                      <td><?= $item['id'] ?></td>
                      <td><?= $item['kode_kelas'] ?></td>
                      <td><?= $item['tingkat'] ?></td>
                      <td><?= $item['jurusan_id'] ?></td>
                      <td>
                        <a href="update.php?id=<?= $item['id'] ?>" class="btn btn-outline-success me-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                          </svg>
                        </a>
                        <a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-outline-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                          </svg>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="tambah">
                <a href="tambah.php" class="btn btn-outline-success">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php" ?>
</body>

</html>