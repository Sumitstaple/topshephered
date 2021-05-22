<template>
<div>
    <div class="pageheader">
        <h2>All Users</h2>
    </div>
    <div class="container">
    <div class="pagecontent">
       <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for='item in items'>
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>

                <td><router-link class="nav-link" :to="'/admin/edituser/'+item.id"><i class="fa fa-edit"></i></router-link>
                <a href="#" v-on:click="deleteuser(item.id)"><i class="fa fa-trash"></i></a>
                </td>

            </tr>
            </tbody>
    </table>
    </div>
    </div>
</div>
</template>

<script>

import {getusers,deleteusers}  from '../../api';
import axios from 'axios';

var apiurl = 'http://127.0.0.1:8000/api/';
export default {
name: 'ViewAll',
 data() {
    return{
        rows: [],
        items: [],
    }
  },
  mounted(){
        this.getList();

  },
 methods: {
    async getList(id) {

     const {data} = await getusers();
     console.log(data);
     this.items = data.data;
    },
    async deleteuser(id){

     const {data} =  await deleteusers(id);

     if(data.status == "success"){
        this.$alert("User Deleted Successfully.");
        this.getList();
     }

    }
 }
}
</script>

<style scoped>

</style>
