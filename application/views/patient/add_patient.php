<?php $this->load->view('header', array('num' => 2, 'title' => 'Create New Profile')); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 columns">
      <div class="element-container">
              <legend>Create New User Profile</legend>
              <center><span style="color:red;"><?php echo $message;?></span></center>
              <form id="add_patient" method="post" action="<?php echo base_url();?>patient/create_patient" role="form">
                  
                  <div class="row clearfix">
                      <div class="col-xs-10 col-xs-offset-1 columns">
                        <!-- START OF PERSONAL INFORMATION -->
                        <div class="col-xs-12 columns">
                          <span><h4 class="group-title">Patient Personal Information</h4></span>
                          <!-- START OF LEFT COLUMN OF PERSONAL INFORMATION -->
                          <div class="col-xs-6 col-lg-6 columns">  
                            <label for="username" class="form-elem">Username *</label>
                            <input id="username" class="form-control" placeholder="Enter login name" name="uname" type="text" required />

                            <label for="firstname" class="form-elem">First Name *</label>
                            <input id="firstname" class="form-control" name="fname" type="text" required />
                            
                            <label for="middlename" class="form-elem">Middle Name *</label>
                            <input id="middlename" class="form-control" name="mname" type="text" required />

                            <div class="col-xs-12 col-lg-6 columns">
                              <label for="lastname" class="form-elem">Last Name *</label>
                              <input id="lastname" class="form-control" name="lname" type="text" required />
                            </div>

                            <div class="col-xs-12 col-lg-6 columns">
                              <label for="bdate" class="form-elem">Birthdate *</label>
                              <input id="bdate" class="form-control" name="bdate" type="date" required />
                            </div>
                          </div>
                          <!-- END OF LEFT COLUMN OF PERSONAL INFORMATION -->
                          
                          <!-- START OF RIGHT COLUMN OF PERSONAL INFORMATION -->
                          <div class="col-xs-6 col-lg-6 columns">  
                            <label class="form-elem" for="profile-tel">Telephone Number</label>
                            <input placeholder="format: 000-0000" id="profile-tel" class="form-control" name="htno" pattern="[0-9]{3}[-][0-9]{4}" type="text" />                               
                          
                            <label class="form-elem" for="profile-mobile">Mobile Number *</label>
                            <input placeholder="format: 000-0000000" id="profile-mobile" class="form-control" name="mno" type="text" pattern="[0][9][0-9]{9}" required/>

                            <label class="form-elem" for="profile-email">Email Address *</label>
                            <input id="profile-email" class="form-control" name="email" type="email" required />                          

                            <div class="col-xs-12 columns">
                              <div class="col-xs-6 columns">
                                <label class="form-elem" for="profile-gender">Gender *</label>
                                <select id="profile-gender"class="form-control" name="gender" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>                                  
                              <div class="col-xs-6 columns">
                                <label class="form-elem" for="profile-mstatus">Marital Status *</label>
                                <select id="profile-mstatus" class="form-control" name="mstat" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- END OF RIGHT COLUMN OF PERSONAL INFORMATION -->                         
                          <div class="col-xs-12 columns">
                            <label class="form-elem" for="profile-address">Home Address *</label>
                            <input id="profile-address" class="form-control" name="hadd" type="text" required />
                          </div>                          
                          
                        </div>
                        <!-- END OF PERSONAL INFORMATION -->  

                           

                        <!-- START OF DENTAL INFORMATION -->  
                        <div class="col-xs-12 columns">
                        <span style="display:block; margin-top:22px"><h4 class="group-title">Dental Information</h4></span>                         
                            
                            <div class="col-xs-6 col-lg-6 columns">  
                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-occ">Dental Occlusion(choose)</label>
                                <select id="profile-occ" class="form-control" name="occ" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Class I">Class I</option>
                                  <option value="Class II (Div.1)">Class II </option>
                                  <option value="Class III">Class III</option>
                                  <option value="None">None</option>
                                </select>
                              </div>

                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-pc">Periodontal Condition (choose)</label> 
                                <select id="profile-pc" class="form-control" name="perdon" required>
                                    <option value="" disabled default selected style="display:none;"></option>
                                    <option value="Normal">Normal</option>
                                    <option value="With Periodontal Problem">Periodontal Problem</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-xs-6 col-lg-6 columns">  
                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-oh">Oral Hygiene Practices (choose)</label>  
                                <select id="profile-oh" class="form-control" name="orhy" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Good">Good</option>
                                  <option value="Poor">Bad</option>
                                </select>
                              </div>

                              <div class="col-xs-12 col-lg-6 columns">
                                <label class="form-elem" for="profile-hob">History of Bleeding Gums (choose)</label>
                                <select id="profile-hob" class="form-control" name="phb" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                            </div>

                            
                        <!-- END OF DENTAL INFORMATION -->        

                        <!-- START OF MEDICAL INFORMATION --> 
                        <div id="dtcon">
                          <div class="col-xs-12 columns">                    
                                <span style="display:block; margin-top:22px"><h4 class="group-title">Medical Information</h4></span>                         

                                <div class="col-xs-12 columns">
                                  <div class="col-xs-4 columns">
                                    <label class="form-elem" for="profile-bp">Blood Pressure</label>
                                    <input id="profile-bp" class="form-control" name="bp" type="text" />
                                  </div>
                                </div>
                                <div class="col-xs-12 columns">
                                  <hr />
                                </div>

                                <div class="col-xs-4 col-lg-4 columns">
                                  <label>Chronic Diseases</label><br />
                                  <div id="ca1">
                                    <button id="add_chrail"  type="button" class="btn btn-info">Add Chronic Condition</button>        
                                  </div><br>
                                </div>
                                
                                <div class="col-xs-4 col-lg-4 columns">
                                  <label>Prescription</label>
                                  <div id="dt1">
                                    <button id="add_drugs" type="button" class="btn btn-info">Add Current Prescription</button>       
                                  </div><br>
                                </div>

                                <div id="alcon">        
                                  <div class="col-xs-4 col-lg-4 columns">
                                    <label>Allergies</label><br />
                                    <div id="al1">
                                      <button id="add_allergy" type="button" class="btn btn-info">Allergies </button><br>    
                                      
                                    </div><br>
                                  </div>
                                </div>
                          </div>      
                        </div>       
                        <!-- END OF MEDICAL INFORMATION -->        
                        <legend></legend>  
                        <button id="sub" type="submit" class="btn btn-success">Submit</button><br><br>
                    </div>
                </div>    
              </form>
      </div>            
  </div>
