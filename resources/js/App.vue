<template>
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Employee List</router-link>
                    <router-link to="/create" class="nav-item nav-link">Create Employee</router-link>
<router-link to="/salary" class="nav-item nav-link">Bank List</router-link>
                    <router-link to="/bank" class="nav-item nav-link">Create Bank View</router-link>

                </div>
            </div>
        </nav>

        <router-view> </router-view>
         
    </div>
    
</template>
 
<script>
    export default {}
</script>