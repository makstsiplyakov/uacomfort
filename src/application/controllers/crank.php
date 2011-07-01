<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->params['base']=$this->config->config['base_url'];
		$this->params['base_img']=$this->config->config['base_url'].'static/images/';
		$this->params['base_css']=$this->config->config['base_url'].'static/css/';
		$this->params['base_js']=$this->config->config['base_url'].'static/js/';
		$this->params['include_css'] = array();
		$this->params['include_js'] = array();
		$this->params['include_keywords'] = array();
		$this->include_css('main.css');
		$this->include_js('jquery/jquery.min.js');
	}
	
	protected function include_view($viewname, $data= array())
	{
		$header = $this->load->view('header_view',$data);
		$body = $this->load->view($viewname,$data);
		$footer = $this->load->view('footer_view',$data);
		return $header.$body.$footer;
	}
	
	protected function include_css($string)
	{
		$this->params['include_css'][] = "<link rel='stylesheet' href='".$this->params['base_css'].$string."' type='text/css'/>";
		return true;
	}
	
	protected function include_js($string)
	{ 
		$this->params['include_js'][] = "<script type='text/javascript' src='".$this->params['base_js'].$string."'></script>";
		return true;
	}
	
	protected function include_keywords($string)
	{ 
		$count = count($this->params['include_keywords']);
		if ($count==0)$this->params['include_keywords'][] = $string;
		else $this->params['include_keywords'][] = ', '.$string;
		return true;
	}
	
	protected function set_description($string)
	{ 
		$this->params['include_description'] = $string;
		return true;
	}
	
	protected function set_title($string)
	{ 
		$this->params['title_page'] = $string;
		return true;
	}
}

/* End of file crank.php */
/* Location: ./application/controllers/crank.php */