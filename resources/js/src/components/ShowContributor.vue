<template>
    <div class="container py-3">
        <div class="row mt-3">
            <div class="col-12 col-md-8 col-xl-6 mx-auto">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">#{{ contributor.id }}: {{ contributor.user_name }}</h5>
                        <h4>
                            {{ contributor.amount }} UAH
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ShowContributor",
    data(){
        return {
            contributor: {
                id: '',
                user_name: '',
                amount: '',
            },
        }
    },
    methods: {
        getContributor() {
            axios.get('/api/contributors/' + this.$route.params.id).then(response => {
                this.contributor = response.data.data;
            }).catch(errors => {
                console.log(errors);
            });
        },
    },
    mounted() {
        this.getContributor();
    }
};
</script>
