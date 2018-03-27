<?php $this->load->view('header', array('num' => 4, 'title' => 'ABOUT US')); ?>
<!-- <div class="col-xs-10 col-xs-offset-1"> -->
<div class="col-xs-12 columns">
<div class="element-container">
<div class="row center-block">
  <div class="col-xs-5">  
    <!-- <div class="element-container"> -->
      <div class="panel panel-info text-center">
         <div class="panel-heading">
            <span class="glyphicon glyphicon-time"></span>
            <span><strong>Clinic Hours</strong></span>
         </div>
         <div class="panel-body">
           <p><strong>Monday to Saturday</strong></p>
           <p>7:30 AM - 4:00 PM (<i>Fall/Winter</i>)</p>
           <p>9:00 AM - 5:00 PM (<i>Summer</i>)</p>
           <br />
           <p><strong>Saturday</strong></p>
           <p>9:00am - 5:00pm</p>                          
         </div>
      </div>        
       <div class="panel panel-info text-center">
          <div class="panel-heading">
            <span class="glyphicon glyphicon-home"></span>
            <span><strong>Come Visit Us!!!</strong></span>
          </div>
          <div class="panel-body">
            <strong>Square One, Mississauga, Ontario</strong>
          </div>
      </div>  
      <div class="panel panel-info text-center">
          <div class="panel-heading">
            <span class="glyphicon glyphicon-phone-alt"></span>
            <span><strong>Contact Us</strong></span>
          </div>
          <div class="panel-body">
            <p><strong>123 - 7890</strong></p>
            <p><strong>234 - 0987</strong></p>
          </div>
      </div>      
    <!-- </div> -->
  </div>
  <div class="col-xs-7">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel-heading">
              <h3 class="text-center" style="color:rgb(60, 110, 178);margin-top:5px; font-weight:600">SERVICES OFFERED</h3>
          </div>
          <div class="panel panel-info text-center">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none" style="text-decoration:none">
                  <strong>General</strong>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="list-group list-grp-services">
              <?php foreach($general as $services):?>
                <li class="list-group-item"><?php echo $services->dental_procedure;?></li>
              <?php endforeach;?>
              </div>
            </div>
          </div>
      
          
      
          <div class="panel panel-info text-center">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-target="#collapseFour" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="text-decoration:none">
                  <strong>Orthodontic Dentistry</strong>
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="list-group list-grp-services">
                <?php foreach($orthodontic as $services):?>
                  <li class="list-group-item"><?php echo $services->dental_procedure;?></li>
                <?php endforeach;?>
              </div>
            </div>
          </div>
      <!-- 
          
      </div> -->
  </div>
  </div>  
  </div>
</div>
<?php $this->load->view('footer');?>
    