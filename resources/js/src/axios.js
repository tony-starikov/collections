import axios from "axios";
import router from "./router/router.js";

const token = localStorage.getItem('my_token');

axios.defaults.withCredentials = true;
axios.defaults.baseURL = "http://localhost";
axios.defaults.headers.common = {
    'Authorization': 'Bearer ' + token,
    'Content-Type':'application/json',
    'Accept':'application/json'
};

axios.interceptors.response.use({}, error => {
    if (error.response.status === 401 || error.response.status === 419) {
        if (token) {
            localStorage.removeItem('my_token');
        }
        router.push({name: 'Login'});
    }
})
