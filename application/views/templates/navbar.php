<?php $this->load->helper('url'); ?>
<nav id="navigator">
	<div id="logo">
            <a onclick="openmenu('one');return false;"> <img src="../../img/logo.png" alt="logo"/></a>
	</div>
	<div id="menu">
		<a href="<?php echo site_url('recipes');?>" title="Receptes" id="one">Receptes</a>
                <a id="logpop" href="<?php echo site_url('main/login');?>" title="Pieslēgties">Pieslēgties</a>	
		<a href="<?php echo site_url('main/signup');?>" title="Reģistrēties" id="two" >Reģistrēties</a>
		<div>
                    
			<input id="search" type="name" name="name" placeholder="Meklēt...">
			<button for="search" id="search_button" type="submit">
                            <img src="../../img/search-arrow.png" alt="search"/>
			</button>
		</div>
	</div>
</nav>