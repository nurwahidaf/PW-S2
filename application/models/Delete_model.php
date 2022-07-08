<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Delete_model extends CI_Model {
        public function delete_tempat_wisata($id) {
            $this->db->where('id', $id);
            $this->db->delete('tempat_wisata');
        }

        public function delete_jenis_wisata($id) {
            $this->db->where('id', $id);
            $this->db->delete('jenis_wisata');
        }

        public function delete_kecamatan($id) {
            $this->db->where('id', $id);
            $this->db->delete('kecamatan');
        }

        public function delete_users($id) {
            $this->db->where('id', $id);
            $this->db->delete('users');
        }
        
        public function delete_komentar($id) {
            $this->db->where('id', $id);
            $this->db->delete('komentar');
        }
    }
?>