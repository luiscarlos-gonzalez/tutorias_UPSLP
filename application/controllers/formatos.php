<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formatos extends CI_Controller {
	public function analisis_semetre_anterior(){

		$this->load->helper("url");
		$this->load->database();

		$matricula = $this->uri->segment(3);

		$query = $this->db->get_where("Alumno", array("matricula" => $matricula));
		$alumno = $query->result();

		$query2 = $this->db->get_where("Kardex", array("matricula" => $matricula, "semestre" => $alumno[0]->semestre - 1));

		$this->load->view("header");
		$this->load->view("formato_1_view", array("alumno" => $query->result(), "kardex" => $query2->result()));
		$this->load->view("footer");
	}
}