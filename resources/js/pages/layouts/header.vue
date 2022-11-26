<template>
<!-- Inicio Header -->
<header class="d-flex flex-wrap justify-content-center py-0 mb-4 border-bottom">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-12 p-0">
            <nav class="navbar navbar-expand-lg fondo">
                <div class="container-fluid">
                    <div class="col-md-1 logo">
                        <router-link :to="{ name: 'home' }"><img src="Frame.png" alt="Start Up"></router-link>
                    </div>
                    <div class="col-md-1 logo-telefono">
                        <router-link :to="{ name: 'home' }"><img src="logo-telefono.png" alt="Start Up"></router-link>
                    </div>
                    <button class="navbar-toggler order-first primary"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span class=" icono-menu"><img src="menu.png" alt=""></span>
                    </button>
                    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <ul class="navbar-nav menu-hamburguesa">
                            <li class="nav-item">
                                <router-link class="nav-link a-item" aria-current="page" :to="{ name: 'home' }">Home</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link a-item" aria-current="page" to="#">Startup</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link a-item" aria-current="page" to="#">Profesionales</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link a-item" aria-current="page" to="#">Inversor</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link a-item" aria-current="page" to="#">Comunidad</router-link>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link crear-cuenta-telefono boton-menu-hmburguesa" aria-current="page" href="#">CREAR CUENTA</a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="col-md-2 icono nav-item">
                        <router-link :to="{ name: 'login' }" class=" me-auto mb-2 mb-lg-0"><img src="user.png" class="user-version-telefono" alt="Iniciar sesion"/><span class="iniciarsesion">Iniciar sesión</span></router-link>
                        <p class=" me-auto mb-2 mb-lg-0 ml-2 user-telefono"><img src="user-telefono.png" alt="Iniciar sesion"/><span class="iniciarsesion"></span>   </p>
                    </div>
                    <div class="col-md-3 crear-ceunta-telefono">
                        <router-link  :to="{ name: 'register' }" class="crearcuenta"> CREAR CUENTA</router-link>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
    <!-- FIN Header -->
</template>