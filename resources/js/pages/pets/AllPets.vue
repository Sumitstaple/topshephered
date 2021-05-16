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
                <button v-if="item.featured == 1" class="btn btn-sm btn-primary" :class="{
      'btn-primary': featuredclass,
      'btn-success': !featuredclass,
    }" title="Unmark it from featured" v-on:click="setUnfeatured(item.id)">
                    <i  class="fa fa-star"></i>
                </button>
                <button v-if="item.featured == 0" class="btn btn-sm btn-success" title="Mark it featured" v-on:click="setfeatured(item.id)">
                    <i  class="fa fa-star"></i>
                </button>
                <button v-if="item.visibility == 1" class="btn btn-sm btn-primary" title="Mark it invisibile" v-on:click="setInvisible(item.id)">
                    <i class="fa fa-globe"></i>
                </button>
                 <button v-if="item.visibility == 0" class="btn btn-sm btn-success" title="Mark it Visibile" v-on:click="setVisible(item.id)">
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
        visibleclass: '',
        featuredclass: true,
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
        this.$alert("Pet Deleted Successfully.");
        this.getallpets();
     }

    },

    async setfeatured(id) {
        const data = {
            id:id,
            featured:1,
        }

        axios.post(apiurl+'pets/petinfo/setfeatured', data, {
        header:{
          "Accept": "application/json",
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.featuredclass = true;
            this.$alert('Successfully Mark as Featured');
        }
        else{
            //this.$alert('Error!');
        }
        })
    }
    ,

    async setUnfeatured(id,status) {
        const data = {
            id:id,
            featured:0,
        }

        axios.post(apiurl+'pets/petinfo/setfeatured', data, {
        header:{
          "Accept": "application/json",
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.featuredclass = false;
            this.$alert('Successfully Mark as Unfeatured');
        }
        else{
            //this.$alert('Error!');
        }
        })
    },

    async setVisible(id) {
        const data = {
            id:id,
            visibility:1,
        }

        axios.post(apiurl+'pets/petinfo/setvisible', data, {
        header:{
          "Accept": "application/json",
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Successfully Mark as Visible');
        }
        else{
            //this.$alert('Error!');
        }
        })
    }
    ,

    async setInvisible(id) {
        const data = {
            id:id,
            visibility:0,
        }

        axios.post(apiurl+'pets/petinfo/setvisible', data, {
        header:{
          "Accept": "application/json",
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Successfully Mark as Invisible');
        }
        else{
            //this.$alert('Error!');
        }
        })
    }
}
}
</script>

<style scoped>

</style>
