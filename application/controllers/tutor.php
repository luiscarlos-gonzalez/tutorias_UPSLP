<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutor extends CI_Controller {

	public function eliminar(){

		$this->load->database();
		$this->load->helper('url');

		$key = $this->uri->segment(3);

		$this->db->delete("Tutor", array( "matricula" => $key ));

		redirect(base_url());
	}
	public function nuevo(){
		$this->load->database();
		$this->load->library("form_validation");
		$this->load->helper('url');

		$this->form_validation->set_rules("matricula", "Matricula", "required|integer");
		$this->form_validation->set_rules("nombre", "Nombre", "required");


		$this->load->view("header");
		if ($this->form_validation->run() == FALSE){
			$query = $this->db->get("Tutor");
			$this->load->view('upslp_view', array("tutores" => $query->result()));
		}
		else {
			$this->db->insert("Tutor", $_POST);

			$query = $this->db->get("Tutor");
			$this->load->view('upslp_view', array("tutores" => $query->result()));
		}
		$this->load->view("footer");
	}

}