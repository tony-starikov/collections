<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <form action="#" @submit.prevent="register">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input v-model="registerData.name" type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input v-model="registerData.email" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input v-model="registerData.password" type="password" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
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
    name: "Register",
    data() {
        return {
            registerData: {
                name: '',
                email: '',
                password: '',
            },
        }
    },
    methods: {
        register() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/register', this.registerData).then(response => {
                    console.log(response.data.authorization.token);
                    localStorage.setItem('my_token', response.data.authorization.token);
                    this.$router.push({name: 'Home'});
                }).catch(error => console.log(error.response));
            });
        }
    }
});
</script>
