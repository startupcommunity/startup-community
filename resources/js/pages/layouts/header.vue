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
      <v-app-bar
        color="White"
        height="100"
        :elevation="0"
        class="px-6"
      >
        <template  v-slot:prepend >
            <v-app-bar-title class="px-6">
                <router-link :to="{ name: 'home' }"><img src="Frame.png" alt="Start Up"></router-link>
            </v-app-bar-title>
            <v-btn class="px-0">
                <router-link class="nav-link text-light-blue-lighten-1 font-Nunito text-sm" :to="{ name: 'home' }">Home</router-link>
            </v-btn>
            <v-btn>
                <router-link class="nav-link text-light-blue-lighten-1 font-Nunito text-sm" to="#">Startup</router-link>
            </v-btn>
            <v-btn>
                <router-link class="nav-link text-light-blue-lighten-1 font-Nunito text-sm" to="#">Profesionales</router-link>
            </v-btn>
            <v-btn>
                <router-link class="nav-link text-light-blue-lighten-1 font-Nunito text-sm" to="#">Inversor</router-link>
            </v-btn>
            <v-btn>
                <router-link class="nav-link text-light-blue-lighten-1 font-Nunito text-sm" to="#">Comunidad</router-link>
            </v-btn>
        </template>
        <template v-slot:append>
            <div v-if="!isAuthenticated">
                <v-btn class="mx-3">
                    <router-link class="nav-link text-light-blue-lighten-1 font-Nunito" :to="{ name: 'login' }">
                        <img src="user.png" alt="Iniciar sesion"/>
                        Iniciar sesión
                    </router-link>
                </v-btn>
                <v-btn :to="{ name: 'register' }" color="purple-accent-2" variant="flat" class="mx-3 create"> 
                    CREAR CUENTA
                </v-btn>
            </div>
        </template>
      </v-app-bar>

      <v-main></v-main>
    </v-layout>
<!-- FIN Header -->
</template>