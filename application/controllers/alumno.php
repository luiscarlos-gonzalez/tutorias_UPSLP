<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno extends CI_Controller {

	public function eliminar(){

		$this->load->database();
		$this->load->helper('url');

		$key = $this->uri->segment(3);

		$this->db->delete("Alumno", array( "matricula" => $key ));

		redirect(base_url().'index.php/upslp/alumnos');
	}

	public function nuevo(){
		$this->load->database();
		$this->load->library("form_validation");
		$this->load->helper('url');

		$this->form_validation->set_rules("matricula", "Matricula", "required|integer");
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("carrera", "Carrera", "required");
		$this->form_validation->set_rules("semestre", "Semestre", "required");
		$this->form_validation->set_rules("grupo", "Grupo", "required");
		$this->form_validation->set_rules("matriculaTutor", "Matricula", "required");


		$this->load->view("header");
		if ($this->form_validation->run() == FALSE){

			$query = $this->db->get("Alumno");
			$query2 = $this->db->get("Tutor");

			$this->load->view('alumno_view', array("alumnos" => $query->result(), "tutores" => $query2->result()));
		}
		else {
			$this->db->insert("Alumno", $_POST);

			$query = $this->db->get("Alumno");
			$query2 = $this->db->get("Tutor");

			$this->load->view('alumno_view', array("alumnos" => $query->result(), "tutores" => $query2->result()));
		}
		$this->load->view("footer");
	}

}