<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'controllers/front.php');

class Main extends Front {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model("Main_model");
		
	}
	public function index()
	{
	/* Примеры использования crank функций
		$this->set_title('Главная');
		$this->include_keywords('главная страница');
		$this->set_description('Это наш сайт');
		$this->include_js('jquery/jquery.min.js');
		$this->include_css('main.css');
	*/
		$this->include_view('main_view',$this->params);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */