<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Global_model extends CI_Model
{
	public function login($email_user = '', $password = '')
    {
        $this->db->select('*');
        $this->db->from('tblogin1');
        // Join Tabel
        $this->db->where(array(
            'email_user'    => $email_user,
            'password'    => $password
        ));
        $query = $this->db->get();
        return $query->row();
    }
// user
    public function alluser()
    {
        $this->db->select('*');
        // $this->db->join('master_leveluser', 'master_leveluser.id_level = master_user.id_level', 'left outer');
        return $this->db->get('tblogin1')->result();
    }
    public function selectidmaster_user($param)
    {
        $this->db->select('*');
        $this->db->where($param);
        return $this->db->get('tblogin1')->row();
    }
     public function selectidsimplemaster_user($id_user)
    {
        $this->db->select('*');
        $this->db->where('id_user',$id_user);
        return $this->db->get('tblogin1')->row();
    }
    public function selectallmaster_user($param)
    {
        $this->db->select('*');
        $this->db->where($param);
        return $this->db->get('tblogin1')->result();
    }
    public function selectallmaster_leveluser()
    {
        $this->db->select('*');
        return $this->db->get('master_leveluser')->result();
    }

    public function updatemaster_user($id_user, $dataupdate)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('tblogin1', $dataupdate);
    }

}