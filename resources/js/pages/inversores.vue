<template>
<div class="inversores">
        <div class="container">
           <div class="row justify-content-center align-items-center" style="height:100vh">
               <div class="col-xl-6 col-sm-12">				
                   <div class="card">					
                       <div class="card-body card-login">
                           <h1 class="datastartup">¿Eres Inversor?</h1>
                           <h1  class="titulo registro">Completa la siguiente informacion</h1>
                           <form action="" autocomplete="off">		                              
                               <label> Que tipo de Inversor eres </label>
                               <div class="formulario">
                               <div class="form-group">
                                   <input type="text" class="form-control" value="Eje. Iniciando,Habitual,Intermedio,Macro inverso" >
                               </div>
                               <label> Área de desempeño </label>
                               <div class="form-group">
                                   <input type="text" class="form-control" value="Eje. Tegnologia,Comunicacion,Educacion" >
                               </div>   
                               <label> Descripcion</label>
                               <div class="form-group">
                                   <input type="text" id="descripcion" class="form-control" value="Danos un stracto sobre ti"  >
                                   
                               </div>
                                <div class="startupsBoton col-xl-12" >           
                               <button type="button" id="atras" class="btn btn-primary">VOLVER ATRAS</button>                                                         
                               <button type="button" id="siguiente" class="btn btn-primary">SIGUIENTE</button>    
                            </div>   
                            </div>  
                           </form>                                                  
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>


</template>