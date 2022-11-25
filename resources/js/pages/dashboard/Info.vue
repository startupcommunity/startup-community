<template>
    
    <div style="border: 1px solid red">
        {{empresa.titulo}}
        <hr />
        {{empresa.fecha}}
        <hr />
        {{empresa.texto}}
        <hr />
        {{empresa.descripcion}}
        <h2>Detalles</h2>
        {{empresa.detalles}}
    </div>
    
</template>
<script>
    export default {
        mounted() {
            console.log('Empresa mounted.')
            
            objEmit.on("getEmpresa",(data) => {
                this.empresa = data;
            })
        },
        data() {
            return {
                empresa:{
                    titulo: '',
                    fecha: '',
                    texto: '',
                    descripcion: ''
                }
            }
        }
    }
</script>