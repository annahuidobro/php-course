/*Navigation*/
const Home = () => import('./Components/HomeComponent.vue')
const Login = () => import('./Components/Login.vue')
const Register = () => import('./Components/Register.vue')
/*Components*/
const Table = () => import('./Components/TableComponent.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
]