<?php
/**
 * Description of Filter_model
 *
 * @author Andris
 */
class Filter_model extends CI_Model {

    public function get_results($filter_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('recipes');
        $this->db->like('kategorija',$filter_term);

        // Execute the query.
        $query = $this->db->get();
        //print_r($this->db->last_query());
        // Return the results.
        return $query->result_array();
    }

}
