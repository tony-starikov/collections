<template>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <router-link class="btn btn-primary" :to="{name: 'CreateCollection'}">Create new collection</router-link>
                <router-link class="ms-1 btn btn-primary" :to="{name: 'CreateContributor'}">Create new contribution</router-link>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-6 col-xl-4 mt-3" v-for="(contributor, index) in contributors" :key="index">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ contributor.user_name }}</h5>
                        <h4>
                            {{ contributor.amount }} UAH
                        </h4>
                    </div>
                    <div class="card-footer">
                        <router-link class="btn btn-primary" :to="{ name: 'ShowContributor', params: { id: contributor.id }}">
                            Info
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Contributors",
    data(){
        return {
            contributors: [],
        }
    },
    methods: {
        getContributors() {
            axios.get('/api/contributors').then(response => {
                // console.log(response);
                this.contributors = response.data.data;
            }).catch(errors => {
                console.log(errors);
            });
        },
    },
    mounted() {
        this.getContributors();
    }
};
</script>
