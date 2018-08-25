<template>
    <div>
        <div class="alert-danger" v-if="error">
            <p>There was an error unable to sign in with those credentials</p>
        </div>
        <form action="post" autocomplete="off" @submit.prevent="login">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" required placeholder="user@example.com" v-model="email" id="email" class="form-control">
            </div>
             <div class="form-group">
                <label for="password">Password</label>
                <input type="password" required v-model="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
        </form>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>

</style>

