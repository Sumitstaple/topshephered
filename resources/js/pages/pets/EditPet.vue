<template>
<div>
<div class="pageheader">
    <h2>Add Pet</h2>
</div>
<div class="pagecontent ">

    <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active"  role="presentation">
                <a href="javascript:void(0);" class="nav-link" :class="activeclass" v-on:click="changetab('petinfo')">
                    Pet Details
                </a>
            </li>
            <li class="nav-item" role="presentation">
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
                                  
                                    <b-button v-b-modal.modal-1 class="btn btn-primary btn-sm" @click="showmodel">Add</b-button>
                                     <b-modal id="modal-1" title="Add Agency">
                                        
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
                                        <tr v-for="(item, index) in externalAgency" :key="">
                                            <td>{{item.agency}}</td>
                                            <td>{{item.id}}</td>
                                             <td class="text-right">
                                                <i class="fa fa-edit" v-b-modal.updateexternal v-on:click="editexternal(item.agency,item.id,index)"></i>
                                                <i class="fa fa-trash" v-on:click="deleteexternal(index)"></i>                                       
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                 <b-modal id="updateexternal" title="Update Agency">
                                        
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

                                        <b-button class="mt-3" blockblock @click="updateexternal">Update</b-button>
                                      </b-modal> 

                                <div class="saveexternal">
                                    <button class="mt-3"  @click="saveexternal">Save</button>
                                </div>
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
                                     <b-button v-b-modal.modal-2 class="btn btn-primary btn-sm" @click="showmodel2">Add</b-button>
                                     <b-modal id="modal-2" title="Add Agency">
                                        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Certificate*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="file" name="file" v-on:change="uploadcertificate($event)"/>
                                        </div>
                                        </div>
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
                                            <label class="required-mark">Date*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="date" v-model="form.certificationAgency.date"/>
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
                                           <tr v-for="(item, index) in certificationAgency" :key="">
                                            <td><img :src="'http://127.0.0.1:8000/certificate/'+item.certificate" width="50px" height="40px" /></td>
                                            <td>{{item.agency}}</td>
                                            <td>{{item.date}}</td>
                                             <td class="text-right">
                                                <i class="fa fa-edit" v-b-modal.updatecertificate v-on:click="editcertificate(item.certificate,item.agency,item.date,index)"></i>
                                                <i class="fa fa-trash" v-on:click="deletecertificate(index)"></i>                                       
                                            </td>
                                        </tr>
                                           
                                    </tbody>
                                </table>

                                <b-modal id="updatecertificate" title="Add Agency">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <img :src="'http://127.0.0.1:8000/certificate/'+this.form.certificationAgency.certificate" width="50px" height="40px" />
                                            </div>
                                        </div>        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                            <label class="required-mark">Certificate*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="file" name="file" v-on:change="uploadcertificate($event)"/>
                                        </div>
                                        </div>
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
                                            <label class="required-mark">Date*</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input class="form-control input-sm" type="date" v-model="form.certificationAgency.date"/>
                                            </div>
                                        </div>

                                        <b-button class="mt-3" blockblock @click="updatecertificate">Save</b-button>
                                      </b-modal>  
                                      <div class="saveexternal">
                                    <button class="mt-3"  @click="savecertificate">Save</button>
                                </div>
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
                                        <select class="input-sm form-control" v-model="checkparent" v-on:change="checkparentfunction($event)">
                                            <option value="" disabled selected >Select Parent</option>
                                            <option value="father">Father</option>
                                            <option value="mother">Mother</option>
                                        </select>
                                        <span class="input-group-addon input-sm link" 
                                                id="basic-addon3" v-on:click="showparent">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>   

                        <b-modal id="fathermodal" title="Pet List">
                                        
                                 <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Name</th>
                                            <th>Breed</th>
                                            <!-- <th>Breed Quality</th>
                                            <th>Breed purpose</th>
                                            <th>#Images</th>
                                            <th>#Videos</th>
                                            <th>#External Agency</th>
                                            <th>#Certification Agency</th>-->
                                            <th>Set Parent</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in fatherlisting" :key="">                                                                                        
                                            <td>{{item.name}}</td>
                                            <td>{{item.breed}}</td>
                                            <!-- <td></td> -->
                                            <!-- <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>  -->  
                                            <td><input type="radio" name="father" v-on:change="savefather(item.id)" :checked="item.id == form.father"></td>                                                                             
                                        </tr>
                                    </tbody>
                                </table>

                            <b-button class="mt-3" blockblock @click="hidefather">Save</b-button>
                          </b-modal>   


                          <b-modal id="mothermodal" title="Pet List">
                                        
                                 <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Name</th>
                                            <th>Breed</th>
                                            <!-- <th>Breed Quality</th>
                                            <th>Breed purpose</th>
                                            <th>#Images</th>
                                            <th>#Videos</th>
                                            <th>#External Agency</th>
                                            <th>#Certification Agency</th>-->
                                            <th>Set Parent</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in motherlisting" :key="">                                                                                        
                                            <td>{{item.name}}</td>
                                            <td>{{item.breed}}</td>
                                            <!-- <td></td> -->
                                            <!-- <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>  -->  
                                            <td><input type="radio" name="mother" v-on:change="savemother(item.id)" :checked="item.id == form.mother"></td>                                                                             
                                        </tr>
                                    </tbody>
                                </table>

                            <b-button class="mt-3" blockblock @click="hidemother">Save</b-button>
                          </b-modal> 



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
                                        <tr v-for="(item, index) in fatherobject" :key="">                                                                                      
                                            <td>{{item.name}}</td>
                                            <td>{{item.breed}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedPurpose}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>                                                                                
                                        </tr>

                                        <tr v-for="(item, index) in motherobject" :key="">                                                                                      
                                            <td>{{item.name}}</td>
                                            <td>{{item.breed}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedPurpose}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>
                                            <td>{{item.breedQuality}}</td>                                                                                
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
                    <ul class="pet-images col-md-4">
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
                    <div class="imagelist row pb-4">

                        <div class="col-md-3" v-for="(item, index) in form.images" :key="">
                                <i class="fa fa-trash" v-on:click="deleteimage(index)"></i>
                                <img :src="'http://127.0.0.1:8000/petimages/'+item" width="100%" height="100%"  />
                                
    
                           </div>
                        <div class="col-md-12 mt-5">
                            <button type="button"  v-on:click="saveimages">Save</button>  
                        </div>
                    </div>    
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
                    <button type="button" v-on:click="savevideos">Save</button> 
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
                                <select class="input-sm form-control" v-model="form.priceType" v-on:change="showpricefield">
                                    <option value="" disabled selected>Select Price Type</option>
                                    <option  value="tbd">TBD</option>
                                    <option  value="fixed">Fixed Price</option>
                                    <option  value="range">Variable Price</option>
                                </select>
                            </div> 
                            <div class="col-md-3 form-group form-group-sm" v-show="showprice == 'range'">
                                <label class="required-mark">From Price*</label>
                                <br>
                                <input class="form-control" type="number" min="1"placeholder="Please Add price" v-model="form.fromPrice"/>
                            </div>
                            <div class="col-md-3 form-group form-group-sm" v-show="showprice == 'range'">
                                <label class="required-mark">To Price*</label>
                                <br>
                                <input class="form-control" type="number" min="1"placeholder="Please Add price" v-model="form.toPrice"/>
                            </div>
                            <div class="col-md-3 form-group form-group-sm" v-show="showprice == 'fixed'">
                                <label class="required-mark">Fixed Price</label>
                                <br>
                                <input class="form-control" type="number" min="1"placeholder="Please Add price" v-model="form.fixedPrice"/>
                            </div>
        
                            <div class="col-md-8 form-group form-group-sm" v-show="showprice == 'tbd'">
                                <label class="required-mark">Custom Message*</label>
                                <br>
                                <input class="form-control" type="text" placeholder="Please Add price" v-model="form.notPricedText"/>
                            </div>
                            <div class="col-sm-3 form-group form-group-sm" v-show="showprice == 'range' || showprice == 'fixed'">
                                <label>Price Units</label>
                                <br>
                                <select class="input-sm form-control" v-model="form.priceUnits">
                                    <option value="" disabled selected>Price Units</option>
                                    <option  value="$">USD</option>
                                </select>
                            </div>
                            <!--  2 ROW ENDS -->
                        </div>
                    </div>
                    <div class="col-sm-12 ml-3">
                        <button type="button" class="btn btn-sm btn-primary" v-on:click="saveprice">
                                Save
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
import {createpets,getfather,savefather,getpetbyid,getmother,savemotherid,savepricepet}  from '../../api';
import VueUploadMultipleImage from 'vue-upload-multiple-image'
import axios from 'axios';

