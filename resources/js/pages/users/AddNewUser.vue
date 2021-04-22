<template>
<div>
<div class="pageheader">
    <h2>Add New User</h2>
</div>
<div class="pagecontent">

                <form v-on:submit.prevent="create">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="" v-model="form.name">
                             <span class="error" v-if="errors.name.length">{{ errors.name }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="" v-model="form.email">
                            <span class="error" v-if="errors.email.length">{{ errors.email }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" v-model="form.password">
                            <span class="error" v-if="errors.password.length">{{ errors.password }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="form.password_confirmation">
                            <span class="error" v-if="errors.password_confirmation.length">{{ errors.password_confirmation }}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" v-on:click="create" class="btn btn-primary">
                               Add New
                            </button>
                        </div>
                    </div>
                </form>
    </div>
    <vue-loaders-ball-beat color="red" scale="1" v-if="showloader"></vue-loaders-ball-beat>
</div>
</template>

<script>
import {createusers}  from '../../api';
export default {
name: 'AddNewUser',
 data() {
    return{
        errors: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
        form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
         showloader:false,
    }
  },
 methods: {
        async create(e){

          if (!this.form.name) {
            this.errors.name = 'Name is required.';
            return false;
          }
          else{
            this.errors.name = '';
          }
          if (!this.form.email) {
            this.errors.email = 'Email is required.';
            return false;
          }
          else{
            this.errors.email = '';
          }
          if (!this.form.password) {
            this.errors.password = 'Password is required.';
            return false;
          }
          else{
            this.errors.password = '';
          }
          if (!this.form.password_confirmation) {
            this.errors.password_confirmation = 'Confirm Password is required.';
            return false;
          }
          else{
            this.errors.password_confirmation = '';
          }
          if (!this.form.password_confirmation) {
            this.errors.password_confirmation = 'Confirm Password is required.';
            return false;
          }
          else{
            this.errors.password_confirmation = '';
          }

          if(this.form.password_confirmation != this.form.password)
          {
             this.errors.password_confirmation = 'Confirm Password should be same.';
             return false;
          }

          if(this.errors.length){

          }

            this.showloader = true;
            const { data } = await createusers(this.form);
            if(data.status == "success"){
                this.$alert(data.message);
                this.showloader = false;
                this.$router.push('viewall');
            }
            else{
                this.$alert(data.message);
                this.showloader = false;
            }


        }
    }
}
</script>

<style scoped>

</style>
