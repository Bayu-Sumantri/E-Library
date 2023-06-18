<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah_sakit extends CI_Model
{

	public function display()
	{
		return $this->db->query("SELECT * FROM jurnal")->result();
	}
	public function live_prievew()
	{
		return $this->db->query("SELECT * FROM jurnal")->row();
	}
    public function cari_data($id_user)
    {
        return $this->db->query("SELECT * FROM tblogin1 where id_user='$id_user'")->row();
    }
        public function cari_data1($id_buku)
    {
        return $this->db->query("SELECT * FROM jurnal where id_buku='$id_buku'")->row();
    }
    public function list_account()
	{
		return $this->db->query("SELECT * FROM tblogin1")->result();
	}
	public function hapus_account_admin($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}