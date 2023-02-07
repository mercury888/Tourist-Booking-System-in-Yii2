
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Inclusion Detail</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_ic" data-toggle="tab">List</a></li>
                            <li><a href="#tab_icu" data-toggle="tab">New/Update</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_ic">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Heading</th>
                                            <th>Text 1</th>
                                            <th>Text 2</th>
                                            <th>Text 3</th>
                                            <th>Text 4</th>
                                            <th>Text 5</th>
                                            <th>Text 6</th>
                                        </tr>
                                        <tr v-for="(iitem,index) of inclusion">
                                                <td v-on:click="selectInclusion(iitem)"><a href="javascript:void(0)" v-on:click="deleteInclusion(index)">X</a> {{iitem.heading}}</td>
                                                <td>{{iitem.item.txt1}}</td>
                                                <td>{{iitem.item.txt2}}</td>
                                                <td>{{iitem.item.txt3}}</td>
                                                <td>{{iitem.item.txt4}}</td>
                                                <td>{{iitem.item.txt5}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="7">
                                                <a href="javascript:void(0)" v-on:click="saveFormData('save_inclusion_detail')" class="btn btn-primary pull-right">Save</a>
                                            </td>
                                        </tr>
                                    <tbody>
                                </table>
                            </div>
                        <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_icu">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="heading">Heading</label>
                                        <input type="text" v-model="inclusion_form.heading"  placeholder="heading" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text1"> Text1</label>
                                        <textarea v-model="inclusion_form.item.txt1" placeholder="text 1" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text1"> Text2</label>
                                        <textarea v-model="inclusion_form.item.txt2" placeholder="text 2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text1"> Text3</label>
                                        <textarea v-model="inclusion_form.item.txt3" placeholder="text 3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text1"> Text4</label>
                                        <textarea v-model="inclusion_form.item.txt4" placeholder="text 4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text1"> Text5</label>
                                        <textarea v-model="inclusion_form.item.txt5" placeholder="text 5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="button" v-on:click="saveInclusion()" class="btn btn-default" value="Add Inclusion" />
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