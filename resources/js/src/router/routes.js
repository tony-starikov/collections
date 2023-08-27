import Home from '../components/Home.vue';
import CreateCollection from '../components/CreateCollection.vue';
import ShowCollection from '../components/ShowCollection.vue';
import UpdateCollection from '../components/UpdateCollection.vue';
import CreateContributor from '../components/CreateContributor.vue';
import Contributors from '../components/Contributors.vue';
import ShowContributor from '../components/ShowContributor.vue';
import UpdateContributor from '../components/UpdateContributor.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import Logout from '../components/Logout.vue';

const routes = [
    {
        path: '/',
        component: Home,
        name: "Home"
    },
    {
        path: '/create-collection',
        component: CreateCollection,
        name: "CreateCollection"
    },
    {
        path: '/show-collection/:id',
        component: ShowCollection,
        name: "ShowCollection"
    },
    {
        path: '/update-collection/:id',
        component: UpdateCollection,
        name: "UpdateCollection"
    },
    {
        path: '/create-contributor',
        component: CreateContributor,
        name: "CreateContributor"
    },
    {
        path: '/contributors',
        component: Contributors,
        name: "Contributors"
    },
    {
        path: '/show-contributor/:id',
        component: ShowContributor,
        name: "ShowContributor"
    },
    {
        path: '/update-contributor/:id',
        component: UpdateContributor,
        name: "UpdateContributor"
    },
    {
        path: '/login',
        component: Login,
        name: "Login"
    },
    {
        path: '/register',
        component: Register,
        name: "Register"
    },
    {
        path: '/logout',
        component: Logout,
        name: "Logout"
    },
]

export default routes;
