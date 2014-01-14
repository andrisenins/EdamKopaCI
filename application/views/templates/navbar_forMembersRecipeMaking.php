<?php $this->load->helper('url'); ?>
<nav id="navigator">
	<div id="logo">
            <a onclick="openmenu('one');return false;"> <img src="../../img/logo.png" alt="logo"/></a>
	</div>
	<div id="menu">
		<a href="<?php echo site_url('recipes');?>" title="Receptes" id="one">Receptes</a>
                	
		<a href="<?php echo site_url('main/members');?>" title="Jauna recepte" id="two" >Jauna recepte</a>
                <a id="logpop" href="<?php echo base_url().'main/logout' ?>" title="Izlogoties">Iziet</a>
		<div>
			<br />
		</div>
	</div>
</nav>