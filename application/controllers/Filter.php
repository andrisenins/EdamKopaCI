<?php
/**
 * Description of Filter
 *
 * @author Andris
 */
class Filter extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->model('filter_model');
    }

    public function index()
    {
        $this->load->view('filter_form');
    }

    public function execute_filter()
    {
        // Retrieve the posted filter term.
        $filter_term = $this->input->post('filter');
        if($filter_term==NULL){
            redirect('recipes');
        }
        // Use a model to retrieve the results.
        $data['results'] = $this->filter_model->get_results($filter_term);
        // Pass the results to the view.
        $this->load->view('filter_results',$data);
    }

}
