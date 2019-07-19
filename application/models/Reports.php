<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Model
{
    private $tableName = "t_feeIn";

    public function getAll()
    {
        return $this->db->get($this->tableName)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tableName, ["num_in" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
            
            $this->num_in       = uniqid();
            $this->date         = $post[''];
            $this->saldo        = $post[''];

        $this->db->insert($this->tableName, $this);
    }
}