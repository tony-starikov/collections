<template>
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <router-link class="btn btn-primary" :to="{name: 'CreateCollection'}">Create new collection</router-link>
                <router-link class="ms-1 btn btn-primary" :to="{name: 'CreateContributor'}">Create new contribution</router-link>
            </div>
            <div class="col-lg-6 mt-3">
                <form class="d-flex" action="#" @submit.prevent="handleSearch">
                    <input v-model="search.search_amount" class="form-control me-2" type="number" placeholder="Search collections where amount less than..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-6 col-xl-4 mt-3" v-for="(collection, index) in collections" :key="index">
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
                    <div class="card-footer">
                        <router-link class="btn btn-primary" :to="{ name: 'ShowCollection', params: { id: collection.id }}">
                            Info
                        </router-link>
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
    name: "Home",
    data(){
        return {
            collections: [],
            search: {
                search_amount: '',
            }
        }
    },
    methods: {
        getCollections() {
            axios.get('/api/collections').then(response => {
                // console.log(response);
                this.collections = response.data.data;
            }).catch(errors => {
                console.log(errors);
            });
        },
        handleDelete(id) {
            if (confirm("Delete this collection?")) {
                axios.delete('api/collections/' + id).then(response => {
                    console.log(response.data);
                }).catch(errors => {
                    console.log(errors);
                });

                this.getCollections();
            }
        },
        handleSearch() {
            axios.post('/api/collections/search', this.search).then(response => {
                this.collections = response.data.data;
                console.log(response.data.data)
            }).catch(res => console.log(res));
            this.search.search_amount = '';
        }
    },
    mounted() {
        this.getCollections();
    }
};
</script>
