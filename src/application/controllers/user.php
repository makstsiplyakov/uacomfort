<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'controllers/crank.php');

class User extends Crank {

	public function __construct()
	{
		parent::__construct();	
		$this->include_css('user.css');
		$this->include_keywords('отдых');
		$this->set_description('Это сайт');
		$this->set_title('Page title');
	}
}

/* End of file crank.php */
/* Location: ./application/controllers/crank.php */