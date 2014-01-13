<?php
/**
 * Description of Recipes_model
 *
 * @author Andris
 */
class Recipes_model extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    public function get_recipes($slug = FALSE) {
        if($slug === FALSE) {
            $this->db->order_by("id", "desc");
            $query = $this->db->get('recipes');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('recipes', array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function set_recipes()
    {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                    'title' => $this->input->post('title'),
                    'slug' => $slug,
                    'text' => $this->input->post('text')
            );

            return $this->db->insert('recipes', $data);
    }
}
