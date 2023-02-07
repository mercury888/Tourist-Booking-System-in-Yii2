<link href="https://cdn.quilljs.com/1.3.4/quill.core.css" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.4/quill.bubble.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
<!-- unpkg -->
<?php 
$sql = "select *from {{%destination}} where visible=1";
$destination = Yii::$app->db->createCommand($sql)->queryAll();
$destination_json = json_encode($destination?$destination:[]);
?>
<div class="row"  id="app">
        <div class="col-md-12" v-if="alert_obj.class">
            <div 
            v-bind:class="[alert_obj.class ? alert_obj.class : '', 'alert alert-dismissible']"
            >
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> {{alert_obj.heading}}!</h4>
                {{alert_obj.message}}
            </div>
        </div>
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Detail</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Pricing</a></li>
              <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Itinerary</a></li>
              <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Media</a></li>
              <li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Faq</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <?=$this->render('//package/include/detail');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <?=$this->render('//package/include/pricing');?>
              </div>
              <div class="tab-pane" id="tab_5">
              <?=$this->render('//package/include/itinerary');?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              <?=$this->render('//package/include/media');?>
              </div>
              <div class="tab-pane" id="tab_4">
              <?=$this->render('//package/include/faq');?>
              </div>
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
          <div class="modal fade" id="modal-default" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                      <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <div class="modal-body">
                        <color-picker></color-picker>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
        </div>
