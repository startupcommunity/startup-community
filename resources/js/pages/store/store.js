import { createApp } from 'vue'
import { createStore } from 'vuex'

import user from './modules/user'
import auth from './modules/auth'

// Create a new store instance.
const store = createStore({
    modules: {
        user: user,
        auth: auth,
    }
})

const app = createApp({ /* your root component */ })

// Install the store instance as a plugin
app.use(store)

export default store;