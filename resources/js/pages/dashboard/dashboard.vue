<template>
    <BaseLayout>
        <v-container fluid>
            <!-- 1RA SECCION  -->
            <!-- seccion web -->
            <v-row class="mt-15 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                <v-img height="500" src="/img/dashboard_1.png">
                    <v-col cols="12" class="mx-auto">
                        <h2 class="text-center text-h2 title-nunito text-white">
                            <strong>
                                Bienvenido {{ name }} <br> a la comunidad
                                <span v-if="rol == 'startup'">StartUp</span>
                                <span v-if="rol == 'professional'">Professional</span>
                                <span v-if="rol == 'investor'">Investor</span>
                            </strong>
                        </h2>
                        <p class="text-h5 text-center title-nunito text-white  my-10">
                          ¿Listo para despegar?
                        </p>  
                    </v-col>
                </v-img>
            </v-row>
            <!-- seccion mobile -->
            <v-row class="mt-10 d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none">
                <v-col cols="12" class="mx-auto">
                    <h3 class="title-nunito text-center text-white text-h3">
                        ¡Somos la Comunidad StartUp! <br>
                    </h3>
                    <p class=" text-h6 title-nunito text-center text-white">
                        Formada por <Strong>emprendedores, profesionales e inversores</Strong> que buscan <Strong>cambiar el mundo.</Strong>
                    </p>
                </v-col>
                <v-col cols="12">
                    <v-img  max-height="400" src="/img/dashboard_1.png" class="align-center justify-center mx-auto mt-0"></v-img>
                </v-col>
            </v-row>
            <!-- FIN 1RA SECCION -->
            <!-- 2DA SECCION -->
            <!-- seccion web -->
            <v-row class="d-flex bg-light-blue-darken-4">
                <v-col cols="12" class="bg-light-blue-darken-4">
                    <h2 class="text-center text-h3 title-nunito text-white">
                        Conoce los últimos StartUps
                    </h2>
                    <p class="text-h5 text-center title-nunito text-white mt-10 mt-md-7 mt-sm-5">
                        Todos los días despega un StartUp nuevo en nuestra comunidad
                    </p>
                    <v-window
                        v-model="side1"
                        show-arrows
                      >
                        <template v-slot:prev="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-left.png">
                          </v-btn>
                        </template>
                        <template v-slot:next="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-rigth.png">
                          </v-btn>
                        </template>
                        <v-window-item
                          v-for="n in length"
                          :key="n"
                        >
                            <v-row>
                                <v-card
                                    color="light-blue-darken-4"
                                    >
                                    <v-col cols="4" class="mx-auto">
                                        <v-card
                                            width="120"
                                           class="d-flex justify-center align-center rounded-circle mx-auto" 
                                           color="light-blue-darken-4">
                                           <v-card-title class="bg-light-blue-lighten-1 rounded-circle">
                                              <v-img
                                                src="/img/user.png"
                                                cover
                                                height="100"
                                                width="100"
                                                class="rounded-circle"
                                              ></v-img>
                                            </v-card-title>
                                        </v-card>
                                        <h3 class="title-nunito text-center text-white text-h4">
                                            Redes sociales para Golfistas <br>
                                        </h3>
                                        <p class=" text-p title-nunito text-center text-white">
                                            t dt duis enim velit mollit. uis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                        </p>
                                    </v-col>
                                </v-card>
                            </v-row>
                        </v-window-item>
                    </v-window>
                </v-col>
            </v-row>
            <!-- FIN 2DA SECCION -->
            <!-- 3RA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <img src="/img/line_9.png" class="my-6 text-center mx-auto align-center d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex" alt="">
                <img src="/img/lineatelefono.png" class="my-6 text-center mx-auto align-center d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none" alt="">
                <v-col cols="12">
                    <h2 class="text-center text-h3 title-nunito text-white">
                        Nuevos profesionales en la plataforma
                    </h2>

                    <v-window
                        v-model="side2"
                        show-arrows
                      >
                        <template v-slot:prev="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-left.png">
                          </v-btn>
                        </template>
                        <template v-slot:next="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-rigth.png">
                          </v-btn>
                        </template>
                        <v-window-item
                          v-for="n in length"
                          :key="n"
                        >
                            <v-row>
                                <v-card
                                    color="transparent"
                                    class="mx-auto"
                                    >
                                    <v-col cols="12" >
                                        <v-card
                                            width="120"
                                           class="d-flex justify-center align-center rounded-circle mx-auto" 
                                           color="light-blue-darken-4">
                                           <v-card-title class="bg-light-blue-lighten-1 rounded-circle">
                                              <v-img
                                                src="/img/user.png"
                                                cover
                                                height="100"
                                                width="100"
                                                class="rounded-circle"
                                              ></v-img>
                                            </v-card-title>
                                        </v-card>
                                        <h3 class="title-nunito text-center text-white text-h5">
                                            Name
                                        </h3>
                                        <p class="text-h4 text-center title-nunito text-white">
                                            CEO
                                        </p>
                                    </v-col>
                                </v-card>
                            </v-row>
                        </v-window-item>
                    </v-window>
                </v-col>
            </v-row>
            <!-- FIN 3RA SECCION -->
            <v-row class="d-flex justify-space-around align-center flex-column flex-sm-row my-5">
                <img src="/img/line_9.png" class="my-6 text-center mx-auto align-center d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex" alt="">
                <img src="/img/lineatelefono.png" class="my-6 text-center mx-auto align-center d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none" alt="">
                <v-col cols="12" >
                    <h3 class="title-nunito text-center text-white text-h3">
                        Conoce a los nuevos inversores
                    </h3>
                </v-col>
            </v-row>
            <!-- 4RA SECCION -->
            <!-- seccion web -->
            <v-row :style="{ 'background-image': 'url(/img/dashboard_buton.png)' }" class="py-3 mt-8 seccion-final d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                <v-col cols="12">
                    <v-window
                        v-model="side1"
                        show-arrows
                      >
                        <template v-slot:prev="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-left.png">
                          </v-btn>
                        </template>
                        <template v-slot:next="{ props }">
                          <v-btn
                            variant="plain"
                            @click="props.onClick"
                          >
                            <img src="/img/arrow-rigth.png">
                          </v-btn>
                        </template>
                        <v-window-item
                          v-for="n in length"
                          :key="n"
                        >
                            <v-col cols="4" class="mx-auto">
                                <v-card
                                  color="light-blue-lighten-4"
                                  max-width="250"
                                  >
                                    <v-card
                                       class="d-flex justify-center align-center rounded-circle mx-auto mt-3" 
                                       color="transparent" elevation="0">
                                       <v-card-title class="bg-light-blue-lighten-1 rounded-circle border  border-opacity-100 border-primary" >
                                          <v-img
                                            src="/img/user.png"
                                            cover
                                            height="100"
                                            width="100"
                                            class="rounded-circle mt-3"
                                          ></v-img>
                                        </v-card-title>
                                    </v-card>
                                    <h3 class="title-nunito text-center text-light-blue-lighten-1 text-h4">
                                        Name
                                    </h3>
                                    <p class=" text-p title-nunito text-center text-dark mx-2">
                                        t dt duis enim velit mollit. uis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                    </p>
                                </v-card>
                            </v-col>
                        </v-window-item>
                    </v-window>
                </v-col>
            </v-row>
            <!-- FIN 4TA SECCION -->
        </v-container>>
    </BaseLayout>
</template>
<script>
    import BaseLayout from '../layouts/template.vue'

    export default {
        async mounted() {
            await this.$store.dispatch('userRequest');
            this.user = this.$store.getters.getProfile.user;
            this.name = this.$store.getters.getProfile.user.name;
            this.rol= this.$store.getters.getProfile.rol[0].name
        },
        components: {
            BaseLayout
        },
        data() {
            return {
                user: null,
                name: null,
                rol:null,
                length: 3,
                side1: 0,
                side2: 0,
            }
        },
    }
</script>
<style>
    .title-nunito{
        font-family: 'Nunito' !important;
    }
</style>
