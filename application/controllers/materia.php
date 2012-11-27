<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materia extends CI_Controller {

	public function eliminar(){

		$this->load->database();

		$key = $this->uri->segment(3);

		$this->db->delete("Materia", array( "clave" => $key ));
	}
	public function nuevo(){
		$this->load->database();
		$this->load->library("form_validation");
		$this->load->helper('url');

		$this->form_validation->set_rules("clave", "Clave", "required");
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("semestre", "Semestre", "required|integer");


		if ($this->form_validation->run() == FALSE){
			$query = $this->db->get("Materia");
			$this->load->view('materias_view', array("materias" => $query->result()));
		}
		else {
			$this->db->insert("Materia", $_POST);

			$query = $this->db->get("Materia");
			$this->load->view('materias_view', array("materias" => $query->result()));
		}
	}

}