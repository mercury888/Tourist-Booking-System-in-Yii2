
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Exclusion Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                        <div class="col-md-12">
                        <!-- Custom Tabs (Pulled to the right) -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_ec" data-toggle="tab">List</a></li>
                                <li><a href="#tab_ecu" data-toggle="tab">New/Update</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_ec">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Heading</th>
                                                <th>Text1</th>
                                                <th>Text2</th>
                                                <th>Text3</th>
                                                <th>Text4</th>
                                                <th>Text5</th>
                                            </tr>
                                            <tr v-for="(eitem,index) of exclusion">
                                                    <td v-on:click="selectExclusion(eitem)"><a href="javascript:void(0)" v-on:click="deleteExclusion(index)">X</a> {{eitem.heading}}</td>
                                                    <td>{{eitem.item.txt1}}</td>
                                                    <td>{{eitem.item.txt2}}</td>
                                                    <td>{{eitem.item.txt3}}</td>
                                                    <td>{{eitem.item.txt4}}</td>
                                                    <td>{{eitem.item.txt5}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <a href="javascript:void(0)" v-on:click="saveFormData('save_exclusion_detail')" class="pull-right btn btn-primary">Save</a>
                                                </td>
                                            </tr>
                                        <tbody>
                                    </table>
                                </div>
                            <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_ecu">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="heading">Heading</label>
                                            <input type="text" v-model="exclusion_form.heading"  placeholder="heading" class="form-control" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="heading">text 1</label>
                                            <input type="text" v-model="exclusion_form.txt1"  placeholder="text 1" class="form-control" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="heading">text 2</label>
                                            <input type="text" v-model="exclusion_form.txt2"  placeholder="text 2" class="form-control" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="heading">text 3</label>
                                            <input type="text" v-model="exclusion_form.txt3"  placeholder="text 3" class="form-control" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="heading">text 4</label>
                                            <input type="text" v-model="exclusion_form.txt4"  placeholder="text 4" class="form-control" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="heading">text 5</label>
                                            <input type="text" v-model="exclusion_form.txt5"  placeholder="text 5" class="form-control" />
                                        </div>

                                        <div class="form-group col-md-4">
                                                <input type="button" v-on:click="saveExclusion('save_exclusion_detail')" class="btn btn-default" value="Save Exclusion" />
                                        
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