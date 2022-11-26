import './bootstrap';
import "bootstrap/dist/css/bootstrap.min.css";
import { createApp } from 'vue';
import AppComponent from './pages/App.vue'
import router from './router/index'
import store from './pages/store/store.js';


const app = createApp({
    components:{
        AppComponent,
    }
})

app.use(store);
app.use(router);
app.mount('#app');
