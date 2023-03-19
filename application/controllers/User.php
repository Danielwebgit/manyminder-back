<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{

		$this->load->model('user_model');
		$record = $this->user_model->getRecord();
		header('Content-Type: application/json');
    	echo json_encode($record);
	}
}
