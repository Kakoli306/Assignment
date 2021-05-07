<template>
    <div>
        <h3 class="text-center">Edit Employee</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateEmployee">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" class="form-control" v-model="employee.employee_id" name="employee_id">
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" v-model="employee.employee_name" name="employee_name">
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
                employee: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/employees/${this.$route.params.id}`)
                .then((res) => {
                    this.employee = res.data;
                });
        },
        methods: {
            updateEmployee() {
                this.axios
                    .patch(`http://localhost:8000/api/employees/${this.$route.params.id}`, this.employee)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>