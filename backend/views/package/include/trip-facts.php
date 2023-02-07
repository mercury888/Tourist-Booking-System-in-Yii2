 <!-- Horizontal Form -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Trip Facts</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1-1" data-toggle="tab">List</a></li>
                        <li><a href="#tab_2-2" data-toggle="tab">Form</a></li>
                        
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tab_1-1">
                            <div class="form-group col-md-12">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Heading</th>
                                        <th>Icon</th>
                                        <th>Color</th>
                                        <th>Text1</th>
                                        <th>Text2</th>
                                        <th>Text3</td>
                                    </tr>
                                        <tr v-for="(tfitem,index) of trip_facts">
                                                <td v-on:click="selectTripFact(tfitem)"><a href="javascript:void(0)" v-on:click="deleteFacts(index)">X</a> {{tfitem.heading}}</td>
                                                <td>{{tfitem.icon}}</td>
                                                <td>{{tfitem.color}}</td>
                                                <td>{{tfitem.text.txt1}}</td>
                                                <td>{{tfitem.text.txt2}}</td>
                                                <td>{{tfitem.text.txt3}}</td>
                                            
                                        </tr>
                                        <!-- <tr>
                                            <td colspan="6">
                                                <a href="javascript:void(0)" v-on:click="saveFormData('save_trip_fact')" class="btn btn-primary pull-right"> Save</a>
                                            </td>
                                        </tr> -->
                                    
                                    <tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2-2">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Heading</label>
                                    <input type="text" v-model="trip_facts_form.heading"  placeholder="heading" class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Icon</label>
                                    <input type="text" v-model="trip_facts_form.icon"  placeholder="icon"  class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Color</label>
                                    <input type="text" v-model="trip_facts_form.color"  placeholder="color"  class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Text 1</label>
                                    <input type="text" v-model="trip_facts_form.text.txt1" placeholder="text 1" class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Text 2</label>
                                    <input type="text" v-model="trip_facts_form.text.txt2"  placeholder="text 2" class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Text 3</label>
                                    <input type="text" v-model="trip_facts_form.text.txt3"  placeholder="text 3" class="form-control" />
                                </div>
                                <div class="form-group  col-md-4">
                                    <input type="button" v-on:click="saveTripFact()" class="btn btn-default" value="Add trip facts" />
                                </div>

                            </div>
                        </div>
                       
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
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                <!-- <a href="javascript:void(0)" v-on:click="saveFormData('save_trip_fact')" class="btn btn-primary pull-right"> Save Trip Facts</a> -->
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->