<script>
    export default {
        async mounted() {
            await this.$store.dispatch('userRequest');
            this.rol = this.$store.getters.getProfile.rol[0].name;
            console.log(this.$store.getters.getProfile.rol[0].name);
        },
        data() {
            return {
                profile: {
                    first: null,
                    second: null,
                    third: null
                },
                authorization: this.$store.state.auth.access_token,
                rol: null,
                message: false,
                info: false
            }
        }, 
        methods: {
            async saveData() {
                let actionUrl = '/api/auth/profile/data';

                const config = {
                                headers:{
                                        Authorization: this.authorization,
                                        }
                                };
                await axios.post(actionUrl, this.profile ,config)
                .then((resp) => {
                    this.$store.dispatch('userRequest');
                    this.$router.push('/dashboard');
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
<div class="inversores">
    <div class="container">
           <div class="row justify-content-center align-items-center" style="height:100vh">
               <div class="col-xl-5 col-sm-12">				
                   <div class="card-body card-login">
                    <!--Inversor-->
                    <template v-if="rol === 'investor'">
                        <h2>¿Eres Inversor?</h2>
                       <h3>Completa la siguiente información</h3>
                       <form @submit.prevent="saveData()">                                    
                           <label>Qué tipo de inversor eres</label>
                           <div class="form-group">
                               <input type="text" class="form-control" v-model="profile.first" placeholder="Eje. Iniciando, Habitual, intermedio, macro inverso.">
                           </div>
                           <label>Área de desempeño</label>
                           <div class="form-group">
                               <input type="text" class="form-control" v-model="profile.second" placeholder="Eje. Tecnología, comunicaión, educación" >
                           </div>   
                           <label> Descripción</label>
                           <div class="form-group">
                               <input type="text" class="form-control" v-model="profile.third" placeholder="Danos un extracto sobre ti">
                           </div>                                    
                           <div class="botoness">
                            <button type="button"  id="ATRÁS" class="btn btn-primary ">VOLVER ATRÁS</button>
                           <button type="submit"  id="SIGUIENTE" class="btn btn-primary">SIGUIENTE</button>   
                        </div>              
                       </form>
                    </template>
                    <!--Startup-->
                    <template v-if="rol === 'startup'">
                        <h2>Registrarme</h2>
                           <h3>Completa la siguiente información</h3>
                           <form @submit.prevent="saveData()">                                    
                               <label> Nombre de tu startup</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.first" placeholder="Eje. Astrónomo Startup">
                               </div>
                               <label>Categoría de tu startup</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.second" placeholder="Eje. Tecnología, comunicaión, educación" >
                               </div>   
                               <label> Descripción</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.third" placeholder="¡Queremos conocer tu Startup!">
                               </div>                                       
                               <div class="botoness">
                                <button type="button"  id="ATRÁS" class="btn btn-primary ">VOLVER ATRÁS</button>
                               <button type="submit"  id="SIGUIENTE" class="btn btn-primary ">SIGUIENTE</button>  
                            </div>                                                                   
                           </form>                
                    </template>
                    <!--Professional-->
                    <template v-if="rol === 'professional'">
                        <h2>¿Eres un profesional?</h2>
                           <h3>Completa la siguiente información</h3>
                           <form  @submit.prevent="saveData()">                                    
                               <label>Nombra tu especialidad</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.first" placeholder="Eje. Programación, educación, diseño">
                               </div>
                               <label>Área de desempeño</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.second" placeholder="Eje. Tecnología, comunicaión, educación" >
                               </div>   
                               <label> Descripción</label>
                               <div class="form-group">
                                   <input type="text" class="form-control" v-model="profile.third" placeholder="Danos un extracto sobre ti">
                               </div>                                      
                               <div class="botoness">
                               <button type="button"  id="ATRÁS" class="btn btn-primary ">VOLVER ATRÁS</button>
                               <button type="submit"  id="SIGUIENTE" class="btn btn-primary ">SIGUIENTE</button>  
                            </div>                                                                      
                           </form>        
                    </template>

                        


                   </div>
               </div>
           </div>
       </div>
    </div>
</template>