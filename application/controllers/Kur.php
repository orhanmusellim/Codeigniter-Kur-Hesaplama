<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kur extends CI_Controller {

	public function index()
	{

		$xml = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
		$data['currentys'] = $xml;
		$data['sorguvar']  = FALSE;

		$this->load->view('home', $data);
	}

	
}
