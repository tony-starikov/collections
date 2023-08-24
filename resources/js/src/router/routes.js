import Home from '../components/Home.vue';
import CreateCollection from '../components/CreateCollection.vue';

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
]

export default routes;
