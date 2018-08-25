<template>
<div>
    <div class="card">
        <div class="card-header">
        <nav>
            <ul class="list-inline">
                <li class="float-right"><router-link :to="{ name : 'home'}">Home</router-link></li>
                <li v-if="!$auth.check()" class="float-right"><router-link :to="{ name : 'login' }">Login</router-link></li>
                <li v-if="!$auth.check()" class="float-right"><router-link :to="{ name : 'register' }">Register</router-link></li>
                <li v-if="!$auth.check()" class="pull-right"><a href="#" @click.prevent="$auth.logout()">Logout</a></li>
            </ul>
        </nav>
        </div>
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
