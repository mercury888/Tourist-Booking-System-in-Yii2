 <!-- Horizontal Form -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Group Pricing</h3>
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
                        <li class="active"><a href="#tab_gp" data-toggle="tab">List</a></li>
                        <li><a href="#tab_gpf" data-toggle="tab">Form</a></li>
                        
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tab_gp">
                            <div class="form-group row">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Group</th>
                                            <th>Price</th>
                                        </tr>
                                        <tr v-for="(gitem,index) of group_pricing">
                                                <td v-on:click="selectGPItem(gitem)"><a href="javascript:void(0)" v-on:click="deleteGPData(index)">X</a> {{gitem.min}} - {{gitem.max}}</td>
                                                <td>{{gitem.price}}</td>
                                        </tr>
                                        <tr>
                                        <!-- <td colspan="2">
                                            <a href="javascript:void(0)" v-on:click="saveFormData('save_group_pricing')" class="pull-right btn btn-primary">Save</a>
                                        </td> -->
                                        </tr>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_gpf">
                            <div class="row">
                                <div class="form-group col-md-4">
                                        <label for="min">Min</label>
                                        <input type="number" v-model="group_pricing_form.min"  placeholder="min" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="max">Max</label>
                                        <input type="number" v-model="group_pricing_form.max"  placeholder="max"  class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="price">Price</label>
                                        <input type="number" v-model="group_pricing_form.price"  placeholder="price"  class="form-control" />
                                </div>
                                    <!-- <input type="text" v-model="itinerary_form.itinerary_id"  placeholder="itinerary_id" class="form-control" /> -->
                                    <div class="form-group col-md-4">
                                        <input type="button" v-on:click="saveGroupPricing()" class="btn btn-default" value="Add Group Pricing" />
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