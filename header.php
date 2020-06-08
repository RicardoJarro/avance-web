<html>
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/estilo_header_footer.css" />

</head>

</head>
<body>
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links float-left">
                    <li><a href="#"><i class="fa fa-phone"></i> Numero de telefono</a>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> dispers@gmail.com.com</a>
                    </li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> ubicacion</a>
                    </li>
                    <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Ayuda</a>
                    </li>
                </ul>
                <ul class="header-links float-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o"></i> Cuenta</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fa fa-user-o"></i> Perfil de usuario </a>
                            <br> <a href="compras_realizadas.php" class="dropdown-item"> <i class="fa fa-list-ol" aria-hidden="true"></i> Listar compras </a>
                            <br> <a href="#" class="dropdown-item"> <i class="fa fa-times" aria-hidden="true"></i> Cerrar Sesion </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->
        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-lg-3">
                        <div class="header-logo"> <a href="index.html" class="logo">

                                <img src="images/logoDispers.png" alt="" width="220" height="60">

                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
                    <!-- SEARCH BAR -->
                    <div class="col-lg-7 aling-itme-center">
                        <div class="header-search">
                            <form>
                                <input class="input" placeholder="Buscar Producto">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
                    <!-- ACCOUNT -->
                    <div class="col-lg-2 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

                                    <i class="fa fa-shopping-cart"></i>

                                    <span>Tu Carrito</span>

                                    <div class="qty">3</div>

                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/camiseta.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">camiseta</a></h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$20.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/taza.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">Taza personalizada</a></h3>
                                                <h4 class="product-price"><span class="qty">2x</span>$15.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart-summary"> <small>3 Articulos seleccionados</small>
                                        <h5>SUBTOTAL: $50.00</h5>
                                    </div>
                                    <div class="cart-btns"> <a href="carrito.php">Ver Carrito</a>
                                        <a href="facturacion.php">Comprar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->
                            <!-- Menu Toogle -->
                            <div class="menu-toggle"> <a href="#">

                                    <i class="fa fa-bars"></i>

                                    <span>Menu</span>

                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
        <!-- /HEADER -->
        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">

                    <!-- NAV -->
                    <ul class="main-nav nav">
                        <li class="nav-item"><a href="Inicio%20-%20DISPERS.html" class="nav-link dropdown-toggle" data-toggle="dropdown"> Inicio </a>
                        </li>
                        <li class="nav-item dropdown"> <a href="catalogo_hombre.php" class="nav-link dropdown-toggle" data-toggle="dropdown"> Ropa </a>
                            <div class="dropdown-menu"> <a href="catalogo_hombre.php" class="dropdown-item">Ropa de hombre </a>
                                <br> <a href="catalogo_mujer.php" class="dropdown-item"> Ropa de mujeres </a>
                                <br> <a href="catalogo_ninos.php" class="dropdown-item"> Ropa de niños </a>
                                <br>
                            </div>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="Mujer">Accesorios</a>
                            <div class="dropdown-menu"> <a href="#" class="dropdown-item"> Billeteras </a>
                                <br> <a href="#" class="dropdown-item"> Gorras </a>
                                <br>
                            </div>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="nino">Articulos del hogar</a>
                            <div class="dropdown-menu"> <a href="#" class="dropdown-item"> Tazas </a>
                                <br> <a href="#" class="dropdown-item"> Posters </a>
                                <br> <a href="#" class="dropdown-item"> Padmouse </a>
                                <br>
                            </div>
                        </li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>