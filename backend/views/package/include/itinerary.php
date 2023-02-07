
<div style="min-height: 955.8px;">
    <!-- Content Header (Page header) -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Itineary List</h3>
            </div>
            <div class="box-body">
            {{itinerary_data}}
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Title</th>
                        
                    </tr>
                       
                 
                    
                    <tbody>
                </table>
            </div>
          </div>
          <!-- /.box -->



         

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Itineary Form</h3>
                </div>
                <div class="box-body">
                {{itinerary_form}}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Day No.*</label>
                            <input type="text" v-model="itinerary_form.day_no"  placeholder="day_no" class="form-control" />
                        </div>
                        <div class="form-group col-md-12 ">
                            <label>Short Description*</label>
                            <input type="text" v-model="itinerary_form.short_desc"  placeholder="short_desc"  class="form-control" />
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Full Description*</label>
                            <quill-editor v-model="itinerary_form.full_desc"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="itinerary_form.full_desc"
                                                ref="quillEditorA"
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                            <!-- <textarea v-model="itinerary_form.full_desc" class="form-control" placeholder="Full Description" cols="30" rows="6"></textarea> -->
                        </div>
                        <a href="javascript:void(0)" v-on:click="addItemIconRow()" class="pull-right btn">Add Icon</a>
                        <div class="row col-md-12" v-for="ite_con of itinerary_form.ite_icon">
                            <div class="form-group  col-md-4">
                                <label>Icon*</label>
                                <input type="text" v-model="ite_con.icon"  placeholder="icon"  class="form-control" />
                            </div>
                            <div class="form-group  col-md-4">
                                <label>Icon Color*</label>
                                <input type="text" v-model="ite_con.icon_color"  placeholder="icon color"  class="form-control my-colorpicker2" />
                            </div>
                            <div class="form-group  col-md-4">
                                <label>Icon Text*</label>
                                <input type="text" v-model="ite_con.icon_text"  placeholder="icon text"  class="form-control" />
                            </div>

                        </div>

                        
                        <div class="form-group  col-md-4">
                            <input type="button" v-on:click="saveItitenary()" class="btn btn-default" value="Add trip facts" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
  </div>