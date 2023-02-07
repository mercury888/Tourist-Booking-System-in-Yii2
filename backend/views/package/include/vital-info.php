<!-- general form elements disabled -->
<div class="box box-warning">
<div class="box-header with-border">
    <h3 class="box-title">Vital Info</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <div class="row">
            <div class="col-md-12">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_vinfo" data-toggle="tab">List</a></li>
                    <li><a href="#tab_vinfof" data-toggle="tab">New/Update</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_vinfo">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <th>Tab Name</th>
                                <!-- <th>Paragpah 1</th> -->
                            </tr>
                                <tr v-for="(vitem,index) of vital_information">
                                        <td v-on:click="selectVitalInformation(vitem)"><a href="javascript:void(0)" v-on:click="deleteVitalInformation(index)">X</a> {{vitem.title}}</td>
                                        <td>{{vitem.tab_name}}</td>
                                        <!-- <td>{{vitem.item.txt1}}</td> -->
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <a href="javascript:void(0)" v-on:click="saveFormData('save_vital_info')" class="pull-right btn btn-primary">Save Vital Information</a>
                                    </td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_vinfof">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" v-model="vital_information_form.title"  placeholder="Title" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tab_name">Tab Name</label>
                                <input type="text" v-model="vital_information_form.tab_name"  placeholder="Tab Name" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="p1">Pargraph 1</label>
                                <quill-editor v-model="vital_information_form.detail"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="vital_information_form.detail"
                                                ref="quillEditorA"
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                                <!-- <input type="text" v-model="vital_information_form.detail"  placeholder="Pargraph 1" class="form-control" /> -->
                            </div>
                            
                            <div class="form-group col-md-12">
                                <input type="button" v-on:click="saveVitalInfo()" class="btn btn-default" value="Save" />
                            </div>
                                    
                        </div>
                    </div>
                <!-- /.tab-pane -->
                
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
<!-- general form elements disabled -->
<div class="box box-warning">
<div class="box-header with-border">
    <h3 class="box-title">Go Private & BeSpoke</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <div class="row">
            <div class="col-md-12">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#go_private" data-toggle="tab">Go Private</a></li>
                    <li><a href="#go_bespoke" data-toggle="tab">Go BeSpoke</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="go_private">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <input type="text" v-model="go_private_form.title"  placeholder="Title" class="form-control" />
                                <!-- <input type="text" v-model="go_private_form.detail"  placeholder="Detail"  class="form-control" /> -->
                            </div>
                            <div class="form-group col-md-12">
                                <label for="detail">Detail</label>
                                <quill-editor v-model="go_private_form.detail"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="go_private_form.detail"
                                                ref="quillEditorA"
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                                <!-- <textarea v-model="go_private_form.detail" placeholder="Detail" class="form-control"></textarea> -->
                            </div>
                            <div class="form-group col-md-12">
                                <label for="detail">Image</label>
                                <input type="file" v-on:change="prePareFile($event)" v-model="go_private_form.image"  placeholder="image"  class="form-control" />
                            </div>
                            <div class="col-md-12"  style="margin-top:5px">
                                <input type="button" v-on:click="savePrivate()" class="btn btn-primary pull-right" value="Save" />
                            </div>
                        </div>
                    </div>
                <!-- /.tab-pane -->
                    <div class="tab-pane" id="go_bespoke">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="title">Title</label>
                                <input type="text" v-model="go_bespoke_form.title"  placeholder="Title" class="form-control" />
                            </div>
                            <div class="col-md-12 form-grooup">
                                <label for="detail">Detail</label>
                                <quill-editor v-model="go_bespoke_form.detail"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="go_bespoke_form.detail"
                                                ref="quillEditorA"
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                             <!-- <input type="text" v-model="go_bespoke_form.detail"  placeholder="Detail"  class="form-control" /> -->
                                <!-- <textarea v-model="go_bespoke_form.detail" placeholder="Detail" class="form-control"></textarea> -->
                            </div>
                            <div class="form-group col-md-12">
                                <label for="detail">Image</label>
                                <input type="file"  v-on:change="prePareFile($event)"  v-model="go_bespoke_form.image"  placeholder="image"  class="form-control" />
                            </div>
                            <div class="col-md-12" style="margin-top:5px">
                                 <input type="button" v-on:click="saveBespoke()" class="btn btn-primary pull-right " value="Save" />
                            </div>
                        </div>
                    </div>
                <!-- /.tab-pane -->
                
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->