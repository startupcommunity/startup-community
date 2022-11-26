<script>
    export default {
        data() {
            return {
                user: {
                    rol: "",
                },
                authorization: this.$store.state.auth.access_token,
                message: false,
                info: false
            }
        }, 
        methods: {
            async saveRoll(roll) {
                let actionUrl = '/api/auth/asign/roll';

                const config = {
                                headers:{
                                        Authorization: this.authorization,
                                        }
                                };
                    this.user.rol = roll;
               await axios.post(actionUrl, this.user ,config)
                .then((resp) => {
                    this.$store.dispatch('userRequest');
                    this.$router.push('/data/important');
                    this.info = "Asignada con exito";
                })
                .catch((err) => {
                    this.message = err.response.data.message;
                })
            }
        }
    }
</script>
<template>
<div class=" col-xl-12 col-sm-12">
 <div class="roles">
       <div class="container">
           <div class="row justify-content-center " style="height:100vh">
               <div class=" col-xl-12 col-sm-12">				          
                           <h2> Completa tu registro <br>Que tipo de tripulante eres? </h2>                                                                                                                
                       </div>     
                       <div class="alinearabajo">
                                  <button type="button" id="roles" @click="saveRoll('startup')">STARTUP</button> 
                                  <button type="button" id="roles" @click="saveRoll('professional')">PROFESIONALES</button> 
                                  <button type="button" id="roles" @click="saveRoll('investor')">INVERSORES</button>       
                        </div>  
                        <section v-if="message">
                            <p class="text-white text-center">{{message}}, intente de nuevo</p>
                        </section>
                        <section v-if="info">
                            <p class="text-white text-center">{{info}}</p>
                        </section>
                     </div>                
                 </div>    
            </div>   
       </div>  
</template>