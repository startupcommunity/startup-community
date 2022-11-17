<template>
    <div class="container-fluid" style="padding: 0px 12px;">
        <!-- MENU PRINCIPAL -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg fondo">
                    <div class="container-fluid">
                        <div class="col-md-1 logo">
                            <img src="Frame.png" alt="Start Up">
                        </div>
                        <div class="col-md-1 logo-telefono">
                            <img src="logo-telefono.png" alt="Start Up">
                        </div>
                         <!-- <button class="navbar-toggler order-first primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
                            <button class="navbar-toggler order-first primary"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class=" icono-menu"><img src="menu.png" alt=""></span>
                        </button>
                        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <!-- <div class="collapse navbar-collapse col-md-5 menu-escritorio" id="navbarSupportedContent"> -->
                            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
                            <ul class="navbar-nav menu-hamburguesa">
                                <li class="nav-item">
                                    <a class="nav-link a-item" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a-item" aria-current="page" href="#">Startup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a-item" aria-current="page" href="#">Profesionales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a-item" aria-current="page" href="#">Inversor</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link a-item" aria-current="page" href="#">Comunidad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link crear-cuenta-telefono boton-menu-hmburguesa" aria-current="page" href="#">CREAR CUENTA</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-2 icono nav-item">
                            <p class=" me-auto mb-2 mb-lg-0"><img src="user.png" class="user-version-telefono" alt="Iniciar sesion"/><span class="iniciarsesion">Iniciar sesión</span></p>
                            <p class=" me-auto mb-2 mb-lg-0 ml-2 user-telefono"><img src="user-telefono.png" alt="Iniciar sesion"/><span class="iniciarsesion"></span>   </p>

                        </div>
                        <div class="col-md-3 crear-ceunta-telefono">
                                <button class="crearcuenta"> CREAR CUENTA</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- FIN MENU PRINCIPAL -->
        <!-- 1RA SECCION  -->
        <div class="row seccion-3">
            <div class="col-md-2">
                <h1 class="title-espacio">
                    Bienvenido a un Universo de Alto Valor
                </h1>
                <h3 class="title-espacio h3-title">
                    La comunidad que conecta  StartUps, Profesionales e Inversión
                </h3>
                <div style="display:flex;">
                    <div><input class="espacio-input" type="text" placeholder="Únete a la comunidad"/> </div>
                    <div><button class="suscribirme"> SUSCRIBIRME</button></div>
                </div>
            </div>
            <div class="col-md-10" style="z-index:1;" >
                <img src="Grupo140.png" alt="" class="img-astronauta">
                <img src="astronauta.png" class="version-img-movil" alt="">
                <div style="display:flex;">
                    <div><input class="espacio-input-telefono" type="text" placeholder="Únete a la comunidad"/> </div>
                    <div><button class="suscribirme-telefono"> SUSCRIBIRME</button></div>
                </div>
            </div>
        </div>
        <!-- FIN 1RA SECCION -->
        <!-- 2DA SECCION -->
        <div class="row seccion-2">

            <div class="col-md-4">
                <button class="boton-comun">Startup o proyectos</button>
            </div>
            <div class="col-md-4">
                <button class="boton-comun">Profesionales</button>

            </div>
            <div class="col-md-4">
                <button class="boton-comun">Inversores</button>
            </div>

        </div>
        <!-- FIN 2DA SECCION -->
        <!-- 3RA SECCION -->
            <div class="row seccion-4">
                <div class="col-md-12">
                    <img src="Line 9.png" alt="" class="linea">
                    <img src="lineatelefono.png" alt="" class="linea-telefono">

                    <h3 class="texto-linea">
                        ¡Somos la Comunidad StartUp!
                    </h3>
                    <p class="texto-p">
                        Formada por <b style="font-weight:900;">emprendedores, profesionales e inversores</b> que buscan <b style="font-weight:900;">cambiar el mundo.</b>
                    </p><br>

                    <p class="texto-p-mision">
                        Nuestra misión consiste en aportar las <b style="font-weight:900;">herramientas y recursos</b> para que puedas desarrollar<br> <b style="font-weight:900;">proyectos únicos</b> que te permitan alcanzar <b style="font-weight:900;">nuevos universos</b>.

                    </p><br>
                    <img src="Line 9.png" alt="" class="linea-1">
                    <img src="lineatelefono.png" alt="" class="linea-1-telefono">

                </div>
            </div>
        <!-- FIN 3RA SECCION -->
        <!-- 4TA SECCION -->
        <div class="row seccion-4">
                <div class="col-md-12">
                    <h3 class="texto-linea">
                        ¡Prepárate para despegar!
                    </h3>
                    <p class="texto-p-5">
                        Conoce los beneficios dentro de StartUp Community
                    </p>
                </div>
            </div>
        <!-- FIN 4TA SECCION -->
        <!-- 5TA SECCION -->
            <div class="row seccion-5">
                <div class="col-md-4 seccion-mundo" style=";">
                    <img src="startup.png" alt="" class="img-mundo">
                </div>
                <div class="col-md-8">
                    <img src="icono1.png" class="d-flex icono1" alt="" >
                    <img src="icono2.png" class="d-flex icono2" alt="" >
                    <img src="icono3.png" class="d-flex icono3" alt="">
                    <img src="mundo.png" alt="" class="img-mundo-telefono">
                    <img src="icono4.png" class="d-flex icono4" alt="">
                    <img src="icono5.png" class="d-flex icono5" alt="">
                    <img src="icono6.png" class="d-flex icono6" alt="">

                </div>
            </div>
        <!-- FIN 5TA SECCION -->
        <!-- 6TA SECCION -->
            <div class="row seccion-6">
                <div class="col-md-4">
                    <button class="boton-seccion-6">Startup</button>
                </div>
                <div class="col-md-4">
                    <button class="boton-seccion-7">Profesionales</button>

                </div>
                <div class="col-md-4">
                    <button class="boton-seccion-8">Inversores</button>
                </div>
                <img src="tresautronauta.png" class="banner-version-telefono" alt="">
                <h3 class="h3-title-6">¿Estás preparado para<br> el despegue?</h3>
                <button class="crearcuenta-6" > CREAR CUENTA</button>

            </div>
        <!-- FIN 6TA SECCION -->
        <!-- <footer class="seccion-7 footer-margin"> -->
            <div class="row footer-margin">
                <div class="col-md-3">
                    <h4 class="footer-family-titulo">Startup Company</h4>
                    <p class="p-item-6">Hello, we are ABC. trying to make an<br> effort to put the right people for you<br>  to get the best results. Just insight</p>
                    <input type="text" class="busqueda">
                        <div class="redes-sociales">
                            <img src="facebook.png" alt="" style="padding-right:30px;">
                            <img src="twitter.png" alt="" style="padding-right:30px;">
                            <img src="vimeo-social-logo.png" alt="" style="padding-right:30px;">
                            <img src="Combined Shape.png" alt="" style="padding-right:30px;">
                        </div>
                </div>
                <div class="col-md-3 margin-colum">
                    <h4 class="footer-family-titulo ">Product</h4>
                    <div>
                        <a href="" class="d-flex a-items-6">Autocapture</a>
                        <a href="" class="d-flex a-items-6">Data Governance</a>
                        <a href="" class="d-flex a-items-6">Virtual Events</a>
                        <a href="" class="d-flex a-items-6">Virtual Users</a>
                        <a href="" class="d-flex a-items-6">Autocapture</a>
                        <a href="" class="d-flex a-items-6">Autocapture</a>
                    </div>
                </div>
                <div class="col-md-3 margin-colum-1">
                    <h4 class="footer-family-titulo">Explore</h4>
                        <a href="" class="d-flex a-items-6">Resources</a>
                        <a href="" class="d-flex a-items-6">Blog</a>
                        <a href="" class="d-flex a-items-6">Documents</a>
                </div>
                <div class="col-md-3 margin-colum-1">
                    <h4 class="footer-family-titulo">About us</h4>
                    <a href="" class="d-flex a-items-6">Partners</a>
                    <a href="" class="d-flex a-items-6">Customers</a>
                    <a href="" class="d-flex a-items-6">Contact us</a>
                    <img src="logo_blanco.png" alt="" style="padding-top:20px;">
                </div>
            </div>
        <!-- </footer> -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
