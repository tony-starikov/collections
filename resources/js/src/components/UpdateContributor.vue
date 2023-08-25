<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto d-flex align-items-center" style="min-height: 90vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Update contributor</h5>
                        <form action="#" @submit.prevent="handleUpdate">
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Name</label>
                                <input v-model="contributor.user_name" type="text" name="user_name" class="form-control" id="user_name" aria-describedby="nameHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input v-model="contributor.amount" type="number" name="amount" class="form-control" id="amount" aria-describedby="amountHelp" required>
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
    name: "UpdateContributor",
    data(){
        return {
            contributor: {
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
        handleUpdate() {
            axios.put('/api/contributors/' + this.$route.params.id, this.contributor).then(response => {
                console.log(response);
                console.log(response.data);
            }).catch(error => console.log(error));
            this.clearStoreForm();
            this.$router.push({ name: 'Contributors' });
        },
        clearStoreForm() {
            this.contributor.user_name = '';
            this.contributor.amount = '';
        }
    },
    mounted() {
        this.getContributor();
    }
};
</script>
