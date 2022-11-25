<template>
    <div class="row" style="border: 1px solid black">
        <div class="col">
            <img :src="datos.imagen" alt="">
        </div>
        <div class="col">
            <h2 style="color: black">{{datos.titulo}}</h2>
        </div>
        <div class="col">
            {{datos.texto}}
            <hr />
            {{datos.fecha}}
        </div>
    </div>
</template>
<script>
    export default {
        props:["datos"]
    }
</script>