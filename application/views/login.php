<?php
    $this->load->view('templates/header');
    $this->load->view('templates/navbar_forLogSign');
?>
<section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
                    <center><h1>Pieslēdzies www.edamkopa.lv</h1></center>
                    <div id='loginBorder'>
                        <?php
                        echo form_open('main/login_validation'); 

                        echo validation_errors();

                        echo "<p>Lietotājvārds:<br />";
                        echo form_input('username', $this->input->post('username'));        
                        echo "</p>";

                        echo "<p>Parole:<br />";
                        echo form_password('password');        
                        echo "</p>";

                        echo "<p id='submitbutton'>";
                       // $attributes = 'class = "login_input" id="login_submit"';
                        echo form_submit('login_submit', 'Login'/*, $attributes*/);        
                        echo "</p>";
                        echo form_close(); ?>
                        <p><a id='regLinks' href='<?php echo base_url()."main/signup"; ?>'>Reģistrēties!</a></p>
                    </div>
                    
                </div>
        </div>
</section>
 <?php                               
$this->load->view('templates/footer');