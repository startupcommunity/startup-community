import Cookies from 'js-cookie'

const moduleUser = {

state: {
    status: '',
    profile: null
},

getters: {
    getProfile: state => state.profile,
    isProfileLoaded: state => !!state.name,
},

actions: {
    async  userRequest ({commit, dispatch}) {
        if(Cookies.get('access_token')){
        commit('userRequest')

        const config = {
            headers:{
            Authorization: Cookies.get('access_token') || '',
            }
        };
        await axios.get('/api/user', config)
            .then((resp) => {
                commit('userSuccess', resp.data);
            })
            .catch((err) => {
                commit('userError'); 
                // if resp is unauthorized, logout, to
                dispatch('authLogout')
            })
            }
    },
},

mutations: {
    userRequest: (state) => {
        state.status = 'loading';
    },
    userSuccess: (state, resp) => {
        state.status = 'success';
        state.profile = resp;
    },
    userError: (state) => {
        state.status = 'error';
    }
}
}
export default moduleUser