<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Model {


        public function getJudulBeritaByKategori($kategori, $jumlah){
            $query = $this->db
                ->select("berita.id_berita, berita.judul, listkupasprofesi.nama_kupasprofesi")
                ->from("berita")
                ->join("listkupasprofesi", "berita.listkupasprofesi = listkupasprofesi.id_kupasprofesi")
                ->where("listkupasprofesi.nama_kupasprofesi", $kategori)
                ->order_by("berita.id_berita", 'DESC')
                ->limit($jumlah)
                ->get();
            return $query->result();
        }

        public function getJudulBeritaByKategoriAndLimit($kategori, $limit, $endpoint){
            $query = $this->db
                ->select("berita.id_berita, berita.judul, listkupasprofesi.nama_kupasprofesi")
                ->from("berita")
                ->join("listkupasprofesi", "berita.listkupasprofesi = listkupasprofesi.id_kupasprofesi")
                ->where("listkupasprofesi.nama_kupasprofesi", $kategori)
                ->order_by("berita.id_berita", 'DESC')
                ->limit($limit, $endpoint)
                ->get();
            return $query->result();
        }

        public function getBerita($jumlah){
            $query = $this->db->get('berita', $jumlah);
            return $query->result();
        }

        public function get_last_ten_entries()
        {
            $query = $this->db->get('entries', 10);
            return $query->result();
        }

        public function insert_entry()
        {
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}