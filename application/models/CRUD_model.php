<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CRUD_model extends CI_Model {
        public function getAll($table) {
            return $this->db->get($table)->result();
        }

        public function findById($table, $id) {
            return $this->db->get_where($table, ['id' => $id])->row();
        }

        public function findByEmail($table, $email) {
            return $this->db->get_where($table, ['email' => $email])->row();
        }
        
        public function jenis_wisata() {
            return $this->db->get('jenis_wisata')->result();
        }

        // Join table tempat_wisata, kecamatan, jenis_wisata
        
        public function join_tempat_wisata($id = null) {
            $this->db->select('tempat_wisata.*, jenis_wisata.nama as jenis, kecamatan.nama as kecamatan');
            $this->db->from('tempat_wisata');
            $this->db->join('jenis_wisata', 'jenis_wisata.id=tempat_wisata.jenis_id');
            $this->db->join('kecamatan', 'kecamatan.id=tempat_wisata.kecamatan_id');
            $query = $this->db->get();
            return $query->result();
        }

        public function id_detail_tempat($id) {
            return $this->db->get_where('tempat_wisata', ['id' => $id])->row_array();
        }

        public function detail_tempat($id) {
            $data = [
                "nama" => $this->input->post('tempat_wisata'),
                "alamat" => $this->input->post('alamat'),
                "latlong" => $this->input->post('latlong'),
                "jenis_id" => $this->input->post('jenis_wisata'),
                "skor_rating" => $this->input->post('rating'),
                "harga_tiket" => $this->input->post('harga_tiket'),
                "kecamatan_id" => $this->input->post('kecamatan'),
                "website" => $this->input->post('website'),
                "fasilitas" => $this->input->post('fasilitas')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->get('tempat_wisata', $data);
        }

        // Join table komentar, tempat_wisata
        
        // public function join_komentar($id = null) {
        //     $this->db->select('komentar.*, tempat_wisata.id as wisata, tempat_wisata.skor_rating as rating');
        //     $this->db->from('komentar');
        //     $this->db->join('tempat_wisata', 'tempat_wisata.id=komentar.wisata_id & tempat_wisata.skor_rating as komentar.nilai_rating_id');
        //     $this->db->join('users', 'kecamatan.id=tempat_wisata.kecamatan_id');
        //     $query = $this->db->get();
        //     return $query->result();
        // }
    }
?>