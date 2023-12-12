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
		$this->load->view('header');
		$this->load->view('beranda');
		$this->load->view('footer');
		
	}
	public function about()
	{
        $this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function pengurus()
	{
		$this->load->view('header');
		$this->load->view('pengurus');
		$this->load->view('footer');
	}
    public function beasiswa()
{
	$this->load->view('header');
    $this->load->view('beasiswa');
	$this->load->view('footer');
}

public function beasiswa_detail()
{
	$this->load->view('header');
    $this->load->view('beasiswa-detail');
	$this->load->view('footer');
}

public function contact()
{
	$this->load->view('header');
    $this->load->view('contact');
	$this->load->view('footer');
}

public function galeri()
{
	$this->load->view('header');
    $this->load->view('galeri');
	$this->load->view('footer');
}

public function muri()
{
	$this->load->view('header');
    $this->load->view('muri');
	$this->load->view('footer');
}

public function p_bichamps()
{
	$this->load->view('header');
    $this->load->view('p-bichamps');
	$this->load->view('footer');
}

public function program()
{
	$this->load->view('header');
    $this->load->view('program');
	$this->load->view('footer');
}

public function blog()
{
	$this->load->view('header');
    $this->load->view('blog');
	$this->load->view('footer');
}

public function tentangbi()
{
	$this->load->view('header');
    $this->load->view('tentangbi');
	$this->load->view('footer');
}

public function cef()
{
	$this->load->view('header');
    $this->load->view('cef');
	$this->load->view('footer');
}

public function login()
{
	$this->load->view('header');
    $this->load->view('login');
	$this->load->view('footer');
}

public function persyaratan()
{
	$this->load->view('header');
    $this->load->view('persyaratan');
	$this->load->view('footer');
}

}
