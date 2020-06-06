<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa Hombre</title>

    <link rel="stylesheet" href="css/estilo_catalogo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/63fafe2dae.js" crossorigin="anonymous"></script>


</head>

<body>

    <div class="container-fluid">
        <div class="row position-relative">
            <!-- MENU LATERAL -->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 contenedor-menu m-0 pt-0 bg-dark d-inline-block">
                <a href="#" class="btn-menu p-2 w-100">Menu<i class="icono fas fa-bars"></i></a>
                <ul class="menu bg-dark">
                    <li><a href="#">Inicio</a></li>
                    <li class="activado"><a href="#">Ropa<i class="icono derecha fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="a">Mujer</a></li>
                            <li><a href="a">Hombre</a></li>
                            <li><a href="a">Niños y niñas</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accesorios</a></li>
                    <li><a href="#">Articulos del hogar</a></li>
                </ul>
            </div>

        
            <!-- MENU LATERAL -->

            <!-- CATALOGO DE PRODUCTOS -->
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 border d-inline-block contenedor-catalogo m-0 p-0">
                <div class="w-100">
                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>

                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>


                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>


                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>


                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>
                    <div class="product-catalog">
                        <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                        <div class="product-catalog-info">
                            <p id="nombre">CAMISETA CON COLIBRI</p>
                            <p id="precio">19.99 $</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CATALOGO DE PRODUCTOS -->
        </div>
    </div>

</body>

<!-- LIBRERIAS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- <script src="boton-menu.js"></script> -->
<!-- LIBRERIAS -->

<script>
    $(".btn-menu").click(function() {
        $(".contenedor-menu .menu").slideToggle("slow");
    });
</script>

</html>