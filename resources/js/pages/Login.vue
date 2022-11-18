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
                                <input type="text" class="form-control" name="email">
                            </div>

                            <label> Contraseña</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="button" id="sendlogin" class="btn btn-primary ">¡VAMOS!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </template>