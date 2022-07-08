<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Detail_model extends CI_Model {
        public function detail_tempat_wisata($id) {
            $this->db->where('id', $id);
            $this->db->delete('tempat_wisata');
        }
    }
?>