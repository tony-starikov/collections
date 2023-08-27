<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <form action="#" @submit.prevent="login">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input v-model="loginData.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input v-model="loginData.password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from "vue";
import axios from "axios";

export default defineComponent({
    name: "Login",
    data(){
        return {
            loginData: {
                email: '',
                password: '',
            },
        }
    },
    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/login', this.loginData).then(response => {
                    console.log(response.data.authorization.token);
                    localStorage.setItem('my_token', response.data.authorization.token);
                    this.$router.push({name: 'Home'});
                }).catch(error => console.log(error.response));
            });
        }
    }
});
</script>
