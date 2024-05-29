<?php 
    include "../../layout/header.php";
    include "../../config/database.php";

    $sql = 'SELECT * FROM spp where id =' . $_GET['id'];
    $hasil = $connect->query($sql);
    $data = $hasil->fetch_assoc();

    if (isset($_POST['id'])) {
    $sql = 'UPDATE spp SET 
    id             ="' . $_POST['id'] . '",
    tahun               ="' . $_POST['tahun'] . '",
    nominal             ="' . $_POST['nominal'] . '"
    WHERE id=' . $_GET['id'];

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
                <label for="input" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>" readonly>
            </div>
            
            <div class="mb-3">
                <label for="input" class="form-label">Tahun</label>
                <input type="text" class="form-control" name="tahun" value="<?= $data['tahun'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Nominal</label>
                <input type="number" class="form-control" name="nominal" value="<?= $data['nominal'] ?>">
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