<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FeeIn extends CI_Model
{
    private $tableName = "t_feeIn";

    public $numIn;
    public $timeIn;
    public $dateIn;
    public $feeIn;
    public $catIn;
    public $informationIn;

    public function rules() {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

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
            
            $this->numIn = uniqid();
            $this->timeIn           = $post["timeIn"];
            $this->dateIn           = $post["dateIn"];
            $this->feeIn            = $post["feeIn"];
            $this->catIn            = $post["catIn"];
            $this->InformationIn    = $post["infIn"];

        $this->db->insert($this->tableName, $this);
    }

    public function update()
    {
        $post = $this->input->post();
            
        $this->numIn            = $post['numIn'];
        $this->dateIn           = $post["dateIn"];
        $this->feeIn            = $post["feeIn"];
        $this->catIn            = $post["catIn"];
        $this->InformationIn    = $post["informationIn"];

        $this->db->update($this->tableName, $this, array('num_in' => $post['numIn']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->tableName, array("num_in" => $id));
    }
}