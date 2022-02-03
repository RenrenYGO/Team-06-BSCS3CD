<?php


		class Whatsauce_model extends CI_Model{

			public function __construct(){
				$this->load->database();
			}

            public function get_whatsauces(){
                $this->db->order_by('id','DESC');
                $query = $this->db->get('whatsauce');
                return $query->result_array();
            }
    
            public function get_whatsauce($id){
                $query = $this->db->get_where('whatsauce', array('id' => $id));
                return $query->row();
            }

        }