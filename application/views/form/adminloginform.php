

<?php $attributes = array('role' => 'form'); ?>
<?php echo form_open('AdminLogin/adminLogin',$attributes); ?>

    
    <fieldset>
        <!--  Email -->
        <div class="form-group">
            <?php // echo form_label('Username'); ?>
            <?php
                
                $data = array(
                    'class' => 'form-control',
                    'placeholder' => 'E-mail',
                    'type' => 'text',
                    'name' => 'email'
                );
            ?>
            <?php echo form_input($data); ?>
            
            <span style="font-size:11px;color:red">
            <?php if($this->session->flashdata('email_error')):
               echo $this->session->flashdata('email_error');
           endif; ?>
                </span>
            
        </div>
        
        <!--  Password -->
        <div class="form-group">
            
            <?php
                
                $data = array(
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                    'type' => 'password',
                    'name' => 'password'
                );
            ?>
           
            <?php echo form_input($data); ?>
            
            <span style="font-size:11px;color:red">
            <?php if($this->session->flashdata('password_error')):
               echo $this->session->flashdata('password_error');
           endif; ?>
                </span>
        </div>
        
        
        <!--  login Button -->
        <?php 
             $data = array(
                    'class' => 'btn btn-lg btn-success btn-block',
                    'type' => 'submit',
                    'value' => 'Login'
                );
            
             echo form_submit($data);
             
             
        ?>
        


    </fieldset>
    
    
<?php echo form_close(); ?>



