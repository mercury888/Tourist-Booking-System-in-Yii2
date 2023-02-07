<div style="min-height: 955.8px;">
    <!-- Content Header (Page header) -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                {{error}}
                <div  v-bind:class="[error && error.name ? 'has-error' : '', 'form-group']">
                  <label for="exampleInputEmail1">Name*</label>
                  <input type="text" class="form-control" v-model="form.name" v-on:change="checkErrorMessage()" placeholder="Enter Package Name">
                  <span v-if="error && error.name" class="help-block">{{error.name[0]}}</span>
                </div>
                <div  v-bind:class="[error && error.detail_form  && error.detail_form[0].title ? 'has-error' : '', 'form-group']">
                  <label for="exampleInputEmail1">Title*</label>
                  <input type="text" class="form-control" v-on:change="checkErrorMessage()" v-model="form.detail_form.title" placeholder="Enter Package Title">
                  <span v-if="error && error.detail_form && error.detail_form[0].title" class="help-block">{{error.detail_form[0].title[0]}}</span>

                  <!-- <span v-if="error1 && error1.title" class="help-block">{{error1.name[0]}}</span> -->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div v-bind:class="[error && error.destination_id ? 'has-error' : '', 'form-group']" >
                    <label for="exampleInputPassword1">Destination</label>
                    <select v-model="form.destination_id"  class="form-control" v-on:change="loadRegioinActivity($event)">
                      <option v-for="item in destinationList" :value="item.id">{{item.name}}</option>
                    </select>
                    <span v-if="error && error.destination_id" class="help-block">{{error.destination_id[0]}}</span>
                  <!--  <input type="text" class="form-control" v-model="form.destination_id" placeholder="Destination"> -->
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div v-bind:class="[error && error.region_id ? 'has-error' : '', 'form-group']">
                    <label for="exampleInputPassword1">Region</label>
                    <select v-model="form.region_id"  v-on:change="checkErrorMessage()"  class="form-control">
                      <option v-for="item in regionList" :value="item.id">{{item.name}}</option>
                    </select>
                    <span v-if="error && error.region_id" class="help-block">{{error.region_id[0]}}</span>
                    <!-- <input type="text" class="form-control" v-model="form.region_id" placeholder="Region"> -->
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div v-bind:class="[error && error.activity_id ? 'has-error' : '', 'form-group']">
                      <label for="exampleInputPassword1">Activity</label>
                      <select v-model="form.activity_id"  v-on:change="checkErrorMessage()"  class="form-control">
                        <option v-for="item in activityList" :value="item.id">{{item.name}}</option>
                      </select>
                      <span v-if="error && error.activity_id" class="help-block">{{error.activity_id[0]}}</span>
                      <!-- <input type="text" class="form-control" v-model="form.activity_id" placeholder="Activity"> -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div v-bind:class="[error && error.duration ? 'has-error' : '', 'form-group']">
                        <label for="exampleInputPassword1">Duration</label>
                        <input type="number" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.duration" placeholder="Duration">
                        <span v-if="error && error.duration" class="help-block">{{error.duration[0]}}</span>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div v-bind:class="[error && error.detail_form && error.detail_form[0].group_size ? 'has-error' : '', 'form-group']">
                        <label for="exampleInputPassword1">Group Size</label>
                        <input type="number" class="form-control" v-on:change="checkErrorMessage()"  v-model="form.detail_form.group_size" placeholder="Group Size">
                        <span v-if="error && error.detail_form && error.detail_form[0].group_size" class="help-block">{{error.detail_form[0].group_size[0]}}</span>
                      </div>
                  </div>
                </div>
               
               
               
                <div class="row">
                  
                  <div class="col-md-4">
                    <div v-bind:class="[error && error.grade ? 'has-error' : '', 'form-group']">
                      <label for="exampleInputPassword1">Grade</label>
                      <select v-model="form.grade"  v-on:change="checkErrorMessage()"  class="form-control">
                        <option v-for="item in gradeLookupList" :value="item.id">{{item.name}}</option>
                      </select>
                      <span v-if="error && error.grade" class="help-block">{{error.grade[0]}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div v-bind:class="[error && error.trip_style ? 'has-error' : '', 'form-group']">
                      <label for="exampleInputPassword1">Trip Style Text</label>
                      <input type="text" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.trip_style" placeholder="Trip Style Text">
                       <span v-if="error && error.trip_style" class="help-block">{{error.trip_style[0]}}</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div v-bind:class="[error && error.trip_defficulty ? 'has-error' : '', 'form-group']">
                      <label for="exampleInputPassword1">Trip Difficulty Text</label>
                      <input type="text" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.trip_defficulty" placeholder="Trip Difficulty Text">
                      <span v-if="error && error.trip_defficulty" class="help-block">{{error.trip_defficulty[0]}}</span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div v-bind:class="[error && error.tool_tip ? 'has-error' : '', 'form-group']">
                      <label for="exampleInputPassword1">ToolTip Text</label>
                      <input type="text" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.tool_tip" placeholder="ToolTip Text">
                      <span v-if="error && error.tool_tip" class="help-block">{{error.tool_tip[0]}}</span>
                    </div>
                  </div>


                 

                </div>

                <div class="row">
                        <div v-bind:class="[error && error.price_3 ? 'has-error' : '', 'form-group col-md-6']">
                        <label for="exampleInputEmail1">3 Star Price*</label>
                        <input type="number" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.price_3" placeholder="Enter 3 Star Price">
                        <span v-if="error && error.price_3" class="help-block">{{error.price_3[0]}}</span>
                        </div>
                        <div  v-bind:class="[error && error.supplement_3 ? 'has-error' : '', 'form-group col-md-6']">
                        <label for="exampleInputEmail1">3 Star Supplement*</label>
                        <input type="number" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.supplement_3" placeholder="Enter 3 Star Price">
                        <span v-if="error && error.supplement_3" class="help-block">{{error.supplement_3[0]}}</span>
                        </div>
                    
                        <div  v-bind:class="[error && error.price_5 ? 'has-error' : '', 'form-group col-md-6']">
                        <label for="exampleInputPassword1">5 Star Price*</label>
                        <input type="number" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.price_5" placeholder="Enter 3 Star Price">
                        <span v-if="error && error.price_5" class="help-block">{{error.price_5[0]}}</span>
                        </div>
                        <div  v-bind:class="[error && error.supplement_5 ? 'has-error' : '', 'form-group col-md-6']">
                        <label for="exampleInputPassword1">5 Star Supplement*</label>
                        <input type="number" class="form-control"  v-on:change="checkErrorMessage()"  v-model="form.supplement_5" placeholder="Enter 3 Star Price">
                        <span v-if="error && error.supplement_5" class="help-block">{{error.supplement_5[0]}}</span>
                        </div>
                        

                        <div  v-bind:class="[error && error.name ? 'has-error' : '', 'form-group col-md-6']">
                        <label for="exampleInputFile">Image</label>
                        <input type="file" @change="prePareFile($event)" id="main-package-image">

                        <p class="help-block">Main Package Image.</p>
                      </div>

                      <div  v-bind:class="[error && error.visible ? 'has-error' : '', 'form-group col-md-6']">
                        <label>Status</label>
                        <select v-model="form.visible"  v-on:change="checkErrorMessage()"  class="form-control">
                              <option v-for="item in visibleLookup" :value="item.value">{{item.name}}</option>
                        </select>
                        <span v-if="error && error.visible" class="help-block">{{error.visible[0]}}</span>
                      </div>
                    </div>


              

                <div  v-bind:class="[error && error.detail_form &&  error.detail_form[0].description ? 'has-error' : '', 'form-group']">
                  <label for="exampleInputFile">Detail</label>
                  <quill-editor v-model="form.detail_form.description"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="form.detail_form.description"
                                                ref="quillEditorA"
                                                v-on:change="checkErrorMessage()" 
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                    <!-- <textarea id="editor1" v-model="form.detail_form.description" rows="10" cols="80" style="visibility: hidden; display: none;">                                            This is my textarea to be replaced with CKEditor. -->
                    </textarea>
                  <span v-if="error && error.detail_form && error.detail_form[0].description" class="help-block">{{error.detail_form[0].description[0]}}</span>
                    <!-- <span v-if="error && error.supplement_5" class="help-block">{{error.supplement_5[0]}}</span> -->
                </div>


                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button"  v-on:click="saveData('basic_detail')" class="btn btn-primary">Save Basic Detail</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">SEO</h3>
            </div>
            <div class="box-body">
            <div class="form-group">
                  <label for="exampleInputEmail1">Meta Title*</label>
                  <input type="text" class="form-control" v-model="form.detail_form.meta_title" placeholder="Meta Title">
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Meta Description*</label>
                  <!-- <input type="text" class="form-control" v-model="form.detail_form.meta_desc" placeholder="Meta Description"> -->
                  <textarea  cols="30" class="form-control"  v-model="form.detail_form.meta_desc" placeholder="Meta Description"  rows="10"></textarea>
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Meta Keywords*</label>
                  <input type="text" class="form-control" v-model="form.detail_form.meta_key" placeholder="Meta Keywords">
            </div>
            <div class="form-group">
              <button type="button"  v-on:click="saveData('meta')" class="btn btn-primary">Save Meta Detail</button>
            </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


         

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
         

          <?=$this->render("//package/include/trip-facts");?>
          <?=$this->render("//package/include/inclusion");?>
          <?=$this->render("//package/include/exclusion");?>
          <?=$this->render("//package/include/vital-info");?>


        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
  </div>
