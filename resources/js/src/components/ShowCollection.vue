<template>
    <div class="container">
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
            }
        }
    },
    methods: {
        getCollection() {
            axios.get(`/api/collections/${this.$route.params.id}`).then(response => {
                this.collection = response.data;
            }).catch(errors => {
                console.log(errors);
            });
        },
    },
    created() {
        this.getCollection();
    }
};
</script>
