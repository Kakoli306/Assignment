<template>
    <div>
        <h3 class="text-center">Edit Bank</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateBank">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="bank.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="bank.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                bank: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/banks/${this.$route.params.id}`)
                .then((res) => {
                    this.bank = res.data;
                });
        },
        methods: {
            updateBank() {
                this.axios
                    .patch(`http://localhost:8000/api/banks/${this.$route.params.id}`, this.bank)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>