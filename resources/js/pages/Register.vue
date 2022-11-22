<template> 



    <div class="container">
           <div class="row justify-content-center align-items-center" style="height:100vh">
               <div class="col-xl-4 col-sm-12">				
                   <div class="card">					
                       <div class="card-body card-login">
                           <h1 class="titulo">Registrarme</h1>
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
                               <h1  class="titulo registro">Emprende,colabora,invierte y DESCARGA</h1>
                               <button type="button" @click="signup()" id="sendlogin" class="btn btn-primary ">¡VAMOS!</button>
                             
                           </form>
                           
                          
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </template>
    <script>
	export default {
		data() {
			return {
				user: {
					email: "",
					password: "",
                    password_confirmation:"",
                    name:""

				}
			}
		},	
		methods:{
			async signup() {
				const datos = await axios.post(`${URLAPI}/auth/signup`,this.user);
				
			}
		}
	}
</script>