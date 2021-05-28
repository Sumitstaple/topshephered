<template>
<div>
    <div class="pageheader">
        <h2>All Leads</h2>
    </div>
    <div class="container">
    <div class="pagecontent">
       <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Email</th>
                <th>Type</th>
                <th>Number</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for='item in items'>
                <td>{{item.id}}</td>
                <td>{{item.fname}}</td>
                <td>{{item.email}}</td>
                <td>{{item.contactnumber}}</td>
                <td>{{item.type}}</td>
                <td>{{item.message}}</td>
                
 
                <td>
                <a href="#" v-on:click="deletepet(item.id)" class="trash"><font-awesome-icon icon="trash" /></i></a>
                </td>

            </tr>
            </tbody>
    </table>
    </div>
    </div>
</div>
</template>

<script>

import {getallLeads,deleteLeads}  from '../../api';
import axios from 'axios';

//var apiurl = 'http://localhost/portal2/api/';
var apiurl = 'https://vrsoftcoder.com/topshepered/api/';
export default {
name: 'AllLeads',
 data() {
    return{
        rows: [],
        items: [],
        visibleclass: '',
        featuredclass: true,
    }
  },
  mounted(){
        this.getallLeads();

  },
 methods: {
    async getallLeads(id) {

     const {data} = await getallLeads();
     console.log(data);
     this.items = data.data;
    },
    async deletepet(id){

     const {data} =  await deleteLeads(id);

     if(data.status == "success"){
        this.$alert("Lead Deleted Successfully.");
        this.getallLeads();
     }
 }
    
}
}

</script>

<style scoped>

</style>