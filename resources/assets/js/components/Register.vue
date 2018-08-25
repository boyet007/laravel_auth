<template>
    <div>
        <div class="alert alert-danger" v-if="error && !success">
            <p>There was an error unable to complete registration</p>
        </div>
        <div v-if="success" class="alert alert-success">
            <p>Registration completed. you can now <router-link :to="{ name: 'login'}">Sign in.</router-link></p>
        </div>
        <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.name}">
                <label for="name">Name</label>
                <input type="text" class="form-control" v-model="name" required id="name">
                <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.email}">
                <label for="email">Email</label>
                <input type="email" class="form-control" v-model="email" placeholder="user@example.com"  required id="email">
                <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.password }">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
                <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            email: '',
            password:  '',
            error: false,
            errors: {},
            success: false
        };
    },
    methods: {
        register() {
            console.log('register')
            var app = this;
            this.$auth.register({
                params: {
                    name: app.name,
                    email: app.email,
                    password: app.password
                },
                success: function() {
                    app.success = true
                },
                error: function (resp) {
                    app.error = true;
                    app.errors = resp.response.data.errors;
                },
                redirect: null
            });
        }
    } 
    
}
</script>

