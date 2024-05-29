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
            <form action="post.php" method="post" class="row g-3 justify-content-center">
              <h3 style="text-align: center;">Input Data Kelas</h3>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Id</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="number" name="id" class="form-control w-100" readonly>
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Kode Kelas</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="kode_kelas" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Tingkat</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="tingkat" class="form-control w-100">
                </div>
              </div>
              <div class="row g-2 align-items-center">
                <div class="col-auto">
                  <label for="input" class="col-form-label">Jurusan ID</label>
                </div>
                <div class="col-auto" style="width: 100%;">
                  <input type="text" name="jurusan_id" class="form-control w-100">
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