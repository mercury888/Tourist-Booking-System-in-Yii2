 <!-- Horizontal Form -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Date Pricing</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_dp" data-toggle="tab">List</a></li>
                        <li><a href="#tab_dpf" data-toggle="tab">Form</a></li>
                        
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tab_dp">
                            <div class="form-group row">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Day</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Cost</th>
                                        </tr>
                                      
                                        <!-- <tr>
                                        <td colspan="2">
                                            <a href="javascript:void(0)" v-on:click="saveFormData('save_group_pricing')" class="pull-right btn btn-primary">Save</a>
                                        </td>
                                        </tr> -->
                                    <tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_dpf">
                            <div class="row">
                                <div class="form-group col-md-6">
                                        <label for="min">Days No.</label>
                                        <input type="text" v-model="date_pricing_form.days_no"  placeholder="days_no" class="form-control" />
                                </div>
                                <div class="form-group  col-md-6">
                                        <label for="price">Cost</label>
                                        <input type="number" v-model="date_pricing_form.cost"  placeholder="cost"  class="form-control" />
                                </div>
                                <div class="form-group col-md-12" >
                                        <label for="max">Start Date</label>
                                        <input type="text" v-model="date_pricing_form.start_date"  placeholder="start_date"  class="form-control" />
                                </div>
                                <div class="form-group col-md-12">
                                        <label for="price">End Date</label>
                                        <input type="text" v-model="date_pricing_form.end_date"  placeholder="end_date"  class="form-control" />
                                </div>
                              
                                    <!-- <input type="text" v-model="itinerary_form.itinerary_id"  placeholder="itinerary_id" class="form-control" /> -->
                                    <div class="form-group col-md-12">
                                        <input type="button" v-on:click="saveDatePrice()" class="btn btn-default" value="Save" />
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
          </div>
          <!-- /.box -->