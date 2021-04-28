<template>
<div>
<div class="pageheader">
    <h2>Add Pet</h2>
</div>
<div class="pagecontent ">

    <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active"  role="presentation">
                <a href="#" class="nav-link" :class="activeclass" v-on:click="changetab('petinfo')">
                    Pet Details
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" v-on:click="changetab('externalagency')">
                    External Agency
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" v-on:click="changetab('certificationagency')">
                    Certification Agency
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" v-on:click="changetab('addparent')">
                    Add Parents
                </a>
            </li>  
            <li class="nav-item" role="presentation" >                                       
                <a href="#" class="nav-link" v-on:click="changetab('images')">
                    Images
                </a>
            </li>                       
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" v-on:click="changetab('videos')">
                    Videos
                </a>
            </li> 
            <li class="nav-item" role="presentation">
                <a href="#"class="nav-link" v-on:click="changetab('pricing')">
                    Pricing
                </a>
            </li>      
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
                                <input class="form-control input-sm" type="text" placeholder="Please enter pet name" formControlName="name" />
                            </div>

                            <div class="col-sm-3 form-group">
                                <label class="required-mark">Gender</label>
                                <br>
                                <select class="form-control input-sm" formControlName="gender">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-sm-3 form-group">
                                <label>Gender Nomenclature</label>
                                <br>
                                <select class="input-sm form-control" formControlName="genderNomenclature">
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
                                        <input type='text' class="form-control input-sm"/>
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
                                <select class="input-sm form-control" formControlName="breed">
                                    <option value="" disabled selected>Select Breed</option>
                                    <option value="German Shepherd">German Shepherd</option>
                                </select>
                            </div> 
                                
                            <div class="col-sm-3 form-group">
                                <label>Breed Quality</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breedQuality">
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
                                <select class="input-sm form-control" formControlName="breedType">
                                    <option value="" disabled selected>Select Breed Type</option>
                                    <option  value="Long Coat">Long Coat</option>
                                    <option  value="Short Coat">Short Coat</option>
                                </select>
                            </div> 

                            <div class="col-sm-3 form-group">
                                <label>Breed Purpose</label>
                                <br>
                                <select class="input-sm form-control" formControlName="breedPurpose">
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
                                <select class="input-sm form-control" formControlName="markingsOrColor">
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
                                <select class="input-sm form-control">
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
                                <select class="input-sm form-control" formControlName="title">
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
                                            placeholder="Description"></textarea>
                            </div>
                        </div>                                
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-primary" value="Save">
                            & Continue
                            
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
                                    <button class="btn btn-primary btn-sm"
                                            type="button">Add</button>
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
                                            <td></td>
                                            <td></td>
                                            <td class="text-right">
                                                <a class="btn btn-warning btn-sm"><i class="icon-pencil"></i>
                                                </a>  
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="icon-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <div class="second-section">
                                <span class="pull-right text-right pad-5">(Please click on "Save" after adding/updating external agencies -->) &nbsp; &nbsp; &nbsp; </span>  
                                <button title="Save" 
                                    class="btn btn-sm btn-primary pull-right text-right">Save</button>    
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
                                    <button class="btn btn-primary btn-sm"
                                            type="button"
                                            >Add</button>
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
                                            <td></td>
                                            <td></td>
                                            <td class="text-right">
                                                <a class="btn btn-warning btn-sm" 
                                                    ><i class="icon-pencil"></i>
                                                </a>  
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="icon-trash"></i>
                                                </button>                                              
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 col-md-offset-3 text-right">   
                            <div class="second-section">   
                                <span class="pull-right text-right pad-5">(Please click on "Save" after adding/updating Certification agencies -->) &nbsp; &nbsp; &nbsp; </span>                  
                                <button title="Save" 
                                        class="btn btn-sm btn-primary "
                                        >Save</button>
                                
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
                                <input type="file" name="images[]" maxlength="20"/>
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
                <div class="col-sm-12">
                    <button type="button" class="btn btn-sm btn-primary"> 
                        Update Images
                    </button>
                    <span> &nbsp;&nbsp;&nbsp;&nbsp; (<-- Please click on "Update Images" after adding/updating images) </span>
                </div>                
            </div>

            <div id="videos" class="" v-show="pagetype=='videos'">
                <div class="row">
                    <div class="col-md-2 form-group">
                            <p>
                                <span><b>Upload Pet Video(s)</b></span> <br>
                                <span>
                                        (Please click on the below icon to select file's)
                                </span>
                            </p>
                    
                            <div>
                                <i class="fas fa-video"></i><i class="fa fa-upload" aria-hidden="true"></i>
                                
                            </div>
                    </div>
                    <div class="col-md-10">

                        <h5>Pet Video(s)</h5>
                            <hr>
                            <button class="btn btn-primary">Save Changes</button>
                            <button class="btn btn-secondary">Cancel</button>
                        
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
import {createusers}  from '../../api';
export default {
name: 'AddPet',
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
         activeclass: 'show'
    }
  },
 methods: {
        async create(e){

  
        },
        changetab(tab){
            
                this.pagetype = tab;
                this.activeclass = "show"

        }
 }
}
</script>

<style scoped>

</style>
