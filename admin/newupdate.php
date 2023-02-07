<?php 
$itegnary = "select day_no,short_desc from  tbl_package_itinerary where language_id=1 and package_id=".$model->id;
$result = Yii::app()->db->createCommand($itegnary)->queryAll();;
$result_json = json_encode($result);


$over_view_text = $model->overview_text;
$other_data = json_decode($model->other_data,true);
$alt_title = json_decode($other_data['save_alt_title'],true);
$tripfact = $other_data['save_trip_fact'];
$inclusion = $other_data['save_inclusion_detail'];
$iteneary = $other_data['save_itinerary_extra_info'];
$vital_information = $other_data['save_vital_info'];
$goprivate = $other_data['save_go_private_info'];
$gocustmozie = $other_data['save_bespoke_info'];
$grouppricing = $other_data['save_group_pricing'];
$exclustion = $other_data['save_exclusion_detail'];

// if(empty($over_view_text) || $over_view_text=='undefined'){
//     $over_view_text = $inclusion = json_encode([]);;
// }
if(empty($inclusion) || $inclusion=='undefined'){
    $inclusion = json_encode([]);
}
if(empty($tripfact) || $tripfact=='undefined'){
    $tripfact = json_encode([]);
}
if(empty($iteneary) || $iteneary=='undefined'){
    $iteneary = json_encode([]);
}
if(empty($vital_information) || $vital_information=='undefined'){
    $vital_information = json_encode([]);
}
// if(empty($goprivate) || $goprivate=='undefined'){
//     $goprivate = json_encode([]);
// }
// if(empty($gocustmozie) || $gocustmozie=='undefined'){
//     $gocustmozie = json_encode([]);
// }
if(empty($grouppricing) || $grouppricing=='undefined'){
    $grouppricing = json_encode([]);
}
if(empty($exclustion) ||  $exclustion=='undefined'){
    $exclustion = json_encode([]);
}



// echo '<pre>';
// $ooverview_data = $over_view_text;
// $other_data = $other_data;
// print_r($other_data);
// print_r($over_view_text);
// echo '</pre>';
?>

<div class="col-md-12">
    <h3>Edit Package - <span class=""><?php echo $model->name;?></span> - ID: <?php echo $model->id;?></h3>
    <hr />
    <div class="col-md-9">
        <?php $this->renderPartial('_packagemenu');?>
        <h4>New Update </h4>
    </div>
</div>
<div class="col-md-12" id="app">
<a href="javascript:void(0)" v-on:click="saveFormData('save_alt_title')" class="pull-right"><span class="glyphicon glyphicon-floppy-disk"></span></a>
<div class="row">
    <div class="form-group col-md-7">
        <input type="text" class="form-control" v-model="alt_title" placeholder="Alternate title"/>
    </div>
</div>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateTripFactModal">Update Trip Facts</button>
<!-- Modal -->
<!-- Trip Facts Modal Here -->
<div id="updateTripFactModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Trip Facts</h4>
      </div>
      <div class="modal-body">
            <div class="row">
                <!-- <h2>Trip Facts</h2> -->
                <div class="col-md-12 row">
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
                            <tr>
                                <td colspan="6">
                                <a href="javascript:void(0)" v-on:click="saveFormData('save_trip_fact')" class="btn btn-primary pull-right"> Save Trip Facts</a>
                                
                                </td>

                            </tr>
                        <tbody>
                    </table>
                </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Overview Text -->
<div class="row">
    <h2>Overview Text</h2>
    <div class="form-group col-md-6">
        <label>Trip Style Text</label>
        <input type="text" v-model="over_view_form.trip_style_text"  placeholder="heading" class="form-control" />
        <label>Trip Difficulty Text</label>
        <input type="text" v-model="over_view_form.trip_difficulty_text"  placeholder="heading" class="form-control" />
        <label>Trip Difficulty ToolTip Text</label>
        <input type="text" v-model="over_view_form.trip_difficulty_tooltip_text"  placeholder="heading" class="form-control" />
    </div>
    <div class="col-md-6">
    <a href="javascript:void(0)" v-on:click="saveFormData('save_overview_text')" class="pull-right"><span class="glyphicon glyphicon-floppy-disk"></span></a>

    </div>
</div>


