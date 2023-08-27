<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">New collection</h5>
                        <form action="#" @submit.prevent="handleStore">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input v-model="storeData.title" type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea v-model="storeData.description" name="description" class="form-control" id="description" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="target_amount" class="form-label">Target amount</label>
                                <input v-model="storeData.target_amount" type="number" name="target_amount" class="form-control" id="target_amount" aria-describedby="amountHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input v-model="storeData.link" type="text" name="link" class="form-control" id="link" aria-describedby="linkHelp" required>
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
    name: "CreateCollection",
    data(){
        return {
            storeData: {
                title: '',
                description: '',
                target_amount: '',
                link: '',
            }
        }
    },
    methods: {
        handleStore() {
            axios.post('/api/collections', this.storeData).then(response => {
                console.log(response.data.data);
            }).catch(res => console.log(res));
            this.clearStoreForm();
            this.$router.push({ name: 'Home' });
        },
        clearStoreForm() {
            this.storeData.title = '';
            this.storeData.description = '';
            this.storeData.target_amount = '';
            this.storeData.link = '';
        }
    },
};
</script>
