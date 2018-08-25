<template>
<div>
    <div class="card">
        <nav>
            <ul class="list-inline">
                <li class="float-right"><router-link :to="{ name : 'home'}">Home</router-link></li>
                <li class="float-right"><router-link :to="{ name : 'login' }">Login</router-link></li>
                <li class="float-right"><router-link :to="{ name : 'register' }">Register</router-link></li>
            </ul>
        </nav>
    </div>
    <div class="card-body">
        <router-view></router-view>
    </div>
</div>   
</template>

<script>
export default {};
</script>

<style scoped>
</style>
