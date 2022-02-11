<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="css/quill/quill.snow.css" rel="stylesheet">
  <link href="css/quill/quill.bubble.css" rel="stylesheet">

  <link href="css/remixicon/remixicon.css" rel="stylesheet">
  
  <link href="css/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.scss" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

    <?php include('components/header.php')?>
    <?php include('components/navbar.php')?>

  <main id="main" class="main">

    <?php include('components/navbar.php')?>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          <?php include('components/summary-students.php')?>


        <div class="col-xxl-6 col-md-6">
            <?php include('components/little-card.php')?>
        </div>
        <div class="col-xxl-6 col-md-6">
          <?php include('components/little-card.php')?>
        </div>
        
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <?php $someVar="1"; ?>
         <?php include('components/graph-students.php')?>
         <?php $someVar="2"; ?>
         <?php include('components/graph-students.php')?>

          


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- Vertically centered Modal -->

              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Vertically Centered</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

  <?php include('components/footer.php')?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="js/apexcharts/apexcharts.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/simple-datatables/simple-datatables.js"></script>
  <script src="js/chart.js/chart.min.js"></script>
  <script src="js/echarts/echarts.min.js"></script>

  <script src="js/main.js"></script>
  

</body>

</html>