<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content=""width=device-width, initial-scale="1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <title>Pan Tadeusz</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col py-3">
                   
          <header>
            <!-- Navbar -->
            <nav data-mdb-navbar-init class="navbar navbar-expand-lg bg-body">
              <div class="container-fluid">
                <button
                  data-mdb-collapse-init
                  class="navbar-toggler"
                  type="button"
                  data-mdb-target="#navbarExample01"
                  aria-controls="navbarExample01"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">

                </div>
              </div>
            </nav>
            <!-- Navbar -->
            <!-- Jumbotron -->
            <div class="p-5 text-center bg-body-tertiary">
              <h1 class="mb-3">Pan Tadeusz</h1>
              <h4 class="mb-3">czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h4>
              <a data-mdb-ripple-init class="btn btn-primary" href="" role="button">Call to action</a>
            </div>
            <!-- Jumbotron -->
          </header>
         

          <div class="row">
            <div class="container text-center">
            <div class="col d-flex justify-content-start">
                <img src="mickiewicz.jpg" alt="" style="height: 300px">
                <ul>
                    <li><a href="./k1.html">Księga 1</a></li>
                    <li><a href="./k2.html">Księga 2</a></li>
                    <li><a href="./k3.html">Księga 3</a></li>
                    <li><a href="./k4.html">Księga 4</a></li>
                    <li><a href="./k5.html">Księga 5</a></li>
                    <li><a href="./k6.html">Księga 6</a></li>
                    <li><a href="./k7.html">Księga 7</a></li>
                    <li><a href="./k8.html">Księga 8</a></li>
                    <li><a href="./k9.html">Księga 9</a></li>
                    <li><a href="./k10.html">Księga 10</a></li>
                    <li><a href="./k11.html">Księga 11</a></li>
                    <li><a href="./k12.html">Księga 12</a></li>
                </ul>
            </div>
        </div>
        </div>
        
        
                </div>
                
            </div>
        </div>
        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(33, 37, 41, 1);">
                <font color="#FFFFFF"> Litwo, ojczyzno moja! </font>
            </div>
            <!-- Copyright -->
          </footer>
    
    </body>
</html>