<template>
<div>
<div class="pageheader">
    <h2>Add Pet</h2>
</div>
<div class="pagecontent ">

    <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active"  role="presentation">
                <a href="javascript:void(0);" class="nav-link active" :class="activeclass" v-on:click="changetab('petinfo')">
                    Pet Details
                </a>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <a href="javascript:void(0);" class="nav-link" v-on:click="changetab('externalagency')">
                    External Agency
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0);" class="nav-link" v-on:click="changetab('certificationagency')">
                    Certification Agency
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0);" class="nav-link" v-on:click="changetab('addparent')">
                    Add Parents
                </a>
            </li>  
            <li class="nav-item" role="presentation" >                                       
                <a href="javascript:void(0);" class="nav-link" v-on:click="changetab('images')">
                    Images
                </a>
            </li>                       
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0);" class="nav-link" v-on:click="changetab('videos')">
                    Videos
                </a>
            </li> 
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0);"class="nav-link" v-on:click="changetab('pricing')">
                    Pricing
                </a>
            </li>     -->  
        </ul>  

        <div class="tab-content">
            <br><br>
            <div class="active" id="petInfo" v-show="pagetype=='petinfo'">
                <form>
                    <div class="row">
                        <div class="col-md-12">                                                    
                            <div class="col-sm-3 form-group">
                                <label class="required-mark">Pet Name</label>
                                <br>
                                <input class="form-control input-sm" type="text" placeholder="Please enter pet name" formControlName="name" v-model="form.name" @change="onChangeinput"/>
                            </div>

                            <div class="col-sm-3 form-group">
                                <label class="required-mark">Gender</label>
                                <br>
                                <select class="form-control input-sm" formControlName="gender" v-model="form.gender" @change="onChangeinput">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-sm-3 form-group">
                                <label>Gender Nomenclature</label>
                                <br>
                                <select class="input-sm form-control" formControlName="genderNomenclature" v-model="form.genderNomenclature">
                                    <option value="" disabled selected>Select Gender Nomenclature</option>
                                    <option value="Dam">Dam</option>
                                    <option value="Sire">Sire</option>
                                </select>
                            </div>  
                            
                            <div class="col-sm-3 form-group">
                                <label>Date Of Birth</label>
                                <br>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='date' class="form-control input-sm" v-model="form.dateOfBirth"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>                                                  
                                    </div>
                                </div>
                            </div>  
                            <!--  1 ROW ENDS -->
                        </div>

                        <div class="col-md-12">                                    
                            <!--  2 ROW STARTS -->    
                            <div class="col-sm-3 form-group">
                                <label>Breed</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breed" v-model="form.breed">
                                    <option value="" disabled selected>Select Breed</option>
                                    <option value="German Shepherd">German Shepherd</option>
                                </select>
                            </div> 
                                
                            <div class="col-sm-3 form-group">
                                <label>Breed Quality</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breedQuality" v-model="form.breedQuality">
                                    <option value="" disabled selected>Select Breed Quality</option>
                                    <option  value="Choice">Choice</option>
                                    <option  value="Elite">Elite</option>
                                    <option  value="Exceptional">Exceptional</option>
                                    <option  value="Ultimate">Ultimate</option>
                                </select>
                            </div> 
                                    
                            <div class="col-sm-3 form-group">
                                <label>Breed Type</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breedType" v-model="form.breedType">
                                    <option value="" disabled selected>Select Breed Type</option>
                                    <option  value="Long Coat">Long Coat</option>
                                    <option  value="Short Coat">Short Coat</option>
                                </select>
                            </div> 

                            <div class="col-sm-3 form-group">
                                <label>Breed Purpose</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breedPurpose" v-model="form.breedPurpose">
                                    <option value="" disabled selected>Select Breed Purpose</option>
                                    <option  value="Protection">Protection</option>
                                    <option  value="Family">Family</option>
                                    <option  value="Hunting">Hunting</option>
                                </select>
                            </div>                                                                                                                                                                           
                            <!--  2 ROW ENDS -->
                        </div>                    
                        <div class="col-md-12">
                            <!-- 3rd ROW STARTS-->
                                                      
                            <div class="col-sm-3 form-group">
                                <label>Marking/Color</label>
                                <br>
                                <select class="input-sm form-control" formControlName="markingsOrColor" v-model="form.markingsOrColor">
                                    <option value="" disabled selected>Select Marking Color</option>
                                    <option  value="Black">Black</option>
                                    <option  value="White">White</option>
                                    <option  value="Black and Red">Black and Red</option>
                                    <option  value="Black and Tan">Black and Tan</option>
                                </select>
                            </div> 

                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                <br>
                                <select class="input-sm form-control" v-model="form.status">
                                    <option value="" disabled selected>Select Status</option>
                                    <option  value="Sold">Sold</option>
                                    <option  value="Upcoming">Upcoming</option>
                                    <option  value="Current">Current</option>
                                    <option  value="Reserved">Reserved</option>
                                </select>
                            </div> 

                            <div class="col-sm-3 form-group">
                                <label class="required-mark">Title</label> 
                                <br>
                                <select class="input-sm form-control" formControlName="title" v-model="form.title" @change="onChangeinput">
                                    <option value="" disabled selected>Select Title</option>
                                    <option  value="Puppy">Puppy</option>
                                    <option  value="Parent">Parent</option>
                                </select>
                            </div>
                            
                            <div class="col-md-3 form-group form-group-sm">
                                <label>Description</label>
                                <br>
                                <textarea class="form-control" 
                                            rows="3" 
                                            formControlName="description" 
                                            placeholder="Description" v-model="form.description"></textarea>
                            </div>
                        </div>                                
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-sm btn-primary" value="Save" @click="create" v-show="buttondisable == 'show'">

                        Update & Continue
                        </button>   
                        <button type="button" class="btn btn-sm btn-primary" value="Save"  disabled v-show="buttondisable == 'hide'">    
                            
                            Update & Continue
                        </button>                        
                    </div>
                </form>
            </div>
            <div class="" id="externalAgencyDetails" v-show="pagetype=='externalagency'">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 padding-top-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>External Agency</label><br>
                                  
                                    <b-button v-b-modal.modal-1 class="btn btn-primary btn-sm">Add</b-button>
                                     <b-modal id="modal-1" title="BootstrapVue">
                                        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Agency*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="text" v-model="form.externalAgency.agency"/>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Agency Id*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="text" v-model="form.externalAgency.id"/>
                                            </div>
                                        </div>

                                        <b-button class="mt-3" blockblock @click="hideModal">Save</b-button>
                                      </b-modal>       
                                </div>                            
                            </div>
                        </div>                    
                        <div class="col-md-9 col-md-offset-1 padding-top-20">
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Agency</th>
                                            <th>ID</th> 
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{form.externalAgency.agency}}</td>
                                            <td><span v-if="form.externalAgency.agency">{{ new Date().toLocaleString() }}</span></td>
                                             <td class="text-right">
                                                <i class="fa fa-trash" v-on:click="deleteexternal"></i>                                       
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div> 
            </div>
            <div class="" id="certificationAgencyDetails" v-show="pagetype=='certificationagency'">                                            
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 padding-top-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Certification Agency</label><br>
                                     <b-button v-b-modal.modal-2 class="btn btn-primary btn-sm">Add</b-button>
                                     <b-modal id="modal-2" title="Add Agency">
                                        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Agency*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="text" v-model="form.certificationAgency.agency"/>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Agency Id*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="text" v-model="form.certificationAgency.id"/>
                                            </div>
                                        </div>

                                        <b-button class="mt-3" blockblock @click="hideModal2">Save</b-button>
                                      </b-modal>  
                                </div>                            
                            </div>
                        </div>                    
                        <div class="col-md-9 col-md-offset-1 padding-top-20">
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Agency</th>
                                            <th>Date</th> 
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td>{{form.certificationAgency.agency}}</td>
                                            <td><span v-if="form.certificationAgency.agency">{{ new Date().toLocaleString() }}</span></td>
                                            <td class="text-right">
                                                <i class="fa fa-trash" v-on:click="deletecertificate"></i>                                       
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div> 
            </div>

            <div class="" id="addParents" v-show="pagetype=='addparent'"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 padding-top-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Add Parent</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="input-sm form-control">
                                            <option value="" disabled selected>Select Parent</option>
                                            <option></option>
                                        </select>
                                        <span class="input-group-addon input-sm link" 
                                                id="basic-addon3" 
                                                >+</span>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        <div class="col-md-10 padding-top-20">
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Name</th>
                                            <th>Breed</th>
                                            <th>Breed Quality</th>
                                            <th>Breed purpose</th>
                                            <th>#Images</th>
                                            <th>#Videos</th>
                                            <th>#External Agency</th>
                                            <th>#Certification Agency</th>
                                            <th>Relation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                                                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>                                                                                
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
            <div class="" id="images" v-show="pagetype=='images'">
                <div class="col-sm-12 form-group">                
                    <img src="" />
                </div>
                <br>
                <div class="col-sm-12">
                    <ul class="pet-images">
                        <li >
                            <div>
                                <img src="" alt="">
                                <vue-upload-multiple-image
                          @upload-success="uploadImageSuccess"
                          @before-remove="beforeRemove"
                          @edit-image="editImage"
                          :data-images="images"
                          :maxImage=10
                          dragText="upload" 
                          browseText="upload" 
                          :primaryText="upload" 
                          ></vue-upload-multiple-image>
                                <span class="star">
                                    <i class="icon-star"></i>
                                </span>
                                <span class="trash">
                                    <i class="icon-trash"></i>
                                </span>
                            </div>
                                
                        </li>
                    </ul>
                </div>
                              
            </div>

            <div id="videos" class="" v-show="pagetype=='videos'">
                <div class="row">
                    <div class="col-md-4 form-group">
                            <p>
                                <span><b>Upload Pet Video(s)</b></span> <br>
                                <span>
                                        (Please click on the below icon to select file's)
                                </span>
                            </p>
                    
                            <div class="videomain">
                                <input type="file" name="video" @change="uploadvideo" class="videoinput">
                                <div class="iconupload">
                                <i class="fas fa-video"></i><i class="fa fa-upload" aria-hidden="true"></i>
                            </div>
                                
                            </div>
                    </div>
                    <div class="col-md-8">

                        <h5>Pet Video(s)</h5>
                            <div class="row">
                           <div class="col-md-4" v-for="(item, index) in form.videos" :key="">
                                <i class="fa fa-trash" v-on:click="deletevideo(index)"></i>
                                <video width="100%" height="100%" controls>
                                <source :src="'http://127.0.0.1:8000/videos/'+item" type="video/mp4">
                            </video>
                           </div>
                       </div>
                          
                        
                    </div>
                </div>
            </div>

            <div class="" id="pricing" v-show="pagetype=='pricing'">
                <form>
                    <div class="row">                                
                        <div class="col-md-12 margin-btm-10px">                                    
                            <!--  1 ROW STARTS -->   
                            <div class="col-sm-3 form-group">
                                <input type="checkbox"  value="true"/> Auto Determine
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-sm-3 form-group">
                                <label class="required-mark">Price Type</label>
                                <br>
                                <select class="input-sm form-control" >
                                    <option value="" disabled selected>Select Price Type</option>
                                    <option  value="TBD">TBD</option>
                                    <option  value="fixed">Fixed Price</option>
                                    <option  value="range">Variable Price</option>
                                </select>
                            </div> 

                            <div class="col-md-3 form-group form-group-sm">
                                <label class="required-mark">Fixed Price</label>
                                <br>
                                <input class="form-control" 
                                       type="number"
                                       min="1"
                                       
                                       placeholder="Please Add price"/>
                            </div>
        
        
                            <div class="col-sm-3 form-group form-group-sm">
                                <label>Price Units</label>
                                <br>
                                <select class="input-sm form-control" >
                                    <option value="" disabled selected>Price Units</option>
                                    <option  value="$">USD</option>
                                </select>
                            </div>
                            <!--  2 ROW ENDS -->
                        </div>
                    </div>
                    <div class="col-sm-12 ml-3">
                        <button class="btn btn-sm btn-primary">
                                Update
                        </button>                        
                    </div>
                </form>               
            </div>

        </div>


    </div>
    <vue-loaders-ball-beat color="red" scale="1" v-if="showloader"></vue-loaders-ball-beat>
</div>
</template>

<script>
import {createpets}  from '../../api';
import VueUploadMultipleImage from 'vue-upload-multiple-image'
import axios from 'axios';

var apiurl = 'http://127.0.0.1:8000/api/';
export default {
name: 'AddPet',
components: {
    VueUploadMultipleImage
  },
 data() {
    return{
        errors: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                profile_pic: '',
            },
        form: {
                name:'',
                dateOfBirth:'',
                industry:'',
                status:'',
                externalAgency:{
                    id:'',
                    agency:''
                },
                certificationAgency:{
                    id:'',
                    agency:''
                },
                gender:'',
                genderNomenclature:'',
                breed:'',
                breedType:'',
                breedQuality:'',
                breedPurpose:'',
                markingsOrColor:'',
                description:'',
                featured:'',
                images:[],
                videos:[],
                father:'',
                mother:'',
                createdBy:'',
                updatedBy:'',
                title:'',
                autoDetermine:true,
                priceType:'',
                fixedPrice:'',
                toPrice:'',
                fromPrice:'',
                notPricedText:'',
                priceUnits:'',
                visibility:true,
            },
         showloader:false,
         pagetype:'petinfo',
         activeclass: 'show',
         images:[],
         videos:[],
         buttondisable:'hide'
    }
  },
  mounted(){

  },
 methods: {
        async create(e){
            console.log(this.form);

            const { data } = await createpets(this.form);
           if(data.status == "success"){
            this.$router.push({ path: `/admin/editpet/${data.data.id}` });
           }
           else{

           }
        },
        changetab(tab){
            
                this.pagetype = tab;
                this.activeclass = "show"

        },
        uploadImageSuccess(formData, index, fileList) {

      this.form.images[index] = {image:fileList[index].path};

    },
    beforeRemove (index, done, fileList) {
      console.log('index', index, fileList)
      var abc = delete this.form.images[index];
      console.log(abc);
      var r = confirm("remove image")
      console.log(this.form.images);
      if (r == true) {

        done()

      } else {
      }
    },
    editImage (formData, index, fileList) {
      console.log('edit data', formData, index, fileList)
    },
    hideModal() {
        this.$root.$emit('bv::hide::modal', 'modal-1', '#btnShow')
      },

      hideModal2() {
        this.$root.$emit('bv::hide::modal', 'modal-2', '#btnShow')
      },
      deletecertificate(){
        this.form.certificationAgency={
            agency:'',
            id:''
        }
      }
      ,
      deleteexternal(){
        this.form.externalAgency={
            agency:'',
            id:''
        }
      },
     async uploadvideo(e){
        console.log(e.target.files[0])
        const data = new FormData();
        data.append('video', e.target.files[0]);
        await axios.post( apiurl+'pets/uploadvideo',
          data,
          {
            headers: {
                 "Accept": "application/json",
                'Content-Type': 'multipart/form-data'
            }
          } 
        ).then((response) => {

          this.form.videos.push(response.data.video);

          console.log(this.form.videos);
        })
       
      },
      deletevideo(index){

        alert(index);

        this.form.videos.splice(index, 1);

        this.form.videos = this.form.videos.slice(index);
        console.log(this.form.videos);
      },
      onChangeinput(){

        if(this.form.name != "" && this.form.title != "" && this.form.gender != ""){
            this.buttondisable = 'show';
        }
        else{
            this.buttondisable = 'hide';
        }
      }
 }
}
</script>

<style scoped>

</style>
