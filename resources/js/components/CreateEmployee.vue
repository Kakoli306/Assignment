<template>
    <div>
        <h3 class="text-center">Create Employee</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addEmployee">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" class="form-control" name="employee_id" v-model="employee.employee_id">
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" v-model="employee.employee_name"
                        name="employee_name">
                    </div>
                    <div class="form-group">
                        <label>Grade</label>
                        

                     <select name="grade" v-model="employee.grade" class="form-control">
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                         <option value="4">Four</option>
                         <option value="5">Five</option>
                             <option value="6">Six</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" v-model="employee.address" name="address">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" v-model="employee.mobile" name="mobile">
                    </div>
                     <div class="form-group">
                        <label>Bank Account</label>
                        <input type="text" class="form-control" v-model="employee.bank_account" name="bank_account">
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
                employee: {}
            }
        },
        methods: {
            addEmployee() {
                this.axios
                    .post('http://localhost:8000/api/employees', this.employee)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>