<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Update collection</h5>
                        <form action="#" @submit.prevent="handleUpdate">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input v-model="collection.title" type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea v-model="collection.description" name="description" class="form-control" id="description" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="target_amount" class="form-label">Target amount</label>
                                <input v-model="collection.target_amount" type="number" name="target_amount" class="form-control" id="target_amount" aria-describedby="amountHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input v-model="collection.link" type="text" name="link" class="form-control" id="link" aria-describedby="linkHelp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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
    name: "UpdateCollection",
    data(){
        return {
            collection: {
                title: '',
                description: '',
                target_amount: '',
                link: '',
            }
        }
    },
    methods: {
        getCollection() {
            axios.get('/api/collections/' + this.$route.params.id).then(response => {
                this.collection.title = response.data.title;
                this.collection.description = response.data.description;
                this.collection.target_amount = response.data.target_amount;
                this.collection.link = response.data.link;
            });
        },
        handleUpdate() {
            axios.put('/api/collections/' + this.$route.params.id, this.collection).then(response => {
                console.log(response);
                console.log(response.data);
            }).catch(error => console.log(error));
            this.clearStoreForm();
            this.$router.push({ name: 'Home' });
        },
        clearStoreForm() {
            this.collection.title = '';
            this.collection.description = '';
            this.collection.target_amount = '';
            this.collection.link = '';
        }
    },
    created() {
        this.getCollection();
    }
};
</script>
