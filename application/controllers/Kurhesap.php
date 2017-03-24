<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurhesap extends CI_Controller {

	public function index()
	{
		$xml = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

		$data['currentys'] = $xml;

		$key = $this->input->post('kurtipi');
		foreach ($xml as $Currency) {
			if ($Currency['Kod'] == $key){
				$data['dovizadi']			=	$Currency->Isim;
				$data['dovizalis']			=	$Currency->ForexBuying;
				$data['dovizsatis']			=	$Currency->ForexSelling;
			}
			
		}


		$data['sorguvar']  = TRUE;

		$this->load->view('home', $data);
	}

	
}