<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateInclusionModal">Update Inclusion Detail</button>
<!-- Inclusion detail Modal Here -->
<div id="updateInclusionModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inclusion Detail</h4>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12 row">
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
                <div class="col-md-12">
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
                                <td colspan="6">
                                    <a href="javascript:void(0)" v-on:click="saveFormData('save_inclusion_detail')" class="btn btn-primary pull-right">Save Inclusion Detail</a>
                                </td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    <!-- <span class="glyphicon glyphicon-floppy-disk"></span> -->
    </div>

    </div>
</div>


<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateExcusionModal">Update Exclusion Detail</button>
<!-- Modal -->
<div id="updateExcusionModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Exclusion Detail</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <!-- <h2>Exclusion Detail</h2> -->
            <div class="col-md-12 row">
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
            <div class="col-md-12">
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
                        <a href="javascript:void(0)" v-on:click="saveFormData('save_exclusion_detail')" class="pull-right btn btn-primary">Save Exclusion detail</a>
                    </td>
                </tr>
                    <tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateItinraryModal">Update Itinerary Extra Info</button>

<!-- Modal -->
<div id="updateItinraryModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Itinerary Extra Info</h4>
      </div>
      <div class="modal-body">
                <div class="row">
                <!-- <h2>Itinerary Extra Info</h2> -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="itinerary">Itinerary</label>
                        <select class="form-control" v-on:change="selectItinerary($event)" v-model="itinerary_form.itinerary_id"  placeholder="itinerary_id" >
                            <option v-for="(ildata,index) of ite_data_lookup">{{ildata.day_no}} / {{ildata.short_desc}}</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <div v-for="(sIItem,index) in itinerary_form.ite_icon" class="row" style="margin-top:10px;margin-left:0px">
                            <a href="javascript:void(0)" v-on:click="removeMoreIteIcon(index)" style="float:left;">-</a>
                            <input type="text" v-model="sIItem.icon"  placeholder="icon"  class="form-control col-md-3" style="width:150px !important;margin:2px" />
                            <input type="text" v-model="sIItem.icon_text"  placeholder="Text"  class="form-control col-md-4"  style="width:180px !important;margin:2px" />
                            <input type="text" v-model="sIItem.icon_color"  placeholder="color"  class="form-control col-md-3"  style="width:120px !important;margin:2px" />
                        </div>
                        <a href="javascript:void(0)" v-on:click="addMoreIteIcon()" style="float:right;">Add</a>

                    </div>
                    <div class="form-group">
                        <input type="button" v-on:click="saveIteData()" class="btn btn-default" value="Save itinerary extra info" />
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Itinerary</td>
                            <td>Icon Detail</td>
                            <!-- <td>Text</td>
                            <td>Color</td> -->
                        </tr>
                        <tr v-for="(ititem,index) of itinerary_data">
                                <td v-on:click="selectItineary(ititem)"><a href="javascript:void(0)" v-on:click="deleteIteData(index)">X</a> {{ititem.itinerary_id}}</td>
                                <!-- <td>{{ititem.heading}}</td> -->
                                <td>
                                <table>
                                        <thead>
                                           <tr>
                                            <th>Icon</th>
                                            <th>Icon Color</th>
                                            <th>Icon Text</th>
                                           </tr>     
                                        </thead>
                                        <tbody>
                                        <tr v-for="iideta of ititem.ite_icon">
                                            <td>{{iideta.icon}}</td>
                                            <td>{{iideta.icon_color}}</td>
                                            <td>{{iideta.icon_text}}</td>
                                        </tr>
                                        </tbody>
                                </table>
                                
                                </td>
                                <!-- <td>{{ititem.ite_icon.color}}</td>
                                <td>{{ititem.ite_icon.text}}</td> -->
                            
                        </tr>

                        <td colspan="2">
                                <a href="javascript:void(0)" v-on:click="saveFormData('save_itinerary_extra_info')" class="pull-right btn btn-primary">Save Itinerary</a>
                        </td>
                        </tr>
                    <tbody>
                    </table>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateVitalInfoModal">Update Vital Info</button>


