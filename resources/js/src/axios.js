import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.baseURL = "http://localhost";
axios.defaults.headers.common = {
    'Content-Type':'application/json',
    'Accept':'application/json'
};
