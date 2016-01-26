<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.min.css'); ?>">

<style type="text/css">
  .btn {
    color: #fff;
  }
  html {
    background-color: #E7E7E7;
  }
  .form-pad {
    padding: 40px;
  }/*
  .alert-msg {
    text-align: center;
    height: 20px;
    background-color: #38A77A;
    align-content: center;
    width: 50%;
    margin: 0 auto;
    color: #fff;
    padding: 10px;
    border-radius: 2px;
  }*/
    .alert-msg {
      background: #FF0042;
      color: #fff ;
      border-radius:5px;
      width: 50%;
      text-align: center;
      margin: 0 auto;
    }
    .frgot-pass {
      background: #1B7669;
    }
</style>

 <div class="uk-vertical-align uk-text-center uk-height-1-1">
    <div class=" uk-vertical-align-middle" style="width: 500px;">
      <div>
        <img class="uk-margin-bottom" src="<?php echo base_url('assets/img/cpanel.png'); ?>"> <br/><br/>
      </div>
      <!--   <h1>CMS4 Control Panel</h1> -->
        <div> <?php echo lang('login_subheading');?> </div>
        <br/>
         <?php  
            $att = array(
                'class' => 'uk-panel uk-panel-box uk-form uk-form-horizontal',
                'style' => 'padding:25px;'
            );
            echo form_open('auth/login',$att);
          ?> 

        <div class="alert-msg uk-animation-fade uk-animation-reverse uk-animation-15" id="infoMessage"><?php echo $message;?></div> <br/><br/> 
        <form>
            <div class="uk-form-row">
               <span>
                <label class="uk-form-label">
                  <?php echo lang('login_identity_label', 'identity');?>
                </label>
                 <div class="uk-form-controls">
                    <?php echo form_input($identity);?>
                </div>
              </span>  
            </div>

            <div class="uk-form-row">
                <label class="uk-form-label">
                  <?php echo lang('login_password_label', 'password');?>
                </label>
                <div class="uk-form-controls">
                    <?php echo form_input($password);?>
                </div>
            </div>
            <div class="uk-form-row uk-text-small"> <br/>
              <label class="uk-form-label">
                  <?php echo lang('login_remember_label', 'remember');?>
                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              </label>
              <div class="uk-form-controls">
                    <?php
                      $att1 = array(
                        'class'=> 'uk-width-1-3 uk-button uk-button-large',
                        'style' => 'color:#fff; background: #1B7669',
                        'submit' => 'Submit',
                        'value' => 'Login'
                      );
                      echo form_submit($att1);
                    ?>
                </div>
            </div>
            
            <?php echo form_close();?>
        </form>
        <div class="uk-width-1">
          <div class="uk-panel uk-panel-box frgot-pass">
            <a style="color:#fff;" href="forgot_password"><?php echo lang('login_forgot_password');?></a>
          </div>
        </div>
    </div>
</div>

<!-- 
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
