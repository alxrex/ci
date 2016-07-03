<?php
class Usuario_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_all()
        {
                $query = $this->db->query("SELECT * FROM usuario");
                return $query;
        }

        public function insert($data)
        {
                $this->db->insert('usuario', $data);
        }

        public function update($data,$id)
        {
                $this->db->update('usuario', $data, array('id' => $id));
        }


        public function delete($id)
        {
                $this->db->delete('usuario',  array('id' => $id));
        }

}

?>