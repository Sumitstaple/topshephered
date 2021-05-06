<template>
<div>
    <div class="pageheader">
        <h2>All Pets</h2>
    </div>
    <div class="container">
    <div class="pagecontent">
       <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>title</th>
                <th>Gender</th>
                <th>Parents</th>
                <th>Breed Quality</th>
                <th>Breed purpose</th>
                <th>#Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for='item in items'>
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.title}}</td>
                <td>{{item.gender}}</td>
                <td></td> 
                <td>{{item.breedQuality}}</td>
                <td>{{item.breedPurpose}}</td> 
                <td></td> 
 
                <td><router-link class="nav-link" :to="'/admin/editpet/'+item.id"><i class="fa fa-edit"></i></router-link>
                <a href="#" v-on:click="deletepet(item.id)"><i class="fa fa-trash"></i></a>
                <button  class="btn btn-sm btn-success" title="Unmark it from featured">
                    <i  class="fa fa-star"></i>
                </button>
                <button class="btn btn-sm btn-success" title="Mark it invisibile">
                    <i class="fa fa-globe"></i>
                </button>
                </td>

            </tr>
            </tbody>
    </table>
    </div>
    </div>
</div>
</template>

<script>

import {getallpets,deletePets}  from '../../api';
import axios from 'axios';

var apiurl = 'http://127.0.0.1:8000/api/';
export default {
name: 'AllPets',
 data() {
    return{
        rows: [],
        items: [],
    }
  },
  mounted(){
        this.getallpets();

  },
 methods: {
    async getallpets(id) {

     const {data} = await getallpets();
     console.log(data);
     this.items = data.data;
    },
    async deletepet(id){

     const {data} =  await deletePets(id);

     if(data.status == "success"){
        this.$alert("User Deleted Successfully.");
        this.getallpets();
     }

    }
 }
}
</script>

<style scoped>

</style>
