<?php
    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
    $this->load->helper('text');
?>
<section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
			<h1>Jaunākās receptes: </h1>
			<?php foreach ($recipes as $recipes_item): ?>
			<div class="rec_small">
                            <div class="rec_small_text">
				<h2><?php echo $recipes_item['title'] ?></h2>
                               <!-- <p><?php echo $recipes_item['text'] ?></p>-->
                                <?php
                                $string = $recipes_item['text'];
                                $string = word_limiter($string,80);
                                echo $string;
                                ?>
                                <p><a href="<?php echo site_url('recipes/view/' . $recipes_item['slug']); ?>">Turpināt lasīt</a></p>
                            </div>
			</div>
                        <?php endforeach; ?>
		</div>
		<div id="sec_one_2" class="sectionParting leftFloat">
			Filtri
		 
		</div>
	</div>
</section>
 <?php                               
$this->load->view('templates/footer');