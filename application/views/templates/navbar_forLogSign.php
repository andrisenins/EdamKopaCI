<?php $this->load->helper('url'); ?>
<nav id="navigator">
	<div id="logo">
            <a onclick="openmenu('one');return false;"> <img src="../../img/logo.png" alt="logo"/></a>
	</div>
	<div id="menu">
		<a href="<?php echo site_url('recipes');?>" title="Receptes" id="one">Receptes</a>
                <a id="logpop" href="<?php echo site_url('main/login');?>" title="Pieslēgties">Jauna Recepte</a>	
		<a href="<?php echo site_url('main/signup');?>" title="Reģistrēties" id="two" >Reģistrēties</a>
		<div>
               <br />     

		</div>
	</div>
</nav>