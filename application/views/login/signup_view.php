<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>CI Practice</title>
</head>
<body>
    <div class='form-container'>
        <div class='form-border'>
        <?php
            echo form_open('signup_controller/data_submitted');

            echo form_label('Register component');
            echo '<br>';
            // username form
            echo form_label('Username');
            $data_username = array('name'=>'f_username',
                                   'id'=>'f_id_username',
                                   'class'=>'input_box form-control');
            
            echo form_input($data_username);
            
            // password form
            echo form_label('Password');
            $data_password = array('name'=>'f_password',
                                   'id'=>'password_id',
                                   'class'=>'input_box form-control',
                                   'placeholder'=>'Enter Password');

            echo form_password($data_password);

            echo '<br>';

            echo form_submit('submit', 'Register', "class='btn btn-primary submit'");

            echo form_close();

            // retrieving user input data
            if(isset($username) && isset($password)){
                // echo '<p>Username : '.$username.'</p>';
                // echo '<p>Password : '.$password.'</p>';
            }

        ?> 

            <div class="login-redirect-container">
                <p class="login-redirect-context">Already have an account? &nbsp <a class="login-redirect-link" href="<?php echo site_url('signup/login');?>"> click here to login</a></p>
            </div>
        </div>
    </div>
</body>
</html>