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
    data() {
        return {
            email: null,
            password: null,
            error: false
        }
    },
    methods: {
        login() {
            var app = this
            this.$auth.login({
                params: {
                    email: app.email,
                    password: app.password
                },
                success: function() {
                },
                error: function(e) {
                    const errResp = e.response.data;
                    app.error = true;
                    app.remoteMsg = errResp.msg;
                    console.log('[Error] Login: ' + errResp.msg);
                },
                rememberMe: true,
                redirect: '/dashboard',
                fetchUser: true
            });
        },
        hideAlert() {
            this.error = false;
        }
    }
}
</script>

<style scoped>

</style>

