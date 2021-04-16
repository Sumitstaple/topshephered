<template>
<div>
<div class="pageheader">
    <h2>Edit User</h2>
</div>
<div class="pagecontent">
                <p v-if="errors.length">
                    <b>Please correct the following error(s):</b>
                    <ul>
                      <li v-for="error in errors">{{ error }}</li>
                    </ul>
                  </p>
                <form v-on:submit.prevent="edit">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="" v-model="form.name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="" v-model="form.email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" v-model="form.password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="form.password_confirmation">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" v-on:click="edit" class="btn btn-primary">
                               Update
                            </button>
                        </div>
                    </div>
                </form>
    </div>
    <vue-loaders-ball-beat color="red" scale="1" v-if="showloader"></vue-loaders-ball-beat>
</div>
</template>

<script>
import {edituser}  from '../../api';
import axios from 'axios';
var apiurl = 'http://127.0.0.1:8000/api/';
export default {
name: 'EditUser',
 data() {
    return{
        errors: [],
        form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
         showloader:false,
    }
  },
  mounted(){
        this.getUser();

  },
 methods: {
        async edit(e){

          if (!this.form.name) {
            this.errors.push('Name required.');
          }
          if (!this.form.email) {
            this.errors.push('Email required.');
          }

          if(this.errors.length){
            return false;
          }

            this.showloader = true;
            const { data } = edituser(this.form);
            console.log(data);
        },
        getUser(){
            const id = this.$route.params && this.$route.params.id;
             axios.get(apiurl+'portal/users/'+id, {

              })
              .then(response => {
                    this.form = response.data;
                    console.log(this.form);
              })
        },
        async edit(){
          const id = this.$route.params && this.$route.params.id;
          console.log(this.form);
          const {data} =  await edituser(this.form,id);
          console.log(data);
        }

    }

}
</script>

<style scoped>

</style>
