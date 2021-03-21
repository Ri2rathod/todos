<?php

namespace App\Controllers;

use App\Models\Users;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;

class LoginController extends BaseController
{
	private $login='';
	public function __construct()
	{
		$this->login = new Users();
	}
	public function index()
	{
		// echo"Hello Login Page";
		$session = session();
		$session->setFlashdata('msg','');
		return view('login');
	}
	public function login()
	{
		$data=array('user-email'=>$this->request->getVar('email'),'user-password'=>$this->request->getVar('password'));
		$user=$this->login->where($data);
		$row=$this->login->countAllResults();
		$session=session();
		if($row==1)
		{
			return view('index');
		}
		else
		{
			$session->setFlashdata('msg','is-invalid');
			return view('login');
		}
	}
}
