<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Practice</title>
</head>
<body>
    <div class='form-container'>
        <div class="form-border">
            <?php
                echo form_open('signup_controller/data_submitted');

                echo form_label('Login Component');

                // username form
                echo form_label('Username');
                $data_username = array('name'=>'f_username',
                                       'id'=>'f_id_username',
                                       'class'=>'input_box form-control');
                echo form_input($data_username);
            
                //password form
                echo form_label('Password');
                $data_password = array('name'=>'f_password',
                                       'id'=>'f_id_password',
                                       'class'=>'input_box form-control');
                echo form_password($data_password);

                echo '<br>';

                echo form_submit('submit','Login', "class='btn btn-primary'");
           ?>

            <div class="login-redirect-container">
                <p class="login-redirect-context">Already have an account? &nbsp <a class="login-redirect-link" href="<?php echo site_url('signup')?>"> click here to login</a></p>
            </div>
        </div>
        
       
    </div>
</body>
</html>