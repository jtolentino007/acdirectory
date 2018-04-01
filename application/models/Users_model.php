<?php
  class Users_model extends AIMS_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function get_user_by_id($id = 0)
    {
      if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
  }

?>
