<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FeeOut extends CI_Model
{
    private $tableName = "t_feeOut";

    public $numOut;
    public $dateOut;
    public $feeOut;
    public $catOut;
    public $informationOut;

    public function rules() {
        // return [
        //     ['field' => 'name',
        //     'label' => 'Name',
        //     'rules' => 'required'],

        //     ['field' => 'price',
        //     'label' => 'Price',
        //     'rules' => 'numeric'],
            
        //     ['field' => 'description',
        //     'label' => 'Description',
        //     'rules' => 'required']
        // ];
    }

    public function getAll()
    {
        return $this->db->get($this->tableName)->result();
    }
}