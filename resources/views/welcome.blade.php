
<!DOCTYPE HTML>
<!--
    Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>La palmera</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    </head>
    <body class="homepage">

    <!-- Header -->
        <div id="header">
            <div id="logo-wrapper">
                <div class="container">
                        
                    <!-- Logo -->
                        <div id="logo">
                            <h1><a href="#">Lacteos La Palmera</a></h1>
                            <span>INVENTARIO</span>
                        </div>
                    
                </div>
            </div>          
            <div class="container">
                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="active"><a href="inicio.html">Inicio</a></li>
                            <li><a href="{{route('products.index')}}">Productos</a></li>
                            <li><a href="Proveedores.html">Proveedores</a></li>
                            <li><a href="insumo.html">Insumo</a></li>
                            <li><a href="estadisticas.html">Estadisticas</a></li>
                            
                        </ul>
                    </nav>
            </div>
        </div>
    <!-- Header -->
        
    <!-- Banner -->
        <div id="banner">
            <div class="container">
            </div>
        </div>
    <!-- /Banner -->

    <!-- Main -->
    @yield('content')
        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
        <div id="copyright">
            <div class="container">
                <section>
                    Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
                </section>
            </div>
        </div>

    </body>
</html>