</div>    
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;
    var rctr=1;

    $(document).ready(function(){
                $("#checkbox1").change(function() {
                  if(this.checked){
                    $('#checkbox1').val('Yes');
                    $('#usince').prop('disabled',false);
                  }
                  else{
                    $('#checkbox1').val('');
                    $('#usince').prop('disabled',true);
                  }
                });

                $("#checkbox2").change(function() {
                  if(this.checked){
                    $('#checkbox2').val('Yes');
                    $('#lsince').prop('disabled',false);
                  }
                  else{
                    $('#checkbox2').val('');
                    $('#lsince').prop('disabled',true);
                  }
                });

                $("#add_drugs").click(function(){
                  ctemp = cctr;
                  cctr+=1;
                    $('<div id="bdt' + cctr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvdt"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="dt' + cctr + '" class="form-control" name="adt[]" required></textarea>').insertAfter("#dt1");
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                  atemp = actr;
                  actr+=1; 
                    $('<div id="bal' + actr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmval"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="al' + actr + '" class="form-control" name="aal[]" required></textarea></div>').insertAfter("#al1");                
                });

                $("#add_chrail").click(function(){
                  rtemp = rctr;
                  rctr+=1;
                    $('<div id="bca' + rctr +'" style="position:relative; margin-top:5px;"><button type="button" style="right:0;width:20px;height:20px;text-align:center;" class="btn btn-danger rmvca"><span class="glyphicon glyphicon-remove" style="position:absolute;top:4px;left:7px;"></span></button><textarea id="ca' + rctr + '" class="form-control" name="aca[]" required></textarea></div>').insertAfter("#ca1");
                });
                
                $(document).on("click",".rmvca",function() {
                    var rca = $(this).parent().attr("id");
                    $('#' + rca).remove();
                });

                $(document).on("click",".rmval",function() {
                    var ral = $(this).parent().attr("id");
                    $('#' + ral).remove();
                });

                $(document).on("click",".rmvdt",function() {
                    var rdt = $(this).parent().attr("id");
                    $('#' + rdt).remove();
                });

                $("#sub").click(function(event){
                  if($('#add_patient').valid()){
                event.preventDefault();
                      $.getJSON("<?php echo base_url();?>patient/check_username/",{username:$('#username').val()},success=function(data){
                              if(data == '1'){
                                swal('ERROR','Username already exists','error');
                                event.preventDefault();
                              }
                              else{
                                event.preventDefault();
                            $.getJSON("<?php echo base_url();?>patient/check_patient/",{firstname:$('#firstname').val(),lastname:$('#lastname').val(),middlename:$('#middlename').val()},success=function(data){
                                    if(data == '1'){
                                      swal('ERROR','The person already have an account','error');
                                      event.preventDefault();
                                    }
                                    else
                                  $("#add_patient").submit();
                            });
                         }
                      });
                  }
                });

    });
</script>