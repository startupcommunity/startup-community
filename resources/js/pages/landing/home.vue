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
            <v-row class="mt-15 seccion-welcome" :style="{ 'background-image': 'url(/astronauta_home.png)' }">
                <v-col cols="12" class="mx-auto">
                    <h2 class="text-center text-h3 title-welcome">
                        <strong>Bienvenido a un Universo de <br> Alto Valor</strong>
                    </h2>

                    <h3 class="text-center mx-auto text-h6 my-10">
                        La comunidad que conecta  StartUps, Profesionales e Inversión
                    </h3>
                </v-col>
            </v-row>
            <!-- FIN 1RA SECCION -->
            <!-- 2DA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <button class="boton-comun-initial text-center text-white px-4 py-2">Startup o proyectos</button>
                <button class="boton-comun-initial text-center text-white px-4 py-2">Profesionales</button>
                <button class="boton-comun-initial text-center text-white px-4 py-2">Inversores</button>
            </v-row>
            <!-- FIN 2DA SECCION -->
            <!-- 3RA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <img src="Line 9.png" class="my-6 text-center mx-auto align-center" alt="">
                <v-col cols="12" >
                    <h3 class="texto-linea text-center ">
                        ¡Somos la Comunidad StartUp! <br>
                    </h3>
                    <p class=" text-p texto-p text-center text-white">
                        Formada por <Strong>emprendedores, profesionales e inversores</Strong> que buscan <Strong>cambiar el mundo.</Strong>

                    </p>
                    <p class=" text-p texto-p text-center text-white">
                        Nuestra misión consiste en aportar las <Strong>herramientas y recursos</Strong> para que puedas desarrollar<br> <Strong>proyectos únicos</Strong> que te permitan alcanzar <Strong>nuevos universos</Strong>.

                    </p><br>
                </v-col>
            </v-row>
            <!-- FIN 3RA SECCION -->
            <!-- 4TA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row mt-5">
                <img src="Line 9.png" class="mt-6 text-center mx-auto align-center" alt="">
                <v-col cols="12" >
                    <h3 class="texto-linea text-center">
                        ¡Prepárate para despegar!
                    </h3>
                    <p class="texto-p-5">
                        Conoce los beneficios dentro de StartUp Community
                    </p>
                </v-col>
            </v-row>
            <!-- FIN 4TA SECCION -->
            <!-- 5TA SECCION -->
            <v-row :style="{ 'background-image': 'url(/startup.png)' }" class="seccion-volcan">
                <v-col cols="12">
                    <img src="icono1.png" class="d-flex icono1 py-3" alt="" >
                    <img src="icono2.png" class="d-flex icono2 py-3" alt="" >
                    <img src="icono3.png" class="d-flex icono3 py-3" alt="">
                    <img src="icono4.png" class="d-flex icono4 py-3" alt="">
                    <img src="icono5.png" class="d-flex icono5 py-3" alt="">
                    <img src="icono6.png" class="d-flex icono6 py-3" alt="">
                </v-col>
            </v-row>
            <!-- FIN 5TA SECCION -->
            <!-- 6TA SECCION -->
            <v-row :style="{ 'background-image': 'url(/tresautronauta.png)' }" class="py-3 mt-8">
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
                    <h3 class="h3-title-6 mb-2">¿Estás preparado para<br> el despegue?</h3>
                    <div class="d-flex justify-center mt-2">
                        <v-btn :to="{ name: 'register' }" color="purple-accent-2" variant="flat" class="mx-3 create"> 
                            CREAR CUENTA
                        </v-btn>
                    </div>
                </v-col>
            </v-row>
            <!-- FIN 6TA SECCION -->
        </v-container>
    </BaseLayout>
</template>