<!-- Modal -->
<div id="updateVitalInfoModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Vital Information</h4>
      </div>
      <div class="modal-body">
            <div class="row">
            <!-- <h2>Vital Information</h2> -->
            <div class="col-md-12 row">
                <div class="form-group col-md-4">
                    <label for="title">Title</label>
                    <input type="text" v-model="vital_information_form.title"  placeholder="Title" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="tab_name">Tab Name</label>
                    <input type="text" v-model="vital_information_form.tab_name"  placeholder="Tab Name" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="p1">Pargraph 1</label>
                    <input type="text" v-model="vital_information_form.item.txt1"  placeholder="Pargraph 1" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="p2">Pargraph 2</label>
                    <input type="text" v-model="vital_information_form.item.txt2"  placeholder="Pargraph 2" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="p3">Pargraph 3</label>
                    <input type="text" v-model="vital_information_form.item.txt3"  placeholder="Pargraph 3" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="p4">Pargraph 4</label>
                    <input type="text" v-model="vital_information_form.item.txt4"  placeholder="Pargraph 4" class="form-control" />
                </div>
                
                <div class="form-group col-md-4">
                    <label for="p5">Pargraph 5</label>
                    <input type="text" v-model="vital_information_form.item.txt5"  placeholder="Pargraph 5" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <input type="button" v-on:click="saveVitalInformation()" class="btn btn-default" value="Save Vital Information" />
                </div>
                        
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Title</th>
                        <th>Tab Name</th>
                        <th>Paragpah 1</th>
                    </tr>
                        <tr v-for="(vitem,index) of vital_information">
                                <td v-on:click="selectVitalInformation(vitem)"><a href="javascript:void(0)" v-on:click="deleteVitalInformation(index)">X</a> {{vitem.title}}</td>
                                <td>{{vitem.tab_name}}</td>
                                <td>{{vitem.item.txt1}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a href="javascript:void(0)" v-on:click="saveFormData('save_vital_info')" class="pull-right btn btn-primary">Save Vital Information</a>
                            </td>
                        </tr>
                    <tbody>
                </table>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






<div class="row">
<h2>Go Private Text</h2>
<!-- {{go_private_form}} -->
<div class="form-group col-md-6">
                <input type="text" v-model="go_private_form.title"  placeholder="Title" class="form-control" />
                <!-- <input type="text" v-model="go_private_form.detail"  placeholder="Detail"  class="form-control" /> -->
                <textarea v-model="go_private_form.detail" placeholder="Detail" class="form-control"></textarea>

                <input type="text" v-model="go_private_form.image"  placeholder="image"  class="form-control" />
                <input type="button" v-on:click="saveGPData()" class="btn btn-default" value="Save Go Private info" />
</div>
<div class="form-group col-md-6">
<h1>{{go_private_form.title}}</h1>
<p>{{go_private_form.detail}}</p>

<a href="javascript:void(0)" v-on:click="saveFormData('save_go_private_info')" class="pull-right"><span class="glyphicon glyphicon-floppy-disk"></span></a>

</div>
</div>


<div class="row">
<h2>Go BeSpoke Text</h2>
<!-- {{go_bespoke_form}} -->
<div class="form-group col-md-6">
                <input type="text" v-model="go_bespoke_form.title"  placeholder="Title" class="form-control" />
                <!-- <input type="text" v-model="go_bespoke_form.detail"  placeholder="Detail"  class="form-control" /> -->
                <textarea v-model="go_bespoke_form.detail" placeholder="Detail" class="form-control"></textarea>
                <!-- <input type="text" v-model="go_bespoke_form.image"  placeholder="image"  class="form-control" /> -->
                <input type="button" v-on:click="saveGSData()" class="btn btn-default" value="Save Go Private info" />
</div>
<div class="form-group col-md-6">
<h1>{{go_bespoke_form.title}}</h1>
<p>{{go_bespoke_form.detail}}</p>
<a href="javascript:void(0)" v-on:click="saveFormData('save_bespoke_info')" class="pull-right"><span class="glyphicon glyphicon-floppy-disk"></span></a>
</div>
</div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#updateGroupPricingModal">Update Group Pricing</button>

<!-- Modal -->
<div id="updateGroupPricingModal" class="modal fade" role="dialog">
  <div class="modal-dialog   modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Group Pricing Data</h4>
      </div>
      <div class="modal-body">
            <div class="row">
                <!-- <h2>Group Priing Data</h2> -->
                <div class="col-md-12 row">
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
                                <input type="button" v-on:click="addGroupPricing()" class="btn btn-default" value="Add Group Pricing" />
                        </div>
                </div>
                <div class="col-md-12">
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
                            <td colspan="2">
                                <a href="javascript:void(0)" v-on:click="saveFormData('save_group_pricing')" class="pull-right btn btn-primary">Save Group Pricing</a>
                            </td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div class="row">
<h2>Package Image Data</h2>
<div class="col-md-6">
        <select v-model="image_type">
            <option>Main Header Image</option>
            <option>Inclusion Image</option>
            <option>Go Bespoke Image</option>
            <option>Map Image</option>
            <option>Go Private Image</option>
        </select>
        <input type="file" name="import_file" v-on:change="selectedFile($event)">
        	<button type="button" v-on:click="uploadTodos()" class="btn btn-primary savefl-btn" 
	data-aurl="<?=Yii::app()->createUrl('/admin/package/saveData',['type'=>'basic']);?>">Save</button>
</div>

<div class="col-md-6 row">
        <div class="col-md-6">
        <?php 
        if(!empty($other_data) && isset($other_data['Map Image'])){
            $img = $other_data['Map Image']['image'];
        ?>

        <img src="https://www.mountainsherpatrekking.com/development/images/banner/<?=$img;?>" class="img-responsive package-image" data-imagekey="Map Image" width="200" style="margin-bottom:10px"/>
        <?php }?>
        </div>
        <div class="col-md-6">
        <?php 
        if(!empty($other_data) && isset($other_data['Go Private Image'])){
            $img = $other_data['Go Private Image']['image'];    
        ?>
        <img src="https://www.mountainsherpatrekking.com/development/images/banner/<?=$img;?>" class="img-responsive package-image" data-imagekey="Go Private Image" width="200" style="margin-bottom:10px"/>
        <?php }?>
        </div>
        <div class="col-md-6">
        <?php 
        if(!empty($other_data) && isset($other_data['Inclusion Image'])){
            $img = $other_data['Inclusion Image']['image'];    
        ?>
        <img src="https://www.mountainsherpatrekking.com/development/images/banner/<?=$img;?>" class="img-responsive package-image" data-imagekey="Inclusion Image" width="200" style="margin-bottom:10px"/>
        <?php }?>
        </div>
        <div class="col-md-6">
        <?php 
        if(!empty($other_data) && isset($other_data['Main Header Image'])){
            $img = $other_data['Main Header Image']['image'];      
        ?>
        <img src="https://www.mountainsherpatrekking.com/development/images/banner/<?=$img;?>" class="img-responsive package-image" data-imagekey="Main Header Image" width="200" style="margin-bottom:10px"/>
        <?php }?>
        </div>
</div>
</div>


<textarea id="footerlink-data" style="display:none"></textarea>
	<!-- <button type="button" class="btn btn-primary savefl-btn" 
	data-aurl="<?=Yii::app()->createUrl('/admin/package/saveData',['type'=>'basic']);?>">Save</button> -->
</div>

</div>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
<?php 
$url = Yii::app()->createUrl('/admin/package/updateextra',['type'=>'footer-link','id' => $model->id]);
$img_url = Yii::app()->createUrl('/admin/package/updateextraimage',['type'=>'footer-link','id' => $model->id]);
$img_delete_url = Yii::app()->createUrl('/admin/package/deleteextraimage',['id' => $model->id]);

?>
<script>
var app = new Vue({
  el: '#app',
  data: {
      old_trip_fact: '',
      alt_title: '', 
      trip_facts_form:  { heading: '', icon: '',color: '', text: { txt1:'', txt2: '',txt3: ''}},
      inclusion_form:   { heading: '', item: {txt1:'',txt2: '',txt3: '',txt4:'',txt5:''},image: ''},
      exclusion_form:   { heading: '', item: {txt1:'',txt2: '',txt3: '',txt4:'',txt5:''}},
      vital_information_form:   { title: '', tab_name: '', item: {txt1:'',txt2: '',txt3: ''}},
      vital_information: [],
      itinerary_form: {itinerary_id: '',itenary_text: '', ite_icon: [{icon: '', icon_text: '', icon_color: ''}]},
      go_private_form: {title: '',detail:'',image:''},
      go_bespoke_form: {title: '',detail:''},
      group_pricing_form: { min:'', max: '', price: ''},
      over_view_form: {trip_style_text: '', trip_difficulty_text: '',trip_difficulty_tooltip_text:''},
      trip_facts: [],
      current_ite: '',
      inclusion: [],
      exclusion: [],
      itinerary_data: [],
      ite_data_lookup: [],
      group_pricing: [],
      checkKey: '',
      image_type: '',
      file: '',
      old_data: '',


	
  },
  created: function(){
      this.prepareIteData();

	
  },
  methods: {

    selectTripFact: function(trip_fact){
        this.old_trip_fact = trip_fact;
        this.trip_facts_form = this.old_trip_fact;

    },

    selectInclusion: function(inclusion){
        this.inclusion_form = inclusion;
    },

    selectExclusion: function(exclusion){
        this.exclusion_form = exclusion;
    },

    selectItineary: function(iitem){
        this.itinerary_form = iitem;

    },

    selectVitalInformation: function(item){
        this.vital_information_form = item;
    },
    selectGPItem: function(item){
        this.group_pricing_form = item;
    },

    selectItinerary: function(e){
    this.current_ite = e.srcElement.value;
        // console.log(this.current_ite);
    },
    prepareIteData: function(){
        this.ite_data_lookup = <?=$result_json;?>;
        this.alt_title = '<?=$alt_title;?>';
        this.trip_facts = <?=$tripfact;?>;
        <?php if($over_view_text){?>
            this.over_view_form = <?=$over_view_text;?>;
        <?php }?>
        this.inclusion = <?=$inclusion;?>;
        this.exclusion = <?=$exclustion;?>;
        this.itinerary_data = <?=$iteneary;?>;
        this.vital_information = <?=$vital_information;?>;
        <?php if($goprivate){?>
            this.go_private_form = <?=$goprivate;?>;
        <?php }?>
        <?php if($gocustmozie){?>
            this.go_bespoke_form = <?=$gocustmozie;?>;
        <?php }?>
        this.group_pricing = <?=$grouppricing;?>;

  

        // console.log(this.ite_data_lookup);
    },

    saveTripFact: function(){
        // var clone = Object.assign({}, this.trip_facts_form);
        if(!this.old_trip_fact){
            this.trip_facts.push(
			{
				heading: this.trip_facts_form.heading,
				icon: this.trip_facts_form.icon,
				color: this.trip_facts_form.color,
				text: { txt1: this.trip_facts_form.text.txt1, txt2: this.trip_facts_form.text.txt2,  txt3: this.trip_facts_form.text.txt3 }

			}
		);
        } else {
            console.log(this.trip_facts)
        }
        
        this.updateData();
        // this.trip_facts.push(clone);
    },

    deleteFacts: function(index){
        this.trip_facts.splice(index, 1);
        this.updateData();
    },

    saveInclusion: function(){
        this.inclusion.push({
            heading: this.inclusion_form.heading,
            item: { txt1: this.inclusion_form.item.txt1, txt2: this.inclusion_form.item.txt2,  txt2: this.inclusion_form.item.txt2, txt3: this.inclusion_form.item.txt3,  txt4: this.inclusion_form.item.txt4,  txt5: this.inclusion_form.item.txt5 }
        });
        this.updateData();

    },

    deleteInclusion: function(index){
        this.inclusion.splice(index, 1);
        this.updateData();
    },

    saveExclusion: function(){
        this.exclusion.push({
            heading: this.exclusion_form.heading,
            item: { txt1: this.exclusion_form.item.txt1, txt2: this.exclusion_form.item.txt2,  txt2: this.exclusion_form.item.txt2, txt3: this.exclusion_form.item.txt3,  txt4: this.exclusion_form.item.txt4,  txt5: this.exclusion_form.item.txt5 }
        });
        this.updateData();
    },

    deleteExclusion: function(index){
        this.exclusion.splice(index, 1);
        this.updateData();
    },
    saveVitalInformation: function(){
        this.vital_information.push({
            title: this.vital_information_form.title,
            tab_name: this.vital_information_form.tab_name,
            item: { txt1: this.vital_information_form.item.txt1, txt2: this.vital_information_form.item.txt2,  txt2: this.vital_information_form.item.txt2, txt3: this.vital_information_form.item.txt3,  txt4: this.vital_information_form.item.txt4,  txt5: this.vital_information_form.item.txt5 }
        });

        this.updateData();
    },

    deleteVitalInformation: function(index){
        this.vital_information.splice(index, 1);
    },

    saveIteData: function(){
        // itinerary_id: '',itenary_text: '', ite_icon: [{icon: '', icon_text: '', icon_color: ''}]
        this.itinerary_data.push({
            itinerary_id: this.itinerary_form.itinerary_id,
            itenary_text: this.itinerary_form.itenary_text,
            ite_icon: this.itinerary_form.ite_icon
        });
        this.updateData();
    },

    deleteIteData: function(index){
        this.itinerary_data.splice(index, 1);
    },

    saveGPData: function(){
        console.log(this.go_private_form)
    },

    saveGSData: function(){
        console.log(this.go_bespoke_form)
    },

    addGroupPricing: function(){
        this.group_pricing.push({
            min: this.group_pricing_form.min,
            max: this.group_pricing_form.max,
            price: this.group_pricing_form.price

        });
    },

    deleteGPData: function(index){
        this.group_pricing.splice(index,1);
    },

    saveFormData: function(data_name){
        if(data_name==='save_alt_title'){
            this.updateData(this.alt_title);
            this.checkKey = 'save_alt_title';
        }

        if(data_name === 'save_trip_fact'){
            this.updateData(this.trip_facts);
            this.checkKey = 'save_trip_fact';
        }
        if(data_name === 'save_overview_text'){
            this.updateData(this.over_view_form);
            console.log(this.over_view_form)
            this.checkKey = 'save_overview_text';
        }
        if(data_name === 'save_inclusion_detail'){
            this.updateData(this.inclusion);
            this.checkKey = 'save_inclusion_detail';
        }
        if(data_name === 'save_exclusion_detail'){
            this.updateData(this.exclusion);
            this.checkKey = 'save_exclusion_detail';
        }
        if(data_name === 'save_inclusion_detail'){
            this.updateData(this.inclusion);
            this.checkKey = 'save_inclusion_detail';
        }
        if(data_name === 'save_itinerary_extra_info'){
            this.updateData(this.itinerary_data);
            this.checkKey = 'save_itinerary_extra_info';
        }
        if(data_name === 'save_go_private_info'){
            this.updateData(this.go_private_form);
            this.checkKey = 'save_go_private_info';
        }

        if(data_name === 'save_bespoke_info'){
            this.updateData(this.go_bespoke_form);
            this.checkKey = 'save_bespoke_info';
        }
        if(data_name === 'save_group_pricing'){
            this.updateData(this.group_pricing);
            this.checkKey = 'save_group_pricing';
        }
        if(data_name === 'save_vital_info'){
            this.updateData(this.vital_information);
            this.checkKey = 'save_vital_info';
        }

   

        $.ajax({
            context: this,
            type:'POST',
            url: '<?=$url;?>',
            dataType: 'json',
            data:  { data: $("#footerlink-data").val(), key: this.checkKey},
            success: function(res){

            }
        });
    },

    updateData: function(val){
		document.getElementById("footerlink-data").value =  JSON.stringify(val);
    },
    
    selectedFile(event) {
      this.file = event.target.files[0]
    },

    uploadTodos() {
        let formData = new FormData();
        formData.append('file', this.file);
        formData.append('image_type', this.image_type);
        $.ajax({
            url: '<?=$img_url;?>',
            type: 'POST',
            data: formData,
            success: function (data) {
                alert('Image saved');
            },
            cache: false,
            contentType: false,
            processData: false
    });
        // for(var pair of formData.entries()) {
        //     console.log(pair[0]+ ', '+ pair[1]); 
        // }
        // this.$store.dispatch('uploadTodos', formData);
    },

    addMoreIteIcon: function() {
        this.itinerary_form.ite_icon.push({icon: '', icon_text: '', icon_color: ''});
        // ite_icon: [{icon: '', icon_text: '', icon_color: ''}]
    },

    removeMoreIteIcon: function(index) {
        this.itinerary_form.ite_icon.splice(index, 1);
        
    }

	
  }

});

$(".savefl-btn").on('click',function(e){
	e.preventDefault();
	var obj = $(this);
	$.ajax({
		type:'post',
		url: obj.data('aurl'),
		data: { data: $("#footerlink-data").val() },
		dataType: 'json',
		success: function(res) {

		}
	})
})

$(".package-image").on('dblclick',function(ev){
    var obj = $(this);
    if(confirm('Are you sure to delete the image')){
        $.ajax({
            url: '<?=$img_delete_url;?>',
            type: 'POST',
            data: { imagekey: obj.data('imagekey')},
            success: function (data) {
                alert('Image deleted');
            },
            // cache: false,
            dataType: 'json',
            // processData: false
    });
    }

})
</script>

<p> <a href="https://fontawesome.com/v4.7.0/" target="_blank" >Icon Url https://fontawesome.com/v4.7.0</a></p>
<p> <a href="https://htmlcolorcodes.com/" target="_blank" >Color Url https://htmlcolorcodes.com/</a></p>