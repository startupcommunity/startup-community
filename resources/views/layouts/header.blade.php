<!-- Inicio Header -->
<header class="d-flex flex-wrap justify-content-center py-0 mb-4 border-bottom">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg fondo">
                <div class="container-fluid">
                    <div class="col-md-1 logo">
                        <img src="Frame.png" alt="Start Up">
                    </div>
                    <div class="col-md-1 logo-telefono">
                        <img src="logo-telefono.png" alt="Start Up">
                    </div>
                    <button class="navbar-toggler order-first primary"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span class=" icono-menu"><img src="menu.png" alt=""></span>
                    </button>
                    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <ul class="navbar-nav menu-hamburguesa">
                            <li class="nav-item">
                                <a class="nav-link a-item" aria-current="page" href="/">Home</a>
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
                        <a href="{{ route('login') }}" class=" me-auto mb-2 mb-lg-0"><img src="user.png" class="user-version-telefono" alt="Iniciar sesion"/><span class="iniciarsesion">Iniciar sesión</span></a>
                        <p class=" me-auto mb-2 mb-lg-0 ml-2 user-telefono"><img src="user-telefono.png" alt="Iniciar sesion"/><span class="iniciarsesion"></span>   </p>
                    </div>
                    <div class="col-md-3 crear-ceunta-telefono">
                        <a  href="{{ route('register') }}" class="crearcuenta"> CREAR CUENTA</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
    <!-- FIN Header -->