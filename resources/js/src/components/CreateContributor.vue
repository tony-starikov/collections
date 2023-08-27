<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">New contribution</h5>
                        <form action="#" @submit.prevent="handleStore">
                            <div class="mb-3">
                                <div class="alert alert-danger" role="alert" v-if="error">
                                    Select a collection, please!
                                </div>
                                <select v-model="storeData.collection_id" class="form-select" aria-label="Default select example">
                                    <option value="" selected>Select collection</option>
                                    <option v-for="(collection, index) in collections" :key="index" v-bind="{ value: collection.id }">{{ collection.title }}</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input v-model="storeData.user_name" type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="target_amount" class="form-label">Amount</label>
                                <input v-model="storeData.amount" type="number" name="target_amount" class="form-control" id="target_amount" aria-describedby="amountHelp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Store</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "CreateContributor",
    data(){
        return {
            collections: [],
            storeData: {
                collection_id: '',
                user_name: '',
                amount: '',
            },
            error: false,
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
        handleStore() {
            if (this.storeData.collection_id === '') {
                this.error = true;
                return false;
            }
            axios.post('/api/contributors', this.storeData).then(response => {
                console.log(response.data.data);
            }).catch(res => console.log(res));
            this.clearStoreForm();
            this.$router.push({ name: 'Home' });
        },
        clearStoreForm() {
            this.storeData.collection_id = '';
            this.storeData.user_name = '';
            this.storeData.amount = '';
        }
    },
    mounted() {
        this.getCollections();
    }
};
</script>
