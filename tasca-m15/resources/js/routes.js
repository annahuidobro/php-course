/*Navigation*/
const Home = () => import('./Components/HomeComponent.vue')
const Login = () => import('./Components/Login.vue')
const Play = () => import('./Components/PlayComponent.vue')
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
        name: 'play',
        path: '/play/:id',
        component: Play
    },
]