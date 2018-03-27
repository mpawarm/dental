<?php $this->load->view('header', array('num' => 0, 'title' => 'HOME')); ?>
            </div></div>
            <div class="hpage-bground"></div>        
            <div class="col-xs-8 col-xs-offset-1 columns" style="width:50%">
              <div class="element-container hpage-content">
                <h3 class="text-center"><strong>Welcome to the official website of <span style="color:rgb(51, 255, 102)">CS334 Dental Clinic (MDC)</span>.</strong></h3>                     
                    <p><i><strong>We provide care beyond your expectations</strong></i>.</p><br>
                    <p>Our dentist primary focus is on providing <i>gentle care</i>.</p><br>
                    <p>Dr Shalini Amlani, Dentist CS334 Dental Clinic, has provided comprehensive dental care for over 15 years. At CDC you’ll find convenient appointment times and a caring patient experience beyond your expectations.</p> <br> 
                    <p><strong>CS334 Dental Clinic (MDC)</strong> has been a trusted part of the local community for years because we believe that everyone should have access to quality dental care. Money should never dictate whether or not you can afford to have a healthy smile.</p><br>  
                    <p>CS334 Dental Clinic makes it easy to schedule your appointment before work, during lunch, or after you finish work for the day.Would you like to enjoy a healthier, brighter smile at affordable prices?</p><br>  
                    <p>So what are you waiting for? <a class="create-app" href="<?php echo base_url();?>calendar/display">book for an appointment</a> now.</p>
              </div>
            </div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#owl-demo").owlCarousel({
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true     
    });
  });
</script>