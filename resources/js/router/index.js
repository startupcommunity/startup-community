import { createRouter, createWebHistory } from 'vue-router';
import store from '../pages/store/store.js'

const Maintain = () => import('../pages/landing/maintain.vue');
const Home = () => import('../pages/landing/home.vue');
const Dashboard = () => import('../pages/dashboard/dashboard.vue');

/*auth & profiles*/
const Login = () => import('../pages/auth/login.vue');
const Registro = () => import('../pages/auth/register.vue');
const Roles = () => import('../pages/auth/roles.vue');
const dataProfiles = () => import('../pages/profile/dataProfiles.vue');

/* dashboard */
const Empresas = () => import('../pages/dashboard/Empresas.vue');
const Empresa = () => import('../pages/dashboard/Empresa.vue');
const Info = () => import('../pages/dashboard/Info.vue');
const Filtrado = () => import('../pages/dashboard/Filtrado.vue');


/*middlewares*/



/*primeros pasos de registro*/
async function firstSteps(to, from, next){
	
	const dataProfile = async () => store.dispatch('userRequest');
	const asyncValue = await dataProfile();

    if (!store.getters.isAuthenticated) {
        next('/login');
        return
    } console.log(store.getters.getProfile)
    if (store.getters.getProfile.rol.length === 0) {
    	next('/roles');
       	return
    }
    if (!store.getters.getProfile.user.profile.data) {
    	next('/data/important');
       	return	
    }
    next();
}

/*Si necesita autenticación autenticado*/
async function  needAuthenticated(to, from, next){
    if (store.getters.isAuthenticated) {
        next();
        return
    }
    next('/login')
}

/*Si esta autenticado*/
async function  authDashboard(to, from, next){
    if (store.getters.isAuthenticated) {
        next('/dashboard');
        return
    }
    next()
}

export const routes = [
		{
			name:'maintain',
			path:'/',
			component:Maintain
		},
		{
			name:'home',
			path:'/home',
			component:Home
		},
		{
			name:'login',
			path:'/login',
			component:Login,
			beforeEnter: authDashboard,
			
		},
		{
			name:'register',
			path:'/register',
			component:Registro,
			beforeEnter: authDashboard,
		},
		{
			name:'roles',
			path:'/roles',
			component:Roles,
			beforeEnter: needAuthenticated,
			
		},
		{
			name:'dataProfile',
			path:'/data/important',
			component:dataProfiles,
			beforeEnter: needAuthenticated,
		},
		{
			name:'dashboard',
			path:'/dashboard',
			component:Dashboard,
			beforeEnter: firstSteps,
		},

	];

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes
});

export default router;