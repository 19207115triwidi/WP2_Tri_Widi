<?php
defined('BASEPATH') OR exit('No direct scrip acces allowed');

class welcome extands CI_Controller {

	/**
	 * index page for this contoller.
	 * 
	 * maps to the following URL
	 *      https://example.com/index.php/welcome 
	 *  - or -
	 *      https://example.com/index.php/welcome/index
	 *  - or -
	 * since this controller is set as the default controller in 
	 * cofing/routes.php, it's desplayed at http://example.com/
	 * 
	 * so any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeighter.com/user_guide/general/urls.html
	 * /
	public funcion index()
	{
	$this->load->view('welcome_message');
	}
}
