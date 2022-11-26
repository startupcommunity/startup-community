<script>
export default {
    data() {
        return {
            user: {
                action:'register',
                email: "",
                password: "",
                password_confirmation:"",
                name:""
            },
            info: null,
            message: false
        }
    },  
    methods:{
        async signup() {
            const { action, name, email, password, password_confirmation } = this.user;
            this.$store.dispatch('authRequest', { action, name, email, password, password_confirmation })
                .then(() => {
                    this.$router.push('/roles')
                })
                .catch(error => {
                    this.message = error.response.data.message
                });
        }
    }
}
</script>
<template> 
<div class="registro">
    <div class="container">
           <div class="row justify-content-center align-items-center" style="height:100vh">
               <div class="col-xl-4 col-sm-12">             
                       <div class="card-body card-login">
                           <h2>Registrarme</h2>
                           <form action="" autocomplete="off">                                    
                               <label> Nombre y Apellido </label>
                               <div class="form-group">
                                   <input type="text" class="form-control"  v-model="user.name">
                               </div>
                               <label> Email </label>
                               <div class="form-group">
                                   <input type="text" class="form-control"  v-model="user.email" >
                               </div>   
                               <label> Contraseña</label>
                               <div class="form-group">
                                   <input type="password" class="form-control"  v-model="user.password">
                               </div>
                               <label> Confirmar Contraseña</label>
                               <div class="form-group">
                                   <input type="password" class="form-control"  v-model="user.password_confirmation" >
                               </div>                              
                               <h2>Emprende,colabora,invierte y DESCARGA</h2>                            
                               <button type="button" @click="signup()" id="sendlogin" class="btn btn-primary ">¡VAMOS!</button>                            
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
