<?php
/* @var $this SettingController */
/* @var $model Setting */
/* @var $form CActiveForm */
$setting = Setting::model()->findByAttributes(['slug'=>'site-menu']);
$setting_fl = Setting::model()->findByAttributes(['slug'=>'footer-link']);
$region = Region::model()->findAll();
// $activity = Activity::model()->findAll();
// $region_json = json_encode($region);

$darr = [];
$dbCommand = Yii::app()->db->createCommand(" SELECT `id`, `name`,slug FROM tbl_destination ");
$arows = $dbCommand->queryAll();
$i=1;foreach ($arows as $row)
{
	$darr[$i]['id'] = $row['id'];
	$darr[$i]['name'] = $row['name'];
	$darr[$i]['slug'] = $row['slug'];
$i++;}
$destination_json = json_encode($darr);
$arr = [];
$dbCommand = Yii::app()->db->createCommand(" SELECT `id`, `name`,slug FROM tbl_activity ");
$arows = $dbCommand->queryAll();
$i=1;foreach ($arows as $row)
{
	$arr[$i]['id'] = $row['id'];
	$arr[$i]['name'] = $row['name'];
	$arr[$i]['slug'] = $row['slug'];
$i++;}
$activity_json = json_encode($arr);

$rarr = [];
$dbCommand = Yii::app()->db->createCommand(" SELECT `id`, `name`, slug FROM tbl_region ");
$arows = $dbCommand->queryAll();
$j=1;foreach ($arows as $row)
{
	$rarr[$j]['id'] = $row['id'];
	$rarr[$j]['name'] = $row['name'];
	$rarr[$j]['slug'] = $row['slug'];
$j++;}
$region_json = json_encode($rarr);



$packages = Package::model()->findAll();
$mdata = $setting->value;
$mdata_link = $setting_fl->value;

$destination = Destination::model()->findAll();
?>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <!-- SortableJS -->
  <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
<!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) -->
<script   src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>


<div class="form" id="app">
<div class="row">

<div class="col-md-6">
	<a href="javascript:void(0)" class="btn btn-default pull-right" v-on:click="resetToTopLevelMenu(1);">Add Top Level Menu</a>
	<form>
	<!-- {{form_feild}} -->
	<input type="text" class="form-control" v-model="form_feild.name" placeholder="Menu name" />

	<select class="form-control" v-model="form_feild.menu_type" placeholder="Menu Type">
	<option v-for="item in menu_type_lookup">{{ item.value}}</option>
	</select>

	<input type="text" class="form-control" v-model="form_feild.url" placeholder="Menu Url" />


	<input type="text" class="form-control" v-model="form_feild.package_slug" placeholder="Input slug on for megha menu headings" />

    <span class="hint">Only add for last level menu</span>
	<input type="text" class="form-control" v-model="form_feild.menu_extra_detail" placeholder="eg. Rafting From: 250$ or Offer : Available or anything you can think of" />

	<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="float:right">Menu Url Part</a>
	
	<select class="form-control" v-model="form_feild.package_id" placeholder="Package" v-on:change="updateTitle($event)">
	<?php foreach($packages as $pData){?>
		<option data-name="<?=$pData->name;?>" data-slug="<?=$pData->slug;?>" value="<?=$pData->id?>"><?=$pData->name;?></option>
	<?php }?>
	</select>
	<!-- <input type="text" class="form-control" v-model="form_feild.package_id" placeholder="Package Id" /> -->
	<input type="hidden" class="form-control" v-model="form_feild.menu_level" placeholder="Menu Level" value="1"/>
	<button type="button" class="btn btn-primary" v-if="menu_mode=='create'" v-on:click="addMenu()">Add Menu</button>
	<button type="button" class="btn btn-primary" v-if="menu_mode=='update'" v-on:click="updateMenuChange()">Update Menu</button>
	</form>

		<div class="row" v-if="sort_type">
			<div class="col-md-6">
				<h3>Sort Menu (Drag and Sort)</h3>
				<!-- {{sort_data}} -->
				<a href="javascript:void(0)" v-on:click="confirmSort()">Confirm Sort</a>
				<draggable v-model="sort_data" draggable=".itema">
        			<transition-group>
					<div class="itema" v-if="sort_type=='main'" v-for="(item,index) of sort_data" :key="index">
							<h4>{{item.name}}</h4>
					</div>

					<!-- <div class="itema" v-if="sort_type=='level2'" v-for="(item,index) of sort_data" :key="index">
							{{item.name}}
					</div> -->

					</transition-group>
        		</draggable>
			</div>
		</div>

