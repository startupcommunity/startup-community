 <template> 
 	<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-xl-4 col-sm-12">				
                <div class="card">					
                    <div class="card-body card-login">
						<h1 class="titulo">Bienvenidos a <br>startups</h1>						
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
					password: ""
				}
			}
		},	
		methods:{
			async login() {
				const datos = await axios.post(`${URLAPI}/auth/login`,this.user);
				localStorage.setItem("access_token",datos.data.access_token);
			}
		}
	}
</script>