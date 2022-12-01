<template>
<!-- Inicio Header -->
    <v-layout>
        <v-flex>
            <v-navigation-drawer
              v-model="drawer"
              temporary
              class="nav-bar-draver"
            >
            <v-img
              src="/img/navbar-drawer.png"
              height="100%"
            >
              <v-list color="light" class="text-center mt-5">
                <v-list-item class="text-subrayado" variant="plain" title="Home" value="home" :to="{ name: 'home' }"></v-list-item>
                <v-list-item class="text-subrayado" variant="plain" title="Startup" value="startup" to="#"></v-list-item>
                <v-list-item class="text-subrayado" variant="plain" title="Profesionales" value="profesionales" to="#"></v-list-item>
                <v-list-item class="text-subrayado" variant="plain" title="Inversor" value="inversor" to="#"></v-list-item>
                <v-list-item class="text-subrayado" variant="plain" title="Comunidad" value="comunidad" to="#"></v-list-item>
              </v-list>
          </v-img>
            </v-navigation-drawer>
            <v-app-bar
                color="light"
                height="100"
                min-height="50"
                max-height="100"
                :elevation="0"
                class="px-6"
                app
              >
                <template  v-slot:prepend>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none">
                        <img src="/img/menu.png">
                    </v-app-bar-nav-icon>
                    <v-app-bar-title class="px-6 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex" >
                        <router-link :to="{ name: 'home' }">
                            <img src="/img/frame.png" alt="Start Up">
                        </router-link>
                    </v-app-bar-title>
                    <v-btn class="px-0 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" :to="{ name: 'home' }">Home</router-link>
                    </v-btn>
                    <v-btn class="px-0 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Startup</router-link>
                    </v-btn>
                    <v-btn class="px-0 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Profesionales</router-link>
                    </v-btn>
                    <v-btn class="px-0 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Inversor</router-link>
                    </v-btn>
                    <v-btn class="px-0 d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Comunidad</router-link>
                    </v-btn>
                </template>
                <v-app-bar-title class="px-6 d-xs-flex d-sm-flex d-md-none d-lg-none d-xl-none" >
                    <router-link :to="{ name: 'home' }">
                            <img src="/img/logo-telefono.png" alt="Start Up" style="max-height: 100px; max-width: 100px;">
                    </router-link>
                </v-app-bar-title>
                <template v-slot:append>
                    <v-row v-if="!isAuthenticated">
                        <v-col cols="4" xs="12" sm="4" md="4">
                            <v-btn class="nav-link text-light-blue-lighten-1" :to="{ name: 'login' }">
                                <img src="/img/user.png" alt="Iniciar sesion"/>
                                <span class="d-xs-none d-sm-none d-md-none d-lg-flex d-xl-flex">Iniciar sesión</span>
                            </v-btn>
                        </v-col>
                        <v-col cols="7"  xs="12" sm="8" md="8">
                            <v-btn :to="{ name: 'register' }" color="purple-accent-2 ml-2" variant="flat"> 
                                <span class="text-p">CREAR CUENTA</span>
                            </v-btn>
                        </v-col>
                    </v-row>
                    <v-row v-else>
                        <v-menu>
                          <template v-slot:activator="{ props }">
                            <v-btn class="nav-link text-light-blue-lighten-1" height="100%" v-bind="props">
                                <v-avatar color="light-blue-lighten-1" size="x-large">
                                  <v-img
                                    src="/img/user.png"
                                    :alt="user.name"
                                    cover
                                    max-height="20"
                                    max-width="20"
                                  ></v-img>
                                </v-avatar>
                                <span class="d-xs-none d-sm-none d-md-none d-lg-flex d-xl-flex ml-3">{{user.name}}</span>
                            </v-btn>
                          </template>
                          <v-list color="light-blue-darken-4" class="text-center mt-5">
                            <v-list-item variant="plain" class="text-light-blue-darken-4 text-subrayado"> 
                                Ir a mi panel 
                                <v-divider></v-divider>
                            </v-list-item>
                            <v-list-item variant="plain" class="text-light-blue-darken-4 text-subrayado" @click="logout()"> Cerrar sesión </v-list-item>
                          </v-list>
                        </v-menu>
                        <v-btn class="text-none" stacked size="sm">
                          <v-badge color="error">
                            <img src="/img/notification.png" max-height="10" max-width="10">
                          </v-badge>
                        </v-btn>
                    </v-row>
                </template>
            </v-app-bar>
            <v-main>
            </v-main>
        </v-flex>
    </v-layout>
<!-- FIN Header -->
</template>
<script>
    export default {
        async mounted() {
            await this.$store.dispatch('userRequest');
            this.user = this.$store.getters.getProfile.user;
            this.rol = this.$store.getters.getProfile.rol[0];
            this.isAuthenticated = this.$store.getters.isAuthenticated;
            
        },
        data() {
            return {
                user: null,
                rol: null,
                isAuthenticated: false,
                drawer:null,
            }
        },
        methods:{
            logout(){
                this.$store.dispatch('authLogout',)
                .then(() => {
                    this.$router.push('/home')
                })
                .catch(error => {
                    this.message = error.response.data.message
                });
            }
        }
    }
</script>
<style type="text/css">
    .nav-bar-draver{
        background: linear-gradient(90deg, #004E8F 15%, #2388B9 100%);
    }
    .text-subrayado:hover{
        text-decoration: underline #BD13B8;
        text-decoration-thickness: 2px;
    }
</style>