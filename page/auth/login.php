<?php
session_start();
include "../../layout/header.php";
include "../../config/database.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connect,"SELECT * FROM admin WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        $cek = $password;
    }
    
};

$sql = 'select * from jurusan';
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
              <h3>Login</h3>
            </div>
            <div class="row">
              <form action="" method="post">
                <h3 style="text-align: center;">Update Data SPP</h3>
                <div class="mb-3">
                    <label for="input" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                
                <div class="mb-3">
                    <label for="input" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="mb-3 text-center">
                    <button class="btn btn-outline-success me-2"type="submit" name="login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php" ?>
</body>

</html>