<script>
    import BaseLayout from '../layouts/template.vue'
    export default {
        components: {
            BaseLayout
        },
    }
</script>
<template>
    <BaseLayout>
        <v-container fluid>
            <!-- 1RA SECCION  -->
            <!-- seccion web -->
            <v-row class="mt-15 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                <v-img height="510" src="/img/astronauta_home.png">
                    <v-col cols="12" class="mx-auto">
                        <h2 class="text-center text-h2 title-nunito text-white">
                            <strong>Bienvenido a un Universo de <br> Alto Valor</strong>
                        </h2>
                        <p class="text-h5 text-center title-nunito text-white  my-10">
                            La comunidad que conecta  StartUps, Profesionales e Inversión
                        </p>
                    </v-col>
                </v-img>
            </v-row>
            <!-- seccion mobile -->
            <v-row class="mt-10 d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none">
                <v-col cols="12" class="mx-auto">
                    <h2 class="text-center text-h3 title-nunito text-white">
                        <strong>Bienvenido a un Universo de <br> Alto Valor</strong>
                    </h2>
                    <p class="text-h5 text-center title-nunito text-white mt-10 mt-md-7 mt-sm-5">
                        La comunidad que conecta  StartUps, Profesionales e Inversión
                    </p>
                </v-col>
                <v-col cols="12">
                    <v-img width="50%" max-height="400" src="/img/astronauta_home_mobile.png" class="align-center justify-center mx-auto mt-0"></v-img>
                </v-col>
            </v-row>
            <!-- FIN 1RA SECCION -->
            <!-- 2DA SECCION -->
            <!-- seccion web -->
            <v-row class="d-flex justify-space-around align-center my-5 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                <button class="boton-comun-initial text-center text-white px-4 py-2">Startup o proyectos</button>
                <button class="boton-comun-initial text-center text-white px-4 py-2">Profesionales</button>
                <button class="boton-comun-initial text-center text-white px-4 py-2">Inversores</button>
            </v-row>
            <!-- seccion mobile -->
            <v-row class="justify-space-around align-center my-5 d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none">
                <v-col cols="12">
                    <button class="d-grid gap-2 col-6 mx-auto boton-comun-initial-mobile text-center text-white px-4 py-2 btn-sm">Startup o proyectos</button>
                </v-col>
                <v-col cols="12">
                    <button class="d-grid gap-2 col-6 mx-auto boton-comun-initial-mobile text-center text-white px-4 py-2 btn-sm">Profesionales</button>
                </v-col>
                <v-col cols="12">
                    <button class="d-grid gap-2 col-6 mx-auto boton-comun-initial-mobile text-center text-white px-4 py-2 btn-sm">Inversores</button>
                </v-col>
            </v-row>
            <!-- FIN 2DA SECCION -->
            <!-- 3RA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <img src="/img/line_9.png" class="my-6 text-center mx-auto align-center d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex" alt="">
                <img src="/img/lineatelefono.png" class="my-6 text-center mx-auto align-center d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none" alt="">
                <v-col cols="12" >
                    <h3 class="title-nunito text-center text-white text-h3">
                        ¡Somos la Comunidad StartUp! <br>
                    </h3>
                    <p class=" text-h6 title-nunito text-center text-white">
                        Formada por <Strong>emprendedores, profesionales e inversores</Strong> que buscan <Strong>cambiar el mundo.</Strong>
                    </p>
                    <p class=" text-h6 title-nunito text-center text-white">
                        Nuestra misión consiste en aportar las <Strong>herramientas y recursos</Strong> para que puedas desarrollar<br> <Strong>proyectos únicos</Strong> que te permitan alcanzar <Strong>nuevos universos</Strong>.
                    </p><br>
                </v-col>
            </v-row>
            <!-- FIN 3RA SECCION -->
            <!-- 4TA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <img src="/img/line_9.png" class="my-6 text-center mx-auto align-center d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex" alt="">
                <img src="/img/lineatelefono.png" class="my-6 text-center mx-auto align-center d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none" alt="">
                <v-col cols="12" >
                    <h3 class="title-nunito text-center text-white text-h3">
                        ¡Prepárate para despegar!
                    </h3>
                    <p class="text-h6 title-nunito text-center text-white">
                        Conoce los beneficios dentro de StartUp Community
                    </p>
                </v-col>
            </v-row>
            <!-- FIN 4TA SECCION -->
            <!-- 5TA SECCION -->
            <v-row :style="{ 'background-image': 'url(/img/startup.png)' }" class="seccion-volcan">
                <v-col cols="12">
                    <img src="/img/icono1.png" class="d-flex icono1 py-3" alt="" >
                    <img src="/img/icono2.png" class="d-flex icono2 py-3" alt="" >
                    <img src="/img/icono3.png" class="d-flex icono3 py-3" alt="">
                    <img src="/img/icono4.png" class="d-flex icono4 py-3" alt="">
                    <img src="/img/icono5.png" class="d-flex icono5 py-3" alt="">
                    <img src="/img/icono6.png" class="d-flex icono6 py-3" alt="">
                </v-col>
            </v-row>
            <!-- FIN 5TA SECCION -->
            <!-- 6TA SECCION -->
            <!-- seccion web -->
            <v-row :style="{ 'background-image': 'url(/img/tresautronauta.png)' }" class="py-3 mt-8 seccion-final d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                <v-col cols="4">
                    <button class="boton-seccion-6">Startup</button>
                </v-col>
                <v-col cols="4">
                    <button class="boton-seccion-7">Profesionales</button>

                </v-col>
                <v-col cols="4">
                    <button class="boton-seccion-8">Inversores</button>
                </v-col>
                <v-col cols="12" >
                    <h3 class="title-nunito text-center text-white text-h4 my-5">¿Estás preparado para<br> el despegue?</h3>
                    <div class="d-flex justify-center my-2">
                        <v-btn :to="{ name: 'register' }" color="purple-accent-2" variant="flat" class="create"> 
                            CREAR CUENTA
                        </v-btn>
                    </div>
                </v-col>
            </v-row>
            <!-- seccion mobile -->
            <v-row class="py-3 mt-8 seccion-final d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none">
                <v-col cols="12">
                    <button class="boton-seccion-6 d-grid gap-2 col-6 mx-auto">Startup</button>
                </v-col>
                <v-col cols="12">
                    <button class="boton-seccion-7 d-grid gap-2 col-6 mx-auto">Profesionales</button>

                </v-col>
                <v-col cols="12">
                    <button class="boton-seccion-8 d-grid gap-2 col-6 mx-auto">Inversores</button>
                </v-col>
                <v-col cols="12" class="mx-0 px-0">
                    <v-img cover max-height="400" src="/img/tresautronauta.png" class="align-center justify-center mx-auto mt-0">
                        <h3 class="title-nunito text-center text-white text-h4 mt-16">¿Estás preparado para<br> el despegue?</h3>
                        <div class="d-flex justify-center my-2">
                            <v-btn :to="{ name: 'register' }" color="purple-accent-2" variant="flat" class="create"> 
                                CREAR CUENTA
                            </v-btn>
                        </div>
                    </v-img>
                </v-col>
            </v-row>
            <!-- FIN 6TA SECCION -->
        </v-container>
    </BaseLayout>
</template>
<style>
    .title-nunito{
        font-family: 'Nunito' !important;
    }
</style>