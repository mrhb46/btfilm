<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vietsubvnsharing extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('simple_html_dom');
	}

	public function index()
	{
		echo "index";
	}
	
	public function crawlAllMovie()
	{
		$urlhome = "http://vietsub.vnsharing.net/DanhSach";
		$urlcrawl = "http://vietsub.vnsharing.net/DanhSach?page=";
		$urltemp = "http://vietsub.vnsharing.net/DanhSach";
		
		$html = file_get_html($urltemp);
		$max = $ret = $html->find('ul.pager', 0)->last_child()->find('a', 0)->href;
		$
		var_dump($pages);
	}
}