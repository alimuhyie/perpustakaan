<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Query_model extends CI_Model
{

    public function pinjam()
    {
        $data = $this->db->query('SELECT pinjam.`tglpinjam`, pinjam.`jmlbuku`, pinjam.`id`,pinjam.`lamapinjam`, anggota.`nama`, anggota.`kelas`, buku.`nama` AS namabuku , buku.`jumlahbuku`
        FROM pinjam
        JOIN anggota
        ON  pinjam.`id_peminjam` = anggota.`id` 
        JOIN buku ON pinjam.`id_buku` = buku.`id`');
        return $data;
    }

    public function kartu()
    {
        $anggota = $this->db->query("SELECT users.*, user_role.`user_role` AS status_anggota
                    FROM users
                    JOIN user_role 
                    ON users.`role_id` = user_role.`id`");
        return $anggota;
    }
}

/* End of file Query_model.php */
