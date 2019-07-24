<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

    public function getIn()
    {   
        $this->db->select('*, SUM(t_feeIn.fee_in) as pemasukkan, COUNT(t_feeIn.num_in) as masuk'); 
        $this->db->join('t_categoryIn', 't_feeIn.id_categoryIn = t_categoryIn.id_categoryIn');
        $this->db->from('t_feeIn');

        $query = $this->db->get();

        return $query->result();
        // return $this->db->get($this->tableName)->result();
    }

    public function getOut()
    {
        $this->db->select('*, SUM(t_feeOut.fee_out) as pengeluaran, COUNT(t_feeOut.num_out) as keluar'); 
        $this->db->join('t_categoryOut', 't_feeOut.id_categoryOut = t_categoryOut.id_categoryOut');
        $this->db->from('t_feeOut');

        $query = $this->db->get();

        return $query->result();
        // return $this->db->get($this->tableName)->result();
    }

    public function getReport() 
    {
        $this->db->select('*, SUM(t_reports.saldo) as tabungan'); 
        $this->db->from('t_reports');

        $query = $this->db->get();

        return $query->result();
    }
}