</div>
<div class="col-md-6 row">
	<table class="table table-responsive">
	<tbody>
	<tr v-for="(item,index) in menu_data" class="col-md-12">
	<th>
			<a href="javascript:void(0)" v-on:click="selectSubMenu(item,2);"><span class="glyphicon glyphicon-plus"></a> 
                <a href="javascript:void(0)" v-on:click="updateMenu(item,'main_menu')">{{item.name}} </a>
                
            
            <a href="javascript:void(0)" v-on:click="deleteMenu(index,1);"><span class="glyphicon glyphicon-trash"></span></a>
			<table v-if="item.sub_menu.length>0" class="table table-responsive">
			<tbody>
			<tr v-for="(item1,index) in item.sub_menu" class="col-md-12">
			<th>
			<a href="javascript:void(0)" v-on:click="selectSubMenu(item1,3);"><span class="glyphicon glyphicon-plus"></a> 
            <a href="javascript:void(0)" v-on:click="updateMenu(item1,'level1')">{{item1.name}} </a>
			
			<a href="javascript:void(0)" v-on:click="deleteSubMenu(item.sub_menu,index);"><span class="glyphicon glyphicon-trash"></span></a>
			<!-- <a href="javascript:void(0)" v-on:click="sortLvl2(item.sub_menu,index);"><i class="glyphicon glyphicon-arrow-up" aria-hidden="true"></i></a> -->
				<table v-if="item1.sub_menu.length>0" class="table table-responsive">
				<tbody>
				<tr v-for="(item2,index) in item1.sub_menu" class="col-md-12">
				<th>
				<a href="javascript:void(0)" v-on:click="selectSubMenu(item2,4);"><span class="glyphicon glyphicon-plus"></a> 
                <a href="javascript:void(0)" v-on:click="updateMenu(item2,'level2')">{{item2.name}} </a>
                <a href="javascript:void(0)" v-on:click="deleteSubMenu(item1.sub_menu,index);"><span class="glyphicon glyphicon-trash"></span></a>
					<table v-if="item2.sub_menu.length>0" class="table table-responsive">
					<tbody>
					<tr v-for="(item3,index) in item2.sub_menu" class="col-md-12">
					<th>
                    <a href="javascript:void(0)" v-on:click="updateMenu(item3,'level3')">{{item3.name}} </a>
                    <a href="javascript:void(0)" v-on:click="deleteSubMenu(item2.sub_menu,index);"><span class="glyphicon glyphicon-trash"></span></a>
					</th>
					</tr>
					</tbody>
					</table>
				</th>
				</tr>
				</tbody>
				</table>
			</th>
			</tr>
			</tbody>
			</table>

	</th>


	</tr>
	<tr>
	<td>
	<textarea id="menu-data" style="display:none"></textarea>
	<button type="button" class="btn btn-primary save-btn" data-aurl="<?=Yii::app()->createUrl('/admin/setting/savemenu');?>">Save Menu</button>
	</td>
	</tr>
	</tbody>
	</table>

</div>
<div class="col-md-12">
	<select class="form-control" v-model="footer_link_form.footer_link_type" placeholder="Menu Type">
		<option>Useful Links</option>
		<option>Activities</option>
	</select>
	<input type="text" class="form-control" v-model="footer_link_form.name" placeholder="Name"/>
	<input type="text" class="form-control" v-model="footer_link_form.url" placeholder="Url" />
	<button type="button" class="btn btn-primary" v-on:click="addFooterLink()">Add Link</button>
