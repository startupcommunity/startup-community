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
                isAuthenticated: false
            }
        },
    }
</script>
<template>
<!-- Inicio Header -->
    <v-layout>
        <v-flex>
            <v-app-bar
                color="light"
                height="100"
                :elevation="0"
                class="px-6"
              >
                <template  v-slot:prepend >
                    <v-btn icon="mdi-dots-vertical"  color="dark"></v-btn>
                    <v-app-bar-title class="px-6">
                        <router-link :to="{ name: 'home' }"><img src="/img/frame.png" alt="Start Up"></router-link>
                    </v-app-bar-title>
                    <v-btn class="px-0">
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" :to="{ name: 'home' }">Home</router-link>
                    </v-btn>
                    <v-btn>
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Startup</router-link>
                    </v-btn>
                    <v-btn>
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Profesionales</router-link>
                    </v-btn>
                    <v-btn>
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Inversor</router-link>
                    </v-btn>
                    <v-btn>
                        <router-link class="nav-link text-light-blue-lighten-1 text-sm" to="#">Comunidad</router-link>
                    </v-btn>
                </template>
                <template v-slot:append>
                    <v-row v-if="!isAuthenticated">
                        <v-col cols="6">
                            <v-btn class="nav-link text-light-blue-lighten-1" :to="{ name: 'login' }">
                                <img src="/img/user.png" alt="Iniciar sesion"/>
                                Iniciar sesión
                            </v-btn>
                        </v-col>
                        <v-col cols="6">
                            <v-btn :to="{ name: 'register' }" color="purple-accent-2" variant="flat" class="create"> 
                                CREAR CUENTA
                            </v-btn>
                        </v-col>
                    </v-row>
                </template>
            </v-app-bar>
            <v-main></v-main>
        </v-flex>
    </v-layout>
<!-- FIN Header -->
</template>