<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Insert_model extends CI_Model {
        public function insert_tempat_wisata() {
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
            $this->db->insert('tempat_wisata', $data);
        }

        public function insert_jenis_wisata() {
            $data = [
                "nama" => $this->input->post('jenis_wisata'),
            ];
            $this->db->insert('jenis_wisata', $data);
        }

        public function insert_kecamatan() {
            $data = [
                "nama" => $this->input->post('kecamatan'),
            ];
            $this->db->insert('kecamatan', $data);
        }
        
        public function insert_users() {
            $data = [
                "username" => $this->input->post('username'),
                "password" => $this->input->post('password'),
                "email" => $this->input->post('email'),
                "created_at" => $this->input->post('created_at'),
                "last_login" => $this->input->post('last_login'),
                "status" => $this->input->post('status'),
                "role" => $this->input->post('role')
            ];
            $this->db->insert('users', $data);
        }

        public function insert_komentar() {
            $data = [
                "nama" => $this->input->post('komentar'),
            ];
            $this->db->insert('komentar', $data);
        }
    }
?>