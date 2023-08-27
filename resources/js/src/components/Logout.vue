<template>
    <div class="container">
        <h2>Logout</h2>
    </div>
</template>

<script>
import {defineComponent} from "vue";
import axios from "axios";

export default defineComponent({
    name: "Logout",
    methods: {
        logout() {
            axios.post('/api/logout').then(response => {
                console.log(response.data);
                localStorage.removeItem('my_token');
                this.$router.push({name: 'Login'});
            }).catch(error => console.log(error.response));
        }
    },
    mounted() {
        this.logout();
    }
});
</script>
