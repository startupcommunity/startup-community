<script>
    export default {
        data() {
            return {
                user: {
                    email: "",
                    password: "",
                    remember:false,
                },
                info: null,
                message: false
            }
        },  
        methods:{
             login () {
                const { email, password, remember } = this.user;
                this.$store.dispatch('authRequest', { email, password, remember })
                .then(() => {
                    this.$router.push('/dashboard')
                })
                .catch(error => {
                    this.message = error.response.data.message
                });
            }
        }
    }
</script>
<template> 
 <div class="login">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-xl-4 col-sm-12">                
                <div class="col-12">
                    <router-link  class="text-white" :to="{ name: 'home' }">Ir atrás</router-link>
                </div>                
                    <div class="card-body card-login">
                        
                        <h2 class=" align-items-center ">Bienvenidos a startups</h2>                        
                        <form action="" autocomplete="off">     
                            
                            <label> Email</label>
                            <div class="form-group">
                                <input v-model="user.email" type="text" class="form-control" name="email">
                            </div>
                            <label> Contraseña</label>
                            <div class="form-group">
                                <input v-model="user.password" type="password" class="form-control" name="password">
                            </div>
                            <button type="button" @click="login()" id="sendlogin" class="btn btn-primary ">¡VAMOS!</button>
                        </form>
                        <section v-if="message">
                            <p class="text-white text-center">{{message}}, intente de nuevo</p>
                        </section>
                    </div>
            </div>
        </div>
    </div>
</div>
 </template>
