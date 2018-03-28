<?php
  class Establishment_category_model extends AIMS_Model
  {

    public function __construct()
    {
      $this->load->database();
    }

    public function get_est_categories($est_cat_name = FALSE)
    {
      if ($est_cat_name === FALSE)
      {
        $query = $this->db->get('est_category');
        return $query->result_array();
      }

      $query = $this->db->get_where('est_category', array('est_category_name' => $est_cat_name));
      return $query->row_array();
    }

    public function get_est_category_by_id($id = 0)
    {
      if ($id === 0)
        {
            $query = $this->db->get('est_category');
            return $query->result_array();
        }

        $query = $this->db->get_where('est_category', array('est_category_id' => $id));
        return $query->row_array();
    }

    public function set_est_category($id = 0)
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('est_category_name'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        if ($id == 0) {
            return $this->db->insert('est_category', $data);
        } else {
            $this->db->where('est_category_id', $id);
            return $this->db->update('est_category', $data);
        }
    }

    public function delete_est_category($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('est_category');
    }
  }

?>