</div>

    

   

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-quill-editor@3.0.4/dist/vue-quill-editor.js"></script>
<script src="https://unpkg.com/vue-upload-component"></script>
<?php 
$raUrl = Yii::$app->urlManager->createUrl(['package/load-region-activity']);
$save_basic_detail = Yii::$app->urlManager->createUrl(['package/create-vue']);
$save_trip_fact = Yii::$app->urlManager->createUrl(['package/save-trip-fact']);
$save_inclusion = Yii::$app->urlManager->createUrl(['package/save-inclusion']);
$save_exclusion = Yii::$app->urlManager->createUrl(['package/save-exclusion']);
$save_vital_info = Yii::$app->urlManager->createUrl(['package/save-vital-info']);
$save_vital_info = Yii::$app->urlManager->createUrl(['package/save-vital-info']);
$save_bespoke_private = Yii::$app->urlManager->createUrl(['package/save-bespoke-private']);
$save_group_pricing = Yii::$app->urlManager->createUrl(['package/save-group-pricing']);
$save_group_date_pricing = Yii::$app->urlManager->createUrl(['package/save-group-date-pricing']);
$save_itinerary_url = Yii::$app->urlManager->createUrl(['package/save-itinerary']);
$save_faq_url = Yii::$app->urlManager->createUrl(['package/save-faq']);
$validate_error_url = Yii::$app->urlManager->createUrl(['package/validate-error']);
$gsql = 'select *from tbl_grade_lookup';
$grade_lookups = Yii::$app->db->createCommand($gsql)->queryAll();
$grade_lookups_json = json_encode($grade_lookups?$grade_lookups:[]);
?>
<script>
  Vue.use(VueQuillEditor);
  Vue.component('file-upload', VueUploadComponent)
  var app = new Vue({
  el: '#app',
  components: {
    FileUpload: VueUploadComponent
  },
 
  data: {
    error: {},
    error1: {},
    visibleLookup: [{value: 0,name: 'not visible'}, { value:1, name: 'visible'}],
    alert_obj: {class:'',heading: '', message: ''},
    id: '',
    current_file : '',
    destinationList: [],
    regionList: [],
    activityList: [],
    gradeLookupList: [],
    mediaList: [
      { name: 'Gallery', value: 'gallery'},
      { name: 'Main Header', value: 'main_header'},
      { name: 'Map', value: 'map_image'},
      { name: 'Inclusion Image', value: 'inclusion_image'},
      { name: 'Go Private Image', value: 'go_private'},
      { name: 'Be Spoke Image', value: 'be_spoke'},
      ],
    media_type: 'gallery',
    files: [],
    editorOption: {
        theme: 'snow'
      },
    message: 'Hello Vue!',
    itinerary_form: {id:'',day_no: '',full_desc: '',short_desc: '', ite_icon:  []},
    itinerary_data: [],
    inclusion_form:   { type: 'inclusion',package_id: this.id,id: '',heading: '', item: {txt1:'',txt2: '',txt3: '',txt4:'',txt5:''}},
    exclusion_form:   { type: 'exclustion',package_id: this.id, id: '',heading: '', item: {txt1:'',txt2: '',txt3: '',txt4:'',txt5:''}},
    inclusion: [],
    exclusion: [],
    trip_facts: [],
    ite_con_for: {icon: '', icon_text: '', icon_color: ''},
    faqs: [],
    go_private_form: {id: '', package_id: this.id,title: '',detail:'',image:''},
    go_bespoke_form: {id: '', package_id: this.id,title: '',detail:'', image: ''},
    faq_form: { question: '', answer: ''},
    vital_information_form:   { package_id: this.id, id: '', title: '', tab_name: '', detail: ''},
    vital_information: [],
    group_pricing_form: { id: '', package_id: this.id, min:'', max: '', price: ''},
    group_pricing: [],
    over_view_form: {trip_style_text: '', trip_difficulty_text: '',trip_difficulty_tooltip_text:''},
    trip_facts_form:  { type: 'trip-fact',package_id: this.id, id: '',heading: '', icon: '',color: '', text: { txt1:'', txt2: '',txt3: ''}},
    date_pricing_form: {package_id: this.id,id: '',days_no: '', start_date: '', end_date: '', cost : ''},
    date_pricing_data: [],
    form : {
        id: '',
        name: '',
        destination_id: '',
        region_id: '',
        activity_id: '',
        image: '',
        map_image: '',
        duration: '',
        grade: '',
        price_3: '',
        trip_style:'',
        trip_defficulty: '',
        tool_tip: '',
        supplement_3: '',
        price_5: '',
        supplement_5: '',
        date_added: '',
        visible: '',
        highprority: '',
        subactivity_id: 0,
        visible: '',
        detail_form: {
            title: '',
            description: '',
            itinerary: '',
            cost_detai: '',
            cost_excludes: '',
            equipments: '',
            accomodation:'',
            info: '',
            group_size: '',
            meta_title: '',
            meta_desc: '',
            meta_key: '',
            package_id: this.id,
            language_id: 1
        },
       
    }
  },
  created: function() {
    this.prepareData();
  },
  methods: {
    saveFaq: function() {
      $.ajax({
        type: 'post', 
        data: this.faq_form,
        url: '<?=$save_faq_url;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.faq_form;
              this.faqs.push(form);
            }
          }
        }.bind(this)
      })
    },
    saveItitenary: function() {
      $.ajax({
        type: 'post', 
        data: this.itinerary_form,
        url: '<?=$save_itinerary_url;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.itinerary_form;
              this.itinerary_data.push(form);
            }
          }
        }.bind(this)
      })
    },
    saveDatePrice: function() {
      $.ajax({
        type: 'post', 
        data: this.date_pricing_form,
        url: '<?=$save_group_date_pricing;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.date_pricing_form;
              this.date_pricing_data.push(form);
            }
          }
        }.bind(this)
      })
    },
    saveGroupPricing: function() {
      // group_pricing_form
      $.ajax({
        type: 'post', 
        data: this.group_pricing_form,
        url: '<?=$save_group_pricing;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.group_pricing_form;
              this.group_pricing.push(form);
            }
          }
        }.bind(this)
      })
    },
    saveData: function(type){
      var formData = new FormData();
      formData.append('data', JSON.stringify(this.form));
      formData.append('image', this.current_file);
      $.ajax({
        type: 'post', 
        data: formData,
        url: '<?=$save_basic_detail;?>',
        dataType: 'json',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(res) {
          if(res.status=='success') {
            this.form.id = res.data.id;
            this.id = res.data.id;
          } else {
            this.error = res.error;
          }
        }.bind(this)
      })
    },
    checkErrorMessage : function(type){
      var formData = new FormData();
      formData.append('data', JSON.stringify(this.form));
      formData.append('image', this.current_file);
      $.ajax({
        type: 'post', 
        data: formData,
        url: '<?=$validate_error_url;?>',
        dataType: 'json',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(res) {
          if(res.status=='success') {
              // this.regionList = res.region;
              // this.activityList = res.activity;
          } else {
            this.error = res.error;
          }
        }.bind(this)
      })
    },
    saveBespoke: function(type){
      var formData = new FormData();
      formData.append('data', JSON.stringify(this.go_bespoke_form));
      formData.append('image', this.current_file);
      formData.append('type', 'bespoke');
      $.ajax({
        type: 'post', 
        data: formData,
        url: '<?=$save_bespoke_private;?>',
        dataType: 'json',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(res) {
          if(res.status=='success') {
              // this.regionList = res.region;
              // this.activityList = res.activity;
          }
        }.bind(this)
      })
    },
    savePrivate: function(type){
      var formData = new FormData();
      formData.append('data', JSON.stringify(this.go_private_form));
      formData.append('image', this.current_file);
      formData.append('type', 'private');
      $.ajax({
        type: 'post', 
        data: formData,
        url: '<?=$save_bespoke_private;?>',
        dataType: 'json',
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(res) {
          if(res.status=='success') {
              // this.regionList = res.region;
              // this.activityList = res.activity;
          }
        }.bind(this)
      })
    },

    saveTripFact: function() {
     
      // trip_facts_form
      $.ajax({
        type: 'post', 
        data: this.trip_facts_form,
        url: '<?=$save_trip_fact;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.trip_facts_form;
              this.trip_facts.push(form);
            }
          }
        }.bind(this)
      })
    },
    saveInclusion: function() {
      $.ajax({
        type: 'post', 
        data: this.inclusion_form,
        url: '<?=$save_inclusion;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.inclusion_form;
              this.inclusion.push(form);
            }
          }
        }.bind(this)
      })
    },

    saveExclusion: function() {
      $.ajax({
        type: 'post', 
        data: this.exclusion_form,
        url: '<?=$save_exclusion;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.exclusion_form;
              this.exclusion.push(form);
            }
          }
        }.bind(this)
      })
    },
  
    saveVitalInfo: function() {
      $.ajax({
        type: 'post', 
        data: this.vital_information_form,
        url: '<?=$save_vital_info;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
            if(!index){
              const form = this.vital_information_form;
              this.exclusion.push(vital_information);
            }
          }
        }.bind(this)
      })
    },


    prePareFile: function(e) {
      this.current_file = e.target.files[0];
      console.log(this.current_file);

    },
    prepareData: function() {
      this.destinationList = <?=$destination_json;?>;
      this.gradeLookupList = <?=$grade_lookups_json;?>;
    },
    loadRegioinActivity: function(e) {
      this.checkErrorMessage();
      $.ajax({
        type: 'post', 
        data: { id: e.srcElement.value},
        url: '<?=$raUrl;?>',
        dataType: 'json',
        success: function(res) {
          if(res.status=='success') {
              this.regionList = res.region;
              this.activityList = res.activity;
          }
        }.bind(this)
      })

    },
    saveBasicDetail: function() {
      const obj = {

      }

    },

    fileUpload: function() {

    },
    onEditorFocus: function() {},
    onEditorBlur: function() {},


    onEditorReady : function() {},
    inputFile: function (newFile, oldFile) {
      if (newFile && oldFile && !newFile.active && oldFile.active) {
        // Get response data
        console.log('response', newFile.response)
        if (newFile.xhr) {
          //  Get the response status code
          console.log('status', newFile.xhr.status)
        }
      }
    },

    inputFilter: function (newFile, oldFile, prevent) {
      if (newFile && !oldFile) {
        // Filter non-image file
        if (!/\.(jpeg|jpe|jpg|gif|png|webp)$/i.test(newFile.name)) {
          return prevent()
        }
      }

      // Create a blob field
      newFile.blob = ''
      let URL = window.URL || window.webkitURL
      if (URL && URL.createObjectURL) {
        newFile.blob = URL.createObjectURL(newFile.file)
      }
    },
    addItemIconRow: function(){
        this.itinerary_form.ite_icon.push({icon: '', icon_text: '', icon_color: ''});
        $('body').find('.my-colorpicker2').colorpicker()
    }
  }

})
</script>
<style>
.box-header.with-border {
    background: #defede;
}
.colorpicker {
    top: -549px !important;
}
.ql-editor {
    background-color: #fefefe;
    height: 150px;
}
</style>