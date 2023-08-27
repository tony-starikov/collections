import {createRouter, createWebHistory} from "vue-router";
import routes from "./routes.js";

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: 'active',
    routes
});

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('my_token');

    if (!token) {
        if (to.name === 'Login' || to.name === 'Register') {
            return next();
        } else {
            return next({
                name: 'Login'
            });
        }
    }

    if (to.name === 'Login' || to.name === 'Register' && token) {
        return next({
            name: 'Home'
        });
    }

    return next();
})

export default router;
