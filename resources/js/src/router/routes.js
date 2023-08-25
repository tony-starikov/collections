import Home from '../components/Home.vue';
import CreateCollection from '../components/CreateCollection.vue';
import ShowCollection from '../components/ShowCollection.vue';
import UpdateCollection from '../components/UpdateCollection.vue';
import CreateContributor from '../components/CreateContributor.vue';
import Contributors from '../components/Contributors.vue';

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
        path: '/show/:id',
        component: ShowCollection,
        name: "ShowCollection"
    },
    {
        path: '/update/:id',
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
]

export default routes;
