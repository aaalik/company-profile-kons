<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function getPaket()
	{
		$query = $this->db->get("tb_paket");
        return $query;
    }
    
    public function detailPaket($urltitle)
    {
        $this->db->where('url_title',$urltitle);
		$query = $this->db->get('tb_paket');
        return $query->row();
    }

}
