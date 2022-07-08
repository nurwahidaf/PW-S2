<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Edit_model extends CI_Model {
        // public function edit_data_tempat($where, $table) {
        //     return $this->db->get_where($table, $where);
        // }
        public function id_tempat_wisata($id) {
            $this->db->select('*');
            $this->db->from('tempat_wisata');
            $this->db->where('id', $id);
            return $this->db->get();
        }

        public function edit_tempat_wisata($data, $id) {
            $this->db->update('tempat_wisata', $data, array('id' => $id));
            return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
            // $data = [
            //     "nama" => $this->input->post('tempat_wisata'),
            //     "alamat" => $this->input->post('alamat'),
            //     "latlong" => $this->input->post('latlong'),
            //     "jenis_id" => $this->input->post('jenis_wisata'),
            //     "skor_rating" => $this->input->post('rating'),
            //     "harga_tiket" => $this->input->post('harga_tiket'),
            //     "kecamatan_id" => $this->input->post('kecamatan'),
            //     "website" => $this->input->post('website'),
            //     "fasilitas" => $this->input->post('fasilitas')
            // ];
            // $this->db->where('id', $this->input->post('id'));
            // $this->db->update('tempat_wisata', $data);
        }

        public function id_users($id) {
            return $this->db->get_where('users', ['id' => $id])->row_array();
        }

        public function edit_users($id) {
            $data = [
                "username" => $this->input->post('username'),
                "password" => $this->input->post('password'),
                "email" => $this->input->post('email'),
                "created_at" => $this->input->post('created_at'),
                "last_login" => $this->input->post('last_login'),
                "status" => $this->input->post('status'),
                "role" => $this->input->post('role')
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('users', $data);
        }
    }
?>