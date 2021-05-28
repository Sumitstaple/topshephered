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

                <td><router-link class="nav-link" :to="'/topshepered/admin/edituser/'+item.id"><font-awesome-icon icon="edit" /></i></router-link>
                <a href="#" v-on:click="deleteuser(item.id)" class="trash"><font-awesome-icon icon="trash" /></i></a>
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

//var apiurl = 'http://localhost/portal2/api/';
var apiurl = 'https://vrsoftcoder.com/topshepered/api/';
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