</div>
<div class="col-md-12 row">
<div class="col-md-6">
	<h3>Useful Links</h3>
	<p v-for="(item,index) of footer_link_data" v-if="item.footer_link_type==='Useful Links'">
	{{item.name}} <a href="javascript:void(0)" v-on:click="deleteFooterLink(index);"><span class="glyphicon glyphicon-trash"></span></a>
	</p> <br />
</div>
<div class="col-md-6">
<h3>Activities</h3>
<p v-for="(item,index) of footer_link_data" v-if="item.footer_link_type==='Activities'">
	{{item.name}} <a href="javascript:void(0)" v-on:click="deleteFooterLink(index);"><span class="glyphicon glyphicon-trash"></span></a>
</p><br />
</div>

<textarea id="footerlink-data" style="display:none"></textarea>
	<button type="button" class="btn btn-primary savefl-btn" 
	data-aurl="<?=Yii::app()->createUrl('/admin/setting/savemenu',['type'=>'footer-link']);?>">Save Footer Link</button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <!-- {{activity_list | json}} -->
	  <!-- {{region_list | json}} -->
	  
	  <div class="form-group">
			<label> Destination </label>
			<select name="destination" class="form-control" v-on:change="selectDesitnation($event)">
				<option> Select Destination</option>
				<option v-for="item of destination_list" :value="item.slug"> {{item.name}}</option>
			</select>
	  </div>
	  <div class="form-group">
			<label> Activity </label>
			<select name="destination" class="form-control" v-on:change="selectActivity($event)">
				<option> Select Activity</option>
				<option v-for="item of activity_list" :value="item.slug"> {{item.name}}</option>
			</select>
	  </div>

	  <div class="form-group">
			<label> Region </label>
			<select name="destination" class="form-control" v-on:change="selectRegion($event)">
				<option> Select Region</option>
				<option v-for="item of region_list" :value="item.slug"> {{item.name}}</option>
			</select>
	  </div>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>
<!-- {{footer_link_data}} -->


	


