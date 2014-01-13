<?php
    $this->load->view('templates/header');
    $this->load->view('templates/navbar');?>
    <section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
			<h1>Jaunākās receptes: </h1>
			<div class="rec_small">
                            <div class="rec_small_text">
                                <?php
                                    echo '<h2>'.$recipes_item['title'].'</h2>';
                                    echo $recipes_item['text'];
                                ?>
                            </div>
                        </div>
                </div>
        </div>
    </section>
<?php                                
    $this->load->view('templates/footer');