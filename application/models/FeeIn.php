<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FeeIn extends CI_Model
{
    private $tableName = "t_feeIn";

    public function getAll()
    {
        $dateTime = date('Y-m-d');
        
        $this->db->select('*'); 
        $this->db->join('t_categoryIn', 't_feeIn.id_categoryIn = t_categoryIn.id_categoryIn');
        $this->db->from('t_feeIn');
        $this->db->where('t_feeIn.date_in', $dateTime);
        $this->db->order_by('t_feeIn.time_in', 'ASC');

        $query = $this->db->get();

        return $query->result();
        // return $this->db->get($this->tableName)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tableName, ["num_in" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
            
            $this->num_in            = uniqid();
            $this->time_in           = $post["timeIn"];
            $this->fee_in            = $post["feeIn"];
            $this->id_categoryIn     = $post["catIn"];
            $this->information       = $post["infIn"];
            $this->date_in           = $post["dateIn"];

        $this->db->insert($this->tableName, $this);
    }

    public function update()
    {
        $post = $this->input->post();
            
        $this->num_in            = $post['numIn'];
        $this->time_in           = $post["timeIn"];
        $this->fee_in            = $post["feeIn"];
        $this->category_in       = $post["catIn"];
        $this->information       = $post["infIn"];
        $this->date_in           = $post["dateIn"];

        $this->db->update($this->tableName, $this, array('num_in' => $post['numIn']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->tableName, array("num_in" => $id));
    }
}