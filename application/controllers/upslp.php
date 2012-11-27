<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upslp extends CI_Controller {
	public function index(){

		$this->load->helper('url');
		$this->load->database();
		$this->load->library("form_validation");

		//Obtiene los datos de los tutores actualmente registrados
		$query = $this->db->get("Tutor");

		$this->load->view("header");
		$this->load->view("upslp_view", array("tutores" => $query->result()));
		$this->load->view("footer");
	}
	public function alumnos(){

		$this->load->helper('url');
		$this->load->database();
		$this->load->library("form_validation");


		$query = $this->db->get("Alumno");

		$query2 = $this->db->get("Tutor");

		$this->load->view("header");
		$this->load->view("alumno_view", array("alumnos" => $query->result(), "tutores" => $query2->result()));
		$this->load->view("footer");
	}

	public function materias(){

		$this->load->helper('url');
		$this->load->database();
		$this->load->library("form_validation");

		$query = $this->db->get("Materia");

		$this->load->view("header");
		$this->load->view("materias_view", array("materias" => $query->result()));
		$this->load->view("footer");
	}
}
