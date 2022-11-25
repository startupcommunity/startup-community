<template>
    <div v-for="empresa of empresas">
        <Empresa :datos="empresa"  @click="verDatos(empresa)"></Empresa>
    </div>
</template>
<script>
    export default {
        mounted() {
            this.obtenerEmpresas();
            console.log("this.empresas[0]::> ",this.empresas[0]);
            objEmit.emit("getEmpresa",this.empresas[0]);
        },
        data(){
            return {
                empresas:{}
            }
        },
        methods:{
            verDatos(objEmpresa){
                objEmit.emit("getEmpresa",objEmpresa);
            },  
            obtenerEmpresas() {
                this.empresas = [
                    {
                        imagen:"#",
                        titulo:"Empresa de golf",
                        texto: "esta es la otra empresa",
                        descripcion: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                        fecha: "Sep 2022",
                        detalles:" estos son los detalles xx"
                    },
                    {
                        imagen:"#",
                        titulo:"Empresa de ventas",
                        texto: "aqui venden palos de golf",
                        descripcion: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                        fecha: "Sep 2022",
                        detalles:" estos son los detalles xy"
                    },
                    {
                        imagen:"#",
                        titulo:"Empresa de helados",
                        texto: "aqui venden helados",
                        descripcion: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                        fecha: "Sep 2022",
                        detalles:" estos son los detalles yz"
                    }
                ]
            }
        }
    }
</script>