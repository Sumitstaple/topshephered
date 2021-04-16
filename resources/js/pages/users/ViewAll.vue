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
            </tr>
        </thead>
        <tbody>
            <tr v-for='item in items'>
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.email}}</td>
            </tr>
            </tbody>
    </table>
    </div>     
    </div>
</div>
</template>

<script>

import {getusers}  from '../../api';
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
    getList(id) {
             axios.get(apiurl+'portal/users', {
    
              })
              .then(response => {
                    this.items = response.data.data;
                    console.log(this.items);
              })
        
    }
    },     
}
</script>

<style scoped>

</style>    