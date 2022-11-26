<script>
    import BaseLayout from '../layouts/template.vue'

    export default {
        async mounted() {
            await this.$store.dispatch('userRequest');
            this.user = this.$store.getters.getProfile.user;
            this.name = this.$store.getters.getProfile.user.name;
        },
        components: {
            BaseLayout
        },
        data() {
            return {
                user: null,
                name: null
            }
        },
    }
</script>
<template>
    <BaseLayout>
        
        <!-- 1RA SECCION  -->
        <div class="row seccion-3">
            <div class="col-md-2">
                <h1 class="title-espacio">
                    Bienvenido {{ name }}
                </h1>
                <h3 class="title-espacio h3-title">
                    a la comunidad Startup
                </h3>
                <div style="display:flex;">
                    <div><input class="espacio-input" type="text" placeholder=""/> </div>
                    <div><button class="suscribirme"> Buscar</button></div>
                </div>
            </div>
        </div>
        <!-- FIN 1RA SECCION -->

    </BaseLayout>
</template>
