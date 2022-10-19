<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Query_model extends CI_Model
{

    public function pinjam()
    {
        $data = $this->db->query('SELECT pinjam.`id`, users.`nama`,users.`alamat`, buku.`nama` AS namabuku , buku.`jumlahbuku`, pinjam.`lamapinjam`
        FROM pinjam
        JOIN users
        ON  pinjam.`id_peminjam` = users.`id` 
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

    public function buat_id($nama_tabel, $kodeawal, $idkode, $orderbylimit)
    {
        $query = $this->db->query("select * from $nama_tabel $orderbylimit"); // cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() > 0) {
            //jika kode ternyata sudah ada.
            $hasil = $query->row();
            $kd = $hasil->$idkode;
            $cd = $kd;
            $nomor = $query->num_rows();
            $kode = $cd + 1;
            $kodejadi = $kodeawal . "00" . $kode;    // hasilnya CUS-0001 dst.
            $kdj = $kodejadi;
        } else {
            //jika kode belum ada
            $kode = 0 + 1;
            $kodejadi = $kodeawal . "00" . $kode;    // hasilnya CUS-0001 dst.
            $kdj = $kodejadi;
        }
        return $kdj;
    }
}

/* End of file Query_model.php */
