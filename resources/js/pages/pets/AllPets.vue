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
            <tr v-for='(item, index) in items'>
                <td>{{index+1}}</td>
                <td>{{item.name}}</td>
                <td>{{item.title}}</td>
                <td>{{item.gender}}</td>
                <td></td> 
                <td>{{item.breedQuality}}</td>
                <td>{{item.breedPurpose}}</td> 
                <td></td> 
 
                <td><router-link class="nav-link" :to="'/topshepered/admin/editpet/'+item.id">
                <font-awesome-icon icon="edit" />
                </router-link>
                <a href="#" v-on:click="deletepet(item.id)" class="trash"><font-awesome-icon icon="trash" /></a>
                <button v-if="item.featured == 1" class="btn btn-sm btn-primary" title="Unmark it from featured" v-on:click="setUnfeatured(item.id)">
                   <font-awesome-icon icon="star" />
                </button>
                <button v-if="item.featured == 0" class="btn btn-sm btn-success" title="Mark it featured" v-on:click="setfeatured(item.id)" >
                   <font-awesome-icon icon="star" />
                </button>
                <button v-if="item.visibility == 1" class="btn btn-sm btn-primary" title="Mark it invisibile" v-on:click="setInvisible(item.id)">
                    <font-awesome-icon icon="globe" />
                </button>
                 <button v-if="item.visibility == 0" class="btn btn-sm btn-success" title="Mark it Visibile" v-on:click="setVisible(item.id)">
                 <font-awesome-icon icon="globe" />
                 
                </button>
                </td>

            </tr>
            </tbody>
    </table>

    <div class="loadmore">
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="javascript:void(0);" @click="previouserecord">Previous</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);" @click="nextrecord">Next</a></li>
  </ul>
</nav>
</div>
    </div>
    </div>
</div>
</template>

<script>

import {getallpets,deletePets,allpets,getPreallpets}  from '../../api';
import axios from 'axios';

//var apiurl = 'http://localhost/portal2/api/';
var apiurl = 'https://vrsoftcoder.com/topshepered/api/';
export default {
name: 'AllPets',
 data() {
    return{
        rows: [],
        items: [],
        visibleclass: '',
        featuredclass: 'asdsd',
        limit: 0,
    }
  },
  mounted(){
 
        $(document).on("click",".btn-primary",function(){
            $(this).addClass('btn-success');
            $(this).removeClass('btn-primary');
        })

        $(document).on("click",".btn-success",function(){
            $(this).addClass('btn-primary');
            $(this).removeClass('btn-success');
        })
        
        this.allpets();

  },
 methods: {

    nextrecord(){
        if(this.limit <= 0){
          this.limit = 10;  
        }
        else{

            this.limit = this.limit+10;
        }
        // this.items =[];
        this.getallpets(this.limit);
    },

    previouserecord(){

        this.limit = this.limit-10;

        this.getpreallpets(this.limit);
    },

    async getpreallpets(limit) {

     const {data} = await getPreallpets(limit);

     this.items = data.data;
    },
    async getallpets(limit) {

     const {data} = await getallpets(limit);

     this.items = data.data;
    },
    async allpets() {

     const {data} = await allpets();
     console.log(data);
      // this.$set('items', data.data)
     this.items = data.data;
    },
    async deletepet(id){
        // alert(this.limit);
     const {data} =  await deletePets(id);

     if(data.status == "success"){
        this.$alert("Pet Deleted Successfully.");
         this.allpets();
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
            // alert('c');
            this.featuredclass = 'ccc';
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
            // alert('a');
            this.featuredclass = 'asas';
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