</div><!-- form -->
<?php 
$arurl = Yii::app()->createUrl('/admin/setting/loaddr');
?>
<script>
var app = new Vue({
  el: '#app',
  data: {
    menu_mode: 'create',
	sort_index: '',
	sort_type: 'main',
	region_list: [],
	sort_data: [],
	selected_destination: '',
	selected_region: '',
	selected_activity: '',
	activity_list: [],
	destination_list: [],
	current_item: '',
	current_menu_label: '',
	form_feild: '',
    message: 'Hello Vue!',
	menu_type_lookup: [{name:'Simple',value: 'simple'},{name:'Megha DropDown',value: 'megha'},{name:'Simple DropDown',value: 'simple-dropdown2'}],
	menu_data: [],
	footer_link_form: {name: '',url: '',footer_link_type:''},
	footer_link_data: []


  },

  created: function(){
	  console.log(<?=$mdata;?>);
	this.menu_data = <?=$mdata;?>;
	this.sort_data = this.menu_data;
	this.footer_link_data = <?=$mdata_link;?>;
	this.region_list = <?=$region_json;?>;
	this.activity_list = <?=$activity_json;?>;
	this.destination_list = <?=$destination_json;?>;
    this.initForm();
	// $region_json = json_encode($region);
	console.log(this.activity_list);
// $activity_json = json_encode($activity);
  },


  methods: {
    initForm: function() {
        this.form_field = {name: '', menu_type:'simple',url: '',menu_level:1, package_id: '', package_slug:'', menu_extra_detail: ''};
    },
    updateMenu: function(item){
        this.form_feild = item;
        this.menu_mode = 'update'

    },

	// sortLvl2: function(item,index){
	// 	this.sort_index = index;
	// 	this.sort_type = 'level2';
	// 	this.sort_data = item;
		

	// }, 

	confirmSort: function(e) {
	
		if(this.sort_type=='main'){
			this.menu_data = this.sort_data;

		}
		this.updateTextArea();
		// console.log(e);
	},

	setSortType: function(type) {
		this.sort_type = type;
		if(type=='main'){
			this.sort_data = this.menu_data;
		}
	},

	selectDesitnation: function(e){
		this.selected_destination = e.srcElement.value;
		this.form_feild.package_slug = this.selected_destination;
		this.form_feild.package_slug = 'destination=' + this.selected_destination;
		// console.log(e);
	},
	
	selectRegion: function(e){
		this.selected_region = e.srcElement.value;
		if(this.selected_activity){
			this.form_feild.package_slug = 'region=' + this.selected_region + '&activity=' + this.selected_activity;
		} else {
			// this.form_feild.package_slug = this.selected_region;
			this.form_feild.package_slug = 'region=' + this.selected_region;
		}
	},
	
	selectActivity: function(e){
		this.selected_activity = e.srcElement.value;
		this.form_feild.package_slug = 'activity=' + this.selected_activity;
		console.log(e);
	

	},


	updateTitle: function(e){
		var selectedPackage = $(e.srcElement.selectedOptions);
		console.log(selectedPackage.data.slug);
		console.log(selectedPackage.data('slug'));
		this.form_feild.name = selectedPackage[0].label
		this.form_feild.package_slug = selectedPackage.data('slug')
	},
	addMenu: function(index='',level=1){
		if(this.current_menu_label > 1){
			this.addSubmenu();
		} else {
			this.menu_data.push(
			{
				menu_level: this.form_feild.menu_level,
				name: this.form_feild.name,
				url: this.form_feild.url,
				menu_type: this.form_feild.menu_type,
				package_id: this.form_feild.package_id,
				package_slug: this.form_feild.package_slug,
                menu_extra_detail: this.form_feild.menu_extra_detail,
				sub_menu: []

			}
		);
		}
		this.updateTextArea();
        this.initForm();
		// this.form_feild.name = '';
		// this.form_feild.url = '';
		// this.form_feild.package_id = '';
		// this.form_feild.package_slug = '';
        // this.form_feild.menu_extra_detail = '';

	},

	updateMenuChange: function() {
		this.updateTextArea();
	},

	updateTextArea: function(){
		document.getElementById("menu-data").value =  JSON.stringify(this.menu_data);
	},

	selectSubMenu: function(item,menu_label){
		this.current_item = item;
		this.current_menu_label = menu_label;

	},

	resetToTopLevelMenu: function() {
		this.current_menu_label = 1;
        this.menu_mode='create';
	},

	addSubmenu: function(){
		this.current_item.sub_menu.push(
			{
				menu_level: this.current_menu_label,
				name: this.form_feild.name,
				url: this.form_feild.url,
				menu_type: this.form_feild.menu_type,
				package_id: this.form_feild.package_id,
				package_slug: this.form_feild.package_slug,
                menu_extra_detail: this.form_feild.menu_extra_detail,
				sub_menu: []

			}
		);
		
	},

	deleteMenu: function(index='',level=1){
		this.$delete(this.menu_data, index)
		this.updateTextArea();
	},
	deleteSubMenu: function(item,index){
		item.splice(index, 1);
		this.updateTextArea();
	},

	addFooterLink: function(){
		this.footer_link_data.push({
			name: this.footer_link_form.name,
			url: this.footer_link_form.url,
			footer_link_type: this.footer_link_form.footer_link_type
		});
		this.updateFooterDataTextArea();


	},

	deleteFooterLink: function(index){
		this.footer_link_data.splice(index, 1);
		this.updateFooterDataTextArea();
	},

	updateFooterDataTextArea: function(){
		document.getElementById("footerlink-data").value =  JSON.stringify(this.footer_link_data);
	},

  }

});

$(".save-btn").on('click',function(e){
	e.preventDefault();
	var obj = $(this);
	$.ajax({
		type:'post',
		url: obj.data('aurl'),
		data: { data: $("#menu-data").val() },
		dataType: 'json',
		success: function(res) {

		}
	})
})
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

</script>