<template>
    <div>
        <h2 class="text-center">Bank List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Account Type</th>
                <th>Account Number</th>
                 <th>Initial Balance</th>
                  <th>Branch Name</th>
                   <th>Account Name</th>
               <th>Actions</th> 
            </tr>
            </thead>
            <tbody>
            <tr v-for="bank in banks" :key="bank.id">
                <td>{{ bank.id }}</td>
                <td>{{ bank.account_type }}</td>
                <td>{{ bank.account_number }}</td>
                 <td>{{ bank.current_balance }}</td>
                  <td>{{ bank.branch_name }}</td>
                   <td>{{ bank.account_name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: bank.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteBank(bank.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                banks: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/banks/')
                .then(response => {
                    this.banks = response.data;
                });
        },
        methods: {
            deleteBank(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/banks/${id}`)
                    .then(response => {
                        let i = this.banks.map(data => data.id).indexOf(id);
                        this.banks.splice(i, 1)
                    });
            }
        }
    }
</script>