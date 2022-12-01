import './bootstrap';
import "bootstrap/dist/css/bootstrap.min.css";
import { createApp } from 'vue';
import AppComponent from './pages/App.vue'
import router from './router/index'
import store from './pages/store/store.js';

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import { aliases, mdi } from 'vuetify/iconsets/mdi'

const vuetify = createVuetify({
  components,
  directives,
  icons: {
    defaultSet: 'mdi',
    aliases,
    sets: {
      mdi,
    }
  }
})

const app = createApp({
    components:{
        AppComponent,
    }
})

app.use(store);
app.use(router);
app.use(vuetify);
app.mount('#app');
