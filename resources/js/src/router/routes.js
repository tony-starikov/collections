import Home from '../components/Home.vue';
import CreateCollection from '../components/CreateCollection.vue';
import ShowCollection from '../components/ShowCollection.vue';

const routes = [
    {
        path: '/',
        component: Home,
        name: "Home"
    },
    {
        path: '/create',
        component: CreateCollection,
        name: "CreateCollection"
    },
    {
        path: '/show/:id',
        component: ShowCollection,
        name: "ShowCollection"
    },
]

export default routes;
