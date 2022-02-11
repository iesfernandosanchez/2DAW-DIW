<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparación Examen Colegio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/datatable.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
    
    <!-- ======= Header ======= -->
    <? include('components/header.php') ?>
    <!-- End Header -->
    
    <!-- ======= Sidebar ======= -->
    <? include('components/sidebar.php') ?>
    <!-- End Sidebar-->
    
    <main id="main" class="main">
        
        <div class="pagetitle">
            <h1>Alumnos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Alumnos</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        
        <section class="section dashboard">
            <div class="row">
                
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                                                                       
                        <!-- Relación de alumnos -->
                        <div class="col-12">
                            <div class="card recent-sales">
                                
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtro</h6>
                                        </li>
                                        
                                        <li><a class="dropdown-item" href="#">Todos</a></li>
                                        <li><a class="dropdown-item" href="#">Becados</a></li>
                                        <li><a class="dropdown-item" href="#">Sin beca</a></li>
                                    </ul>
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">Relación de alumnos<span>| Todos</span></h5>
                                    
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Nota media</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">#2457</th>
                                                <td>Brandon Jacob</td>
                                                <td>6.4</td>
                                                <td>
                                                    <a href="#" id="2457" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="badge bg-primary">Consultar</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td>8.2</td>
                                                <td>
                                                    <a href="#" id="2147" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="badge bg-primary">Consultar</span>
                                                    </a>
                                                </td>                                            
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td>4.9</td>
                                                <td>
                                                    <a href="#" id="2049" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="badge bg-primary">Consultar</span>
                                                    </a>
                                                </td>                                              </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td>5.1</td>
                                                <td>
                                                    <a href="#" id="2644" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="badge bg-primary">Consultar</span>
                                                    </a>
                                                </td>                                              </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2344</a></th>
                                                <td>Raheem Lehner</td>
                                                <td>9.7</td>
                                                <td>
                                                    <a href="#" id="2344" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <span class="badge bg-primary">Consultar</span>
                                                    </a>
                                                </td>                                               </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div><!-- End Relación de alumnos -->

                        <!-- Sales Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                                </div>

                                <div class="card-body">
                                <h5 class="card-title">Sales <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                                </div>

                                <div class="card-body">
                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                    <h6>$3,264</h6>
                                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->          
                    </div>


                </div><!-- End Left side columns -->
                
                <!-- Right side columns -->
                <div class="col-lg-4">

                <!-- Website Traffic -->
                <div class="card">

                    <div class="card-body pb-0">
                        <h5 class="card-title">Evaluaciones</h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                trigger: 'item'
                                },
                                legend: {
                                top: '5%',
                                left: 'center'
                                },
                                series: [{
                                name: 'Access From',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                    show: true,
                                    fontSize: '18',
                                    fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: [{
                                    value: 1048,
                                    name: 'Search Engine'
                                    },
                                    {
                                    value: 735,
                                    name: 'Direct'
                                    },
                                    {
                                    value: 580,
                                    name: 'Email'
                                    },
                                    {
                                    value: 484,
                                    name: 'Union Ads'
                                    },
                                    {
                                    value: 300,
                                    name: 'Video Ads'
                                    }
                                ]
                                }]
                            });
                            });
                        </script>

                        </div>
                    </div><!-- End Website Traffic -->
                    
                    <!-- Budget Report -->
                    <div class="card">
                        Budget Report
                    </div><!-- End Budget Report -->

                </div><!-- End Right side columns -->
                
            </div>
        </section>
        
    </main><!-- End #main -->

    <!-- ======= Modal ======= -->
    <? include('components/modal.php') ?>
    <!-- End Modal-->
    
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="js/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/echarts.min.js"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>

</html>