
<div style="min-height: 955.8px;">
    <!-- Content Header (Page header) -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">FAQ List</h3>
            </div>
            <div class="box-body">
            {{faqs}}
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Question</th>
                        
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
                <h3 class="box-title">FAQ Form</h3>
                </div>
                <div class="box-body">
                {{faq_form}}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Question.*</label>
                            <input type="text" v-model="faq_form.day_no"  placeholder="Question" class="form-control" />
                        </div>
                        <div class="form-group col-md-12 ">
                            <label>Answer*</label>
                            <quill-editor v-model="faq_form.answer"
                                                sytle="background-color:#ffffff"
                                                v-bind:name="faq_form.answer"
                                                ref="quillEditorA"
                                                :options="editorOption"
                                                @blur="onEditorBlur($event)"
                                                @focus="onEditorFocus($event)"
                                                @ready="onEditorReady($event)">
                                        </quill-editor>
                            <!-- <input type="text" v-model="faq_form.answer"  placeholder="Answer"  class="form-control" /> -->
                        </div>
                        <div class="form-group  col-md-4">
                            <input type="button" v-on:click="saveFaq()" class="btn btn-default" value="Save FAQ" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
  </div>