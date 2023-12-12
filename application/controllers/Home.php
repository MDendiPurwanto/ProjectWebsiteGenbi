<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('beranda');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function pengurus()
	{
		$this->load->view('pengurus');
	}
    public function beasiswa()
{
    $this->load->view('beasiswa');
}

public function beasiswa_detail()
{
    $this->load->view('beasiswa-detail');
}

public function contact()
{
    $this->load->view('contact');
}

public function galeri()
{
    $this->load->view('galeri');
}

public function muri()
{
    $this->load->view('muri');
}

public function p_bichamps()
{
    $this->load->view('p-bichamps');
}

public function program()
{
    $this->load->view('program');
}

public function blog()
{
    $this->load->view('blog');
}

public function tentangbi()
{
    $this->load->view('tentangbi');
}

public function cef()
{
    $this->load->view('cef');
}

public function login()
{
    $this->load->view('login');
}

public function persyaratan()
{
    $this->load->view('persyaratan');
}

}
