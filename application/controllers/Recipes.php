<?php

/**
 * Description of Recipes
 *
 * @author Andris
 */
class Recipes extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
                $this->load->helper('url');
		$this->load->model('recipes_model');
	}

	public function index()
	{
		$data['recipes'] = $this->recipes_model->get_recipes();
                $data['title'] = 'Recipes archive';

                $this->load->view('recipes/index', $data);                
	}

	public function view($slug)
	{
		$data['recipes_item'] = $this->recipes_model->get_recipes($slug);
                if (empty($data['recipes_item']))
                {
                        exit('The error is here.'); 
                }

                $data['title'] = $data['recipes_item']['title'];

                $this->load->view('recipes/view', $data);
	}
        
        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Veikt jaunu receptes ierakstu';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        //$this->load->view('templates/header', $data);
                        $this->load->view('recipes/create');
                        //$this->load->view('templates/footer');

                }
                else
                {
                        $this->recipes_model->set_recipes();
                        $this->load->view('recipes/success');
                }
}
    
}
