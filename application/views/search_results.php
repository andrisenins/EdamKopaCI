<?php
$this->load->library('session');
$this->load->view('templates/header');
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('templates/navbar_forMembers');
        } else {$this->load->view('templates/navbar');
            }
    $this->load->helper('text');
?>
  <section>

	<div  id="sec_one">
		<div id="sec_one_1" class="sectionParting leftFloat">
                    <h1>Meklēšanas rezultāti</h1>
                    <?php
                        // List up all results.
                        foreach ($results as $val)
                        {?>
                            <div class="rec_small">
                              <div class="rec_small_text">
                            <?php
                                echo '<h2>'.$val['title'].'</h2>';
                                $string = $val['text'];
                                $string = word_limiter($string,40);
                                echo $string;
                                ?>
                                <p><a href="<?php echo site_url('recipes/view/' . $val['slug']); ?>">Turpināt lasīt</a></p>
                              </div>
                            </div>
                       <?php }
                    ?>
                </div>
        </div>
  </section>

<?php                                
    $this->load->view('templates/footer');