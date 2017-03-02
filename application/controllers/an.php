<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class an extends CI_Controller {

public function pre(){
	if(!empty($_POST))
	{
		$data['a']=$_POST;
		$this->load->view('prediction',$data);

		

	}
	else
	{
		$this->load->view('prediction');
	}
}

}