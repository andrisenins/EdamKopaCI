<?php
    $this->load->view('templates/header');
    $this->load->view('templates/navbar_forMembersRecipeMaking');
    ?>
<section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
			
                            <div class="rec_small_text">
                                 <?php                               
                                    $this->load->view('recipes/create');
                                    ?>
                               <a href="<?php echo base_url().'main/logout' ?>">Iziet</a> 
                            </div>
			</div>
		</div>
	</div>
</section>

        


 <?php                               
$this->load->view('templates/footer');