var apiurl = 'http://127.0.0.1:8000/api/';
export default {
name: 'EditPet',
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
                externalAgency:[{
                    id:'',
                    agency:''
                }],
                certificationAgency:[{
                    certificate:'',
                    date:'',
                    agency:''
                }],
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
         pagetype:'externalagency',
         activeclass: 'show',
         images:[],
         videos:["609170a816cf0.mp4","609170acbf52d.mp4"],
         buttondisable:'hide',
         externalAgency:[],
         certificationAgency:[],
         currentindex:'',
         checkparent:'',
         fatherlisting:[],
         motherlisting:[],
         fatherobject:[],
         motherobject:[],
         showprice:'',
    }
  },
  async mounted(){
    const id = this.$route.params && this.$route.params.id;

   this.getFatherList();
   this.getMotherList();
   this.getEditPet(id);
   this.getFatherdata(this.form.father);
  },
 methods: {
        async getEditPet(id) {

         const {data} = await getpetbyid(id);
         
            this.form.name = data.pets[0].name;
            this.form.breed = data.pets[0].breed;
            this.form.breedPurpose = data.pets[0].breedPurpose;
            this.form.breedQuality = data.pets[0].breedQuality;
            this.form.breedType = data.pets[0].breedType;
            this.form.description = data.pets[0].description;
            this.form.gender = data.pets[0].gender;
            this.form.genderNomenclature = data.pets[0].genderNomenclature;
            this.form.title = data.pets[0].title;
            this.form.status = data.pets[0].status;
            this.form.markingsOrColor = data.pets[0].markingsOrColor;
            this.form.dateOfBirth = data.pets[0].dateOfBirth;
            this.form.priceType = data.pets[0].priceType;
            this.form.fixedPrice = data.pets[0].fixedPrice;
            this.form.priceUnits = data.pets[0].priceUnits;
            this.form.fromPrice = data.pets[0].fromPrice;
            this.form.toPrice = data.pets[0].toPrice;
            this.showprice = data.pets[0].priceType;
            this.form.notPricedText = data.pets[0].notPricedText;
            this.form.videos = JSON.parse(data.pets[0].videos);
            this.form.images = JSON.parse(data.pets[0].images);
            this.externalAgency = JSON.parse(data.pets[0].externalAgency);
            this.certificationAgency = JSON.parse(data.pets[0].certificationAgency);
            this.form.father = data.pets[0].father;
            this.form.mother = data.pets[0].mother;
            
            
            axios.get(apiurl+'pets/petinfo/getfather/'+this.form.father, {

              })
              .then(response => {
                  this.fatherobject = response.data.pets;
              })

             axios.get(apiurl+'pets/petinfo/getfather/'+this.form.mother, {

              })
              .then(response => {
                  this.motherobject = response.data.pets;
              })  
        },
         async getFatherdata(id) {

         
        },
        async getFatherList(id) {

         const {data} = await getfather();
         
            this.fatherlisting = data.pets;
        },
         async getMotherList(id) {

         const {data} = await getmother();
        
            this.motherlisting = data.pets;
        },
        async create(e){
            console.log(this.form);

            const { data } = await createpets(this.form);
           
        },
        changetab(tab){
            
                this.pagetype = tab;
                this.activeclass = "show"

        },
        uploadImageSuccess(formData, index, fileList) {
       
        // const url = window.URL.createObjectURL(fileList[index].path);
        //  console.log(url);
        //  console.log(fileList[index].path);
        // return false;    
        const petid = this.$route.params && this.$route.params.id;

        const data = {
            id:petid,
            images:fileList[index].path
        }

        axios.post(apiurl+'pets/petinfo/uploadimage', data, {
        header:{
          "Accept": "application/json",
         'content-type': 'multipart/form-data'
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.form.images = this.form.images || [];
            this.form.images.push(response.data.image);
        }
        else{
            //this.$alert('Error!');
        }
      })
     
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
    showmodel(){
        
        this.form.externalAgency = {
            agency:'',
            id:''
        }
    },
     showmodel2(){
        
        this.form.certificationAgency = {
            certificate:'',
            agency:'',
            date:''
        }
    },
    hideModal() {

        this.externalAgency = this.externalAgency || [];

        this.externalAgency.push({agency:this.form.externalAgency.agency,id:this.form.externalAgency.id});

        this.form.externalAgency =  this.externalAgency;

        this.$root.$emit('bv::hide::modal', 'modal-1', '#btnShow')
      },
    async saveexternal(){
        console.log(this.form.externalAgency);
        const id = this.$route.params && this.$route.params.id;
        const data = {id:id,agencies:this.form.externalAgency}

        await axios.post( apiurl+'pets/saveexternal',
          data,
          {
            headers: {
                 "Accept": "application/json",
            }
          } 
        ).then((response) => {
            console.log(response);
          if(response.data.status == "success"){
            // alert();
            this.$alert(response.data.message);
          }
        })

      },

      deleteexternal(index){
        // alert(index);
        this.$confirm("Are you sure?").then((text) => {
            if(text == true){
                this.externalAgency.splice(index, 1);
                this.form.externalAgency = this.externalAgency;
            }
            });

      },
      editexternal(agency,id,index){
        
        this.currentindex = index;
        this.form.externalAgency = {agency:agency,id:id};
      },
      updateexternal(){
        this.externalAgency[this.currentindex] = {agency:this.form.externalAgency.agency,id:this.form.externalAgency.id};
        this.form.externalAgency = this.externalAgency;
        this.$root.$emit('bv::hide::modal', 'updateexternal', '#btnShow')
      },
      hideModal2() {
        this.certificationAgency = this.certificationAgency || [];

        this.certificationAgency.push({certificate:this.form.certificationAgency.certificate,agency:this.form.certificationAgency.agency,date:this.form.certificationAgency.date});

        this.form.certificationAgency =  this.certificationAgency;

        console.log(this.certificationAgency);

        this.$root.$emit('bv::hide::modal', 'modal-2', '#btnShow')
      },



    async savecertificate(){
        const id = this.$route.params && this.$route.params.id;
        const data = {id:id,agencies:this.certificationAgency}

        await axios.post( apiurl+'pets/savecertification',
          data,
          {
            headers: {
                 "Accept": "application/json",
            }
          } 
        ).then((response) => {
            console.log(response);
          if(response.data.status == "success"){
            // alert();
            this.$alert(response.data.message);
          }
        })

      },

      deletecertificate(index){
         this.$confirm("Are you sure?").then((text) => {
            if(text == true){
                this.certificationAgency.splice(index, 1);
                this.form.certificationAgency = this.certificationAgency;
            }
            });
         

      },
      editcertificate(certificate,agency,date,index){
        
        this.currentindex = index;
        this.form.certificationAgency = {certificate:certificate,agency:agency,date:date};


      },
      updatecertificate(){
        this.certificationAgency[this.currentindex] = {certificate:this.form.certificationAgency.certificate,agency:this.form.certificationAgency.agency,date:this.form.certificationAgency.id};
        this.form.certificationAgency = this.certificationAgency;
        this.$root.$emit('bv::hide::modal', 'updatecertificate', '#btnShow')
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
            this.form.videos = this.form.videos || [];
          this.form.videos.push(response.data.video);

          console.log(this.form.videos);

        })
       
      },
      deletevideo(index){

        this.$confirm("Are you sure?").then((text) => {
            if(text == true){
               this.form.videos.splice(index, 1);
            }
        });

      },
      deleteimage(index){

        this.$confirm("Are you sure?").then((text) => {
            if(text == true){
               this.form.images.splice(index, 1);
            }
        }); 
      },
      onChangeinput(){

        if(this.form.name != "" && this.form.title != "" && this.form.gender != ""){
            this.buttondisable = 'show';
        }
        else{
            this.buttondisable = 'hide';
        }
      },
      checkparentfunction(e){
        this.checkparent = e.target.value;
      },
      showparent(){

            if(this.checkparent == "father"){
                this.$root.$emit('bv::show::modal', 'fathermodal', '#btnShow')
            }
            else if(this.checkparent == "mother"){
                this.$root.$emit('bv::show::modal', 'mothermodal', '#btnShow')
            }
            else{

                this.$fire({
                  title: "",
                  text: "Please seclect a parent",
                  type: "error",
                  timer: 3000
                }).then(r => {
                  console.log(r.value);
                });

            }
            
      },

      async savefather(id){
        const {data} = await getpetbyid(id);
        this.form.father = data.pets[0].id;
        
        this.fatherobject= data.pets;
      },
      hidefather(){

        const petid = this.$route.params && this.$route.params.id;

        const data = {
            id:this.form.father,
            petid:petid
        }

        axios.post(apiurl+'pets/petinfo/savefatherid', data, {
        header:{
          "Accept": "application/json",
         'content-type': 'multipart/form-data'
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Father Saved');
        }
        else{
            this.$alert('Error!');
        }
      })


        this.$root.$emit('bv::hide::modal', 'fathermodal', '#btnShow')
      },
      async savemother(id){
        const {data} = await getpetbyid(id);
        this.form.mother = data.pets[0].id;
        this.motherobject= data.pets;
        
      },
      async hidemother(){
        const petid = this.$route.params && this.$route.params.id;
        const {savem} = await savemotherid(this.form.mother,petid);
        this.$root.$emit('bv::hide::modal', 'mothermodal', '#btnShow')
      },
      showpricefield(){
            this.showprice = this.form.priceType
      },
      async saveprice(e){
        const petid = this.$route.params && this.$route.params.id;

        const data = {
            id:petid,
            priceType:this.form.priceType,
            fixedPrice:this.form.fixedPrice,
            toPrice:this.form.toPrice,
            fromPrice:this.form.fromPrice,
            notPricedText:this.form.notPricedText,
            priceUnits:this.form.priceUnits
        }

        axios.post(apiurl+'pets/petinfo/saveprice', data, {
        header:{
          "Accept": "application/json",
         'content-type': 'multipart/form-data'
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Price Saved');
        }
        else{
            this.$alert('Error!');
        }
      })
      },

     async savevideos(){
        const petid = this.$route.params && this.$route.params.id;

        const data = {
            id:petid,
            videos:this.form.videos
        }

        axios.post(apiurl+'pets/petinfo/savevideos', data, {
        header:{
          "Accept": "application/json",
         'content-type': 'multipart/form-data'
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Videos Saved');
        }
        else{
            this.$alert('Error!');
        }
      })
     }, 

    async saveimages(){
        const petid = this.$route.params && this.$route.params.id;

        const data = {
            id:petid,
            images:this.form.images 
        }

        axios.post(apiurl+'pets/petinfo/saveimages', data, {
        header:{
          "Accept": "application/json",
         'content-type': 'multipart/form-data'
        }
      })
      .then(response => {
        if(response.data.status == "success"){
            this.$alert('Images Saved');
        }
        else{
            this.$alert('Error!');
        }
      })
     },
     async uploadcertificate(e){
        const data = new FormData();
        data.append('video', e.target.files[0]);

        if(e.target.files[0].size <=  1048576){

            await axios.post( apiurl+'pets/petinfo/uploadcertificate',
              data,
              {
                headers: {
                     "Accept": "application/json",
                    'Content-Type': 'multipart/form-data'
                }
              } 
            ).then((response) => {
               this.form.certificationAgency.certificate= response.data.certificate;
              console.log(this.form.certificationAgency);

            })
      }
      else{
        this.$fire({
              title: "Image should be less then 1mb",
              text: "",
              type: "warning",
              timer: 3000
            }).then(r => {
              console.log(r);
            });
      }
    }
    

 }
}
</script>

<style scoped>

</style>