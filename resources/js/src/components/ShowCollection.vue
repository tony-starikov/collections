<template>
    <div class="container py-3">
        <div class="row mt-3">
            <div class="col-12 col-md-8 col-xl-6 mx-auto">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">#{{ collection.id }}: {{ collection.title }}</h5>
                        <p class="card-text">
                            {{ collection.description }}
                        </p>
                        <h4>
                            {{ collection.target_amount }} UAH
                        </h4>
                        <a target="_blank" v-bind="{ href: collection.link }">Link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-6 col-xl-4 mt-3" v-for="(contributor, index) in contributors" :key="index">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ contributor.user_name }}</h5>
                        <h4>
                            {{ contributor.amount }} UAH
                        </h4>
                    </div>
                    <div class="card-footer">
                        <router-link class="ms-1 btn btn-primary" :to="{ name: 'UpdateCollection', params: { id: collection.id }}">
                            Update
                        </router-link>
                        <button class="ms-1 btn btn-primary" @click="handleDelete(collection.id)">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ShowCollection",
    data(){
        return {
            collection: {
                id: '',
                title: '',
                description: '',
                total_amount: '',
                link: '',
            },
            contributors: [],
        }
    },
    methods: {
        getCollection() {
            axios.get(`/api/collections/${this.$route.params.id}`).then(response => {
                this.collection = response.data.data;
                this.contributors = response.data.data.contributors;
                console.log(response.data.data);
            }).catch(errors => {
                console.log(errors);
            });
        },
    },
    mounted() {
        this.getCollection();
    }
};
</script>
