<template>
    <div>
        <h3 class="text-center">Create Bank</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBank">
                    <div class="form-group">
                        <label>Account Type</label>
                        <input type="text" class="form-control" v-model="bank.account_type" name="account_type">
                    </div>
                    <div class="form-group">
                        <label>Account Number</label>
                        <input type="number" class="form-control" v-model="bank.account_number" name="account_number">
                    </div>

                     <div class="form-group">
                        <label>Current Balance</label>
                        <input type="number" class="form-control" v-model="bank.current_balance" name="current_balance">
                    </div>
                     <div class="form-group">
                        <label>Branch Name</label>
                        <input type="text" class="form-control" v-model="bank.branch_name" name="branch_name">
                    </div>
                     <div class="form-group">
                        <label>Account Name</label>
                        <input type="text" class="form-control" v-model="bank.account_name" name="account_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods: {
            addBank() {
                this.axios
                    .post('http://localhost:8000/api/banks', this.bank)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>