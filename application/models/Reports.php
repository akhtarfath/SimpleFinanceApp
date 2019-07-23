<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta'); 

class Reports extends CI_Model
{
    private $tableName = "t_reports";

    public function getAll()
    {
        $dateTime = date('Y-m-d');

        $this->db->select('t_reports.*, t_reports.saldo as saldo_total');
        $this->db->from('t_reports');
        $this->db->where('t_reports.date', $dateTime);
        $this->db->order_by('t_reports.num_report', 'DESC');
        $this->db->limit('1');
        $query = $this->db->get();

        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tableName, ["num_report" => $id])->row();
    }

    public function save($num_report = null)
    {
        $post = $this->input->post();
            
            $this->num_report   = uniqid();
            $this->date         = $post['dateIn'];
            $this->saldo        = $post['feeTotal'];

        $this->db->insert($this->tableName, $this);
    }
}