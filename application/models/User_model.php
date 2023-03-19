<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function getRecord()
	{
        $responseArray = array("id" => 1, 'name' => 'Code Improve Website');
        
        return $responseArray;
	}
}
