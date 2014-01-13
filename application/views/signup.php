<?php
    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
?>
<section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
                    <center><h1>Reģistrācijas lapa</h1></center>
                    <center><p>Lai reģistrētos "Ēdam kopā!" mājaslapā, aizpildat zemāk<br />  esošo reģistrācijas formu: <br />* - obligāti aizpildāmie lauki</p></center>
                    <div id='loginBorder'>
  
                    <?php

                    echo form_open('main/signup_validation'); 

                    echo validation_errors();

                    echo "<p class='rakstamkopa'>Vārds: *";
                    echo form_input('firstname', $this->input->post('firstname'));        
                    echo "</p>";

                    echo "<p class='rakstamkopa'>Uzvārds: *";
                    echo form_input('lastname', $this->input->post('lastname'));        
                    echo "</p>";

                    echo "<p class='rakstamkopa'>E-pasts: *";
                    echo form_input('email', $this->input->post('email'));        
                    echo "</p>";

                    echo "<p class='rakstamkopa'>Lietotājvārds: *";
                    echo form_input('username', $this->input->post('username'));        
                    echo "</p>";

                    echo "<p class='rakstamkopa'>Parole: *";
                    echo form_password('password');        
                    echo "</p>";

                    echo "<p class='rakstamkopa'>Atkārtoti parole: *";
                    echo form_password('cpassword');        
                    echo "</p>";

                    echo "<p>";
                    $attributes = 'class="reg_input" id="reg_submit"';
                    echo form_submit('signup_submit', 'Reģistrēties!', $attributes);        
                    echo "</p>";
                    echo form_close();

                    ?>
                        </div>
</div>
        </div>
</section>
 <?php                               
$this->load->view('templates/footer');