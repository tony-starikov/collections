import Home from '../components/Home.vue';
import CreateCollection from '../components/CreateCollection.vue';
import ShowCollection from '../components/ShowCollection.vue';
import UpdateCollection from '../components/UpdateCollection.vue';

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
    {
        path: '/update/:id',
        component: UpdateCollection,
        name: "UpdateCollection"
    },
]

export default routes;
