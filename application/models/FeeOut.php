<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FeeOut extends CI_Model
{
    private $tableName = "t_feeOut";

    public function getAll()
    {
        return $this->db->get($this->tableName)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tableName, ["num_out" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
            
            $this->num_out            = uniqid();
            $this->time_out           = $post["timeOut"];
            $this->fee_out            = $post["feeOut"];
            $this->category_out       = $post["catOut"];
            $this->information        = $post["infOut"];
            $this->date_out           = $post["dateOut"];

        $this->db->insert($this->tableName, $this);
    }

    public function update()
    {
        $post = $this->input->post();
            
        $this->num_in             = $post['numOut'];
        $this->time_out           = $post["timeOut"];
        $this->fee_out            = $post["feeOut"];
        $this->category_out       = $post["catOut"];
        $this->information        = $post["infOut"];
        $this->date_out           = $post["dateOut"];

        $this->db->update($this->tableName, $this, array('num_out' => $post['numOut']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->tableName, array("num_out" => $id));
    }